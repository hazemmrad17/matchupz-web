<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/joueur")
 */
class FootballAnalysisController extends AbstractController
{
    private $processId = null;
    private $currentOutputFile = null;

    /**
     * @Route("", name="joueur_index", methods={"GET"})
     */
    public function joueurIndex(): Response
    {
        return $this->redirectToRoute('football_analysis');
    }

    /**
     * @Route("/football_analysis", name="football_analysis")
     */
    public function index(Request $request): Response
    {
        $outputVideoUrl = null;
        $error = null;
        $trackingData = null;

        $projectRoot = dirname(__DIR__, 3); // Adjust the number of levels based on where this code resides
        $basePath = ['matchupz-web-0', 'var', 'log', 'controller.log']; // Example for a file in the project
        $logFile = $projectRoot . DIRECTORY_SEPARATOR . join(DIRECTORY_SEPARATOR, $basePath);
        $logMessage = function ($message) use ($logFile) {
            error_log(date('[Y-m-d H:i:s] ') . $message . "\n", 3, $logFile);
        };

        // Ensure directories exist and are writable
        $inputDir = $this->getParameter('videos_directory');
        $outputDir = $this->getParameter('output_videos_directory');
        $processedDataDir = realpath($this->getParameter('kernel.project_dir') . '/public/uploads/processed_data');
        $logMessage("Input directory: $inputDir");
        $logMessage("Output directory: $outputDir");
        $logMessage("Processed data directory: $processedDataDir");

        if (!is_dir($inputDir)) {
            mkdir($inputDir, 0755, true);
            $logMessage("Created input directory: $inputDir");
        }
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
            $logMessage("Created output directory: $outputDir");
        }
        if (!is_writable($inputDir)) {
            $error = "Input directory is not writable: $inputDir";
            $logMessage($error);
        }
        if (!is_writable($outputDir)) {
            $error = "Output directory is not writable: $outputDir";
            $logMessage($error);
        }

        if ($request->isMethod('POST') && !$error) {
            $action = $request->request->get('action');

            if ($action === 'stop') {
                if ($this->processId) {
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                        exec("taskkill /PID {$this->processId} /F 2>&1", $output, $returnVar);
                    } else {
                        exec("kill -9 {$this->processId} 2>&1", $output, $returnVar);
                    }
                    $this->processId = null;
                    if ($this->currentOutputFile && file_exists($this->currentOutputFile)) {
                        $relativePath = str_replace(
                            $this->getParameter('output_videos_directory'),
                            '',
                            $this->currentOutputFile
                        );
                        $outputVideoUrl = $this->getParameter('output_videos_directory_url') . $relativePath;
                        $logMessage("Stop: Output video URL set to: $outputVideoUrl");
                    } else {
                        $logMessage("Stop: No output file found at: " . ($this->currentOutputFile ?? 'null'));
                    }
                    $this->currentOutputFile = null;
                    return new JsonResponse(['status' => 'stopped', 'output_video_url' => $outputVideoUrl]);
                }
                return new JsonResponse(['status' => 'no_process']);
            }

            /** @var UploadedFile $videoFile */
            $videoFile = $request->files->get('video');

