<?php
namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class JsonExceptionListener
{
    public function onKernelException(ExceptionEvent $event)
    {
        $request = $event->getRequest();
        if (strpos($request->getPathInfo(), '/materiel/detect-object-webcam') === 0) {
            $exception = $event->getThrowable();
            $statusCode = $exception instanceof HttpExceptionInterface ? $exception->getStatusCode() : 500;
            $message = $exception->getMessage();
            $event->setResponse(new JsonResponse([
                'error' => $message,
                'status' => $statusCode
            ], $statusCode));
        }
    }
}