            if ($videoFile && $videoFile->isValid()) {
                $extension = $videoFile->guessExtension();
                if (!in_array($extension, ['mp4', 'mov', 'avi'])) {
                    $error = 'Unsupported video format. Please upload MP4, MOV, or AVI.';
                } else {
                    $originalFilename = pathinfo($videoFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = preg_replace('/[^A-Za-z0-9_-]/', '', $originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $extension;

                    try {
                        $videoFile->move(
                            $this->getParameter('videos_directory'),
                            $newFilename
                        );

                        $inputVideoPath = $this->getParameter('videos_directory') . DIRECTORY_SEPARATOR . $newFilename;
                        $outputVideoPath = $this->getParameter('output_videos_directory') . DIRECTORY_SEPARATOR . 'output-' . $newFilename;
                        $pythonScriptPath = $this->getParameter('python_script_path');

                        $logMessage("Input Video Path: $inputVideoPath");
                        $logMessage("Output Video Path: $outputVideoPath");
                        $logMessage("Python Script Path: $pythonScriptPath");

                        if (!file_exists($pythonScriptPath)) {
                            $error = "Python script not found at: $pythonScriptPath";
                        } else {
                            $pythonExecutable = 'C:\\Users\\Hazem Mrad\\AppData\\Local\\Programs\\Python\\Python310\\python.exe';
 
                            if (!file_exists($pythonExecutable)) {
                                $error = "Python executable not found at: $pythonExecutable";
                            } else {
                                $this->currentOutputFile = $outputVideoPath;
                                $command = sprintf(
                                    '"%s" %s --input_video %s --output_video %s 2>&1',
                                    $pythonExecutable,
                                    escapeshellarg($pythonScriptPath),
                                    escapeshellarg($inputVideoPath),
                                    escapeshellarg($outputVideoPath)
                                );

                                $logMessage("Executing command: $command");

                                $output = [];
                                $returnVar = 0;
                                $descriptorspec = [
                                    0 => ['pipe', 'r'],
                                    1 => ['pipe', 'w'],
                                    2 => ['pipe', 'w']
                                ];
                                $process = proc_open($command, $descriptorspec, $pipes);
                                if (is_resource($process)) {
                                    $this->processId = proc_get_status($process)['pid'];
                                    fclose($pipes[0]);
                                    $output = stream_get_contents($pipes[1]);
                                    $errorOutput = stream_get_contents($pipes[2]);
                                    fclose($pipes[1]);
                                    fclose($pipes[2]);
                                    $returnVar = proc_close($process);

                                    if ($returnVar === 0 && file_exists($outputVideoPath)) {
                                        $relativePath = str_replace(
                                            $this->getParameter('output_videos_directory'),
                                            '',
                                            $outputVideoPath
                                        );
                                        $outputVideoUrl = $this->getParameter('output_videos_directory_url') . $relativePath;
                                        $logMessage("Processing complete: Output video URL set to: $outputVideoUrl");
                                        if (!file_exists($outputVideoPath)) {
                                            $logMessage("Output file does not exist at: $outputVideoPath");
                                        } else {
                                            $logMessage("Output file exists at: $outputVideoPath, size: " . filesize($outputVideoPath) . " bytes");
                                        }
                                    } else {
                                        $error = 'Error processing video: Return code ' . $returnVar . '. Output: ' . ($output ?: $errorOutput);
                                        if (!file_exists($outputVideoPath)) {
                                            $error .= ' Output file not found at: ' . $outputVideoPath;
                                        }
                                        $logMessage("Processing failed: $error");
                                    }
                                } else {
                                    $error = 'Failed to start video processing.';
                                    $logMessage("Failed to start process: $error");
                                }
                                $this->currentOutputFile = null;
                            }
                        }
                    } catch (FileException $e) {
                        $error = 'Failed to upload video: ' . $e->getMessage();
                        $logMessage("FileException: " . $e->getMessage());
                    }
                }
            } else {
                $error = 'No valid video file uploaded.';
                $logMessage("Invalid video file upload");
            }
        }

        // Check for the latest output video and load tracking data
        if (!$outputVideoUrl) {
            $outputDir = realpath($this->getParameter('output_videos_directory'));
            if ($outputDir === false) {
                $logMessage("Output directory does not exist: " . $this->getParameter('output_videos_directory'));
            } else {
                $logMessage("Normalized output directory: $outputDir");
                $allFiles = scandir($outputDir);
                $logMessage("All files in $outputDir: " . implode(', ', $allFiles));
                $pattern = $outputDir . DIRECTORY_SEPARATOR . 'output-*.mp4';
                $logMessage("Looking for output videos with pattern: $pattern");
                $files = glob($pattern, GLOB_NOSORT);
                $logMessage("Found " . count($files) . " output videos in $outputDir");
                if (!empty($files)) {
                    foreach ($files as $file) {
                        $logMessage("Found output video: $file");
                    }
                    $latestFile = array_reduce($files, function($a, $b) {
                        return filemtime($a) > filemtime($b) ? $a : $b;
                    });
                    $relativePath = str_replace($outputDir, '', $latestFile);
                    $relativePath = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
                    $outputVideoUrl = $this->getParameter('output_videos_directory_url') . $relativePath;
                    $logMessage("Latest output video URL set to: $outputVideoUrl");
                    if (!file_exists($latestFile)) {
                        $logMessage("Latest output file does not exist at: $latestFile");
                    } else {
                        $logMessage("Latest output file exists at: $latestFile, size: " . filesize($latestFile) . " bytes");
                    }
                    // Load tracking data from processed_data/
                    if ($processedDataDir) {
                        $jsonFiles = glob($processedDataDir . DIRECTORY_SEPARATOR . 'output-*.json', GLOB_NOSORT);
                        $logMessage("Found " . count($jsonFiles) . " JSON files in $processedDataDir");
                        if (!empty($jsonFiles)) {
                            $latestJsonFile = array_reduce($jsonFiles, function($a, $b) {
                                return filemtime($a) > filemtime($b) ? $a : $b;
                            });
                            $logMessage("Latest JSON file before processing: $latestJsonFile");
                            if (!file_exists($latestJsonFile)) {
                                $logMessage("Warning: Latest JSON file $latestJsonFile was deleted unexpectedly");
                            }
                            $trackingDataContent = file_get_contents($latestJsonFile);
                            $trackingData = json_decode($trackingDataContent, true);
                            if ($trackingData === null) {
                                $logMessage("Failed to decode JSON from $latestJsonFile: " . json_last_error_msg());
                                $logMessage("Raw JSON content: $trackingDataContent");
                            } else {
                                $logMessage("Tracking data loaded from: $latestJsonFile");
                                $logMessage("Tracking data contents: " . json_encode($trackingData));
                            }
                        } else {
                            $logMessage("No JSON files found in $processedDataDir");
                        }
                    } else {
                        $logMessage("Processed data directory does not exist: $processedDataDir");
                    }
                } else {
                    $logMessage("No output videos found in $outputDir");
                }
            }
        }

        $logMessage("Rendering template with output_video_url: " . ($outputVideoUrl ?? 'null'));
        $logMessage("Rendering template with tracking_data: " . json_encode($trackingData));

        return $this->render('joueur/tracking.html.twig', [
            'output_video_url' => $outputVideoUrl,
            'error' => $error,
            'tracking_data' => $trackingData,
        ]);
    }
}