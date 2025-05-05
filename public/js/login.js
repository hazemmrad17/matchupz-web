// public/js/login.js

// DOM elements
const emailSection = document.getElementById('emailSection');
const faceIdSection = document.getElementById('faceIdSection');
const passwordSection = document.getElementById('passwordSection');
const validateEmailBtn = document.getElementById('validateEmail');
const startWebcamBtn = document.getElementById('startWebcam');
const startFacialRecoBtn = document.getElementById('startFacialReco');
const usePasswordLink = document.getElementById('usePasswordLink');
const faceIdAlert = document.getElementById('faceIdAlert');
const confidenceScore = document.getElementById('confidenceScore');
const loginForm = document.getElementById('loginForm');
const faceIdTokenInput = document.getElementById('faceIdToken');
const video = document.querySelector('.webcam');
const canvas = document.querySelector('.webcam-canvas');
const registerFaceIdBtn = document.getElementById('registerFaceIdBtn');

// Log DOM elements
console.log('DOM elements:', {
    emailSection: !!emailSection,
    faceIdSection: !!faceIdSection,
    passwordSection: !!passwordSection,
    validateEmailBtn: !!validateEmailBtn,
    startWebcamBtn: !!startWebcamBtn,
    startFacialRecoBtn: !!startFacialRecoBtn,
    usePasswordLink: !!usePasswordLink,
    faceIdAlert: !!faceIdAlert,
    confidenceScore: !!confidenceScore,
    loginForm: !!loginForm,
    faceIdTokenInput: !!faceIdTokenInput,
    video: !!video,
    canvas: !!canvas,
    registerFaceIdBtn: !!registerFaceIdBtn,
});

let stream = null;
let faceDescriptor = null;

// Show alert
function showAlert(message, type) {
    if (faceIdAlert) {
        faceIdAlert.classList.remove('d-none', 'alert-success', 'alert-danger', 'alert-warning');
        faceIdAlert.classList.add(`alert-${type}`);
        faceIdAlert.innerText = message;
        console.log(`Alert shown: ${type} - ${message}`);
    } else {
        console.error('faceIdAlert not found, using native alert:', message);
        alert(message);
    }
}

// Load face-api.js models
async function loadModels() {
    try {
        const modelUrl = 'https://raw.githubusercontent.com/justadudewhohacks/face-api.js/master/weights/';
        console.log('Loading models from:', modelUrl);
        await Promise.all([
            faceapi.nets.tinyFaceDetector.loadFromUri(modelUrl),
            faceapi.nets.ssdMobilenetv1.loadFromUri(modelUrl), // Fallback model
            faceapi.nets.faceLandmark68Net.loadFromUri(modelUrl),
            faceapi.nets.faceRecognitionNet.loadFromUri(modelUrl),
        ]);
        console.log('Models loaded successfully');
        showAlert('Modèles chargés avec succès.', 'success');
    } catch (err) {
        console.error('Model loading error:', err);
        showAlert('Erreur lors du chargement des modèles : ' + err.message, 'danger');
        throw err;
    }
}

// Start webcam
async function startWebcam() {
    try {
        stream = await navigator.mediaDevices.getUserMedia({ video: {} });
        if (video) {
            video.srcObject = stream;
            video.onloadedmetadata = () => {
                video.play();
                console.log('Webcam stream started, video dimensions:', video.videoWidth, video.videoHeight);
                if (video.videoWidth === 0 || video.videoHeight === 0) {
                    console.error('Invalid video dimensions');
                    showAlert('Erreur : dimensions de la vidéo invalides.', 'danger');
                    return;
                }
                startDetection();
                showAlert('Webcam démarrée avec succès.', 'success');
            };
        } else {
            console.error('Video element not found');
            showAlert('Erreur : élément vidéo non trouvé.', 'danger');
        }
    } catch (err) {
        console.error('Webcam error:', err);
        showAlert('Erreur lors de l\'accès à la webcam : ' + err.message, 'danger');
    }
}

// Start facial detection
async function startDetection() {
    if (!video || !canvas) {
        console.error('Video or canvas element missing');
        showAlert('Erreur : élément vidéo ou canvas manquant.', 'danger');
        return;
    }

    const displaySize = { width: video.videoWidth, height: video.videoHeight };
    faceapi.matchDimensions(canvas, displaySize);
    console.log('Canvas dimensions set:', displaySize);

    const ctx = canvas.getContext('2d');
    if (!ctx) {
        console.error('Failed to get canvas 2D context');
        showAlert('Erreur : impossible d\'accéder au contexte du canvas.', 'danger');
        return;
    }

    setInterval(async () => {
        console.log('Running detection...');
        try {
            // Try tinyFaceDetector first
            let detections = await faceapi.detectAllFaces(
                video,
                new faceapi.TinyFaceDetectorOptions({ inputSize: 128, scoreThreshold: 0.2 })
            )
                .withFaceLandmarks()
                .withFaceDescriptors();

            // Fallback to ssdMobilenetv1 if no detections
            if (detections.length === 0) {
                console.log('No faces with tinyFaceDetector, trying ssdMobilenetv1...');
                detections = await faceapi.detectAllFaces(
                    video,
                    new faceapi.SsdMobilenetv1Options({ minConfidence: 0.3 })
                )
                    .withFaceLandmarks()
                    .withFaceDescriptors();
            }

            console.log('Detections:', detections);
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            // Debug: Fill canvas to confirm rendering
            ctx.fillStyle = 'rgba(0, 255, 0, 0.1)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            const resizedDetections = faceapi.resizeResults(detections, displaySize);
            faceapi.draw.drawDetections(canvas, resizedDetections);
            faceapi.draw.drawFaceLandmarks(canvas, resizedDetections);

            if (detections.length > 0) {
                const confidence = detections[0].detection.score;
                confidenceScore.innerText = confidence.toFixed(2);
                faceDescriptor = detections[0].descriptor;
                console.log('Face detected, confidence:', confidence, 'Descriptor length:', faceDescriptor?.length);
                showAlert('Visage détecté avec succès ! Cliquez sur "Identifier".', 'success');
            } else {
                confidenceScore.innerText = '0.00';
                console.log('No face detected');
                showAlert('Aucun visage détecté. Veuillez vous positionner devant la caméra.', 'danger');
            }
        } catch (err) {
            console.error('Detection error:', err);
            showAlert('Erreur lors de la détection du visage : ' + err.message, 'danger');
        }
    }, 500);
}

// Validate email
if (validateEmailBtn) {
    validateEmailBtn.addEventListener('click', async () => {
        console.log('Validate email button clicked');
        const emailInput = document.getElementById('username');
        const email = emailInput ? emailInput.value : '';
        if (!email) {
            showAlert('Veuillez entrer un email.', 'danger');
            return;
        }

        try {
            console.log('Sending check-face-id-available request for email:', email);
            const response = await fetch('/check-face-id-available', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email }),
            });
            const result = await response.json();
            console.log('Check-face-id-available response:', result);

            if (result.hasFaceId) {
                emailSection.classList.add('d-none');
                faceIdSection.classList.remove('d-none');
            } else {
                emailSection.classList.add('d-none');
                passwordSection.classList.remove('d-none');
            }
        } catch (err) {
            console.error('Check-face-id-available error:', err);
            showAlert('Erreur lors de la vérification de l\'email : ' + err.message, 'danger');
        }
    });
} else {
    console.error('validateEmailBtn not found in DOM');
}

// Start webcam button
if (startWebcamBtn) {
    startWebcamBtn.addEventListener('click', async () => {
        console.log('Start webcam button clicked');
        try {
            await loadModels();
            await startWebcam();
        } catch (err) {
            console.error('Error starting webcam:', err);
            showAlert('Erreur lors du démarrage de la webcam : ' + err.message, 'danger');
        }
    });
} else {
    console.error('startWebcamBtn not found in DOM');
}

// Facial recognition button
if (startFacialRecoBtn) {
    startFacialRecoBtn.addEventListener('click', async () => {
        console.log('Identifier button clicked');
        showAlert('Identifier button clicked!', 'info'); // Replace native alert

        if (!video || !video.srcObject) {
            showAlert('La webcam n\'est pas démarrée. Veuillez cliquer sur "Démarrer la webcam".', 'danger');
            console.error('Webcam not started or video element missing');
            return;
        }

        // Retry detection up to 3 times
        for (let attempt = 1; attempt <= 3; attempt++) {
            if (!faceDescriptor) {
                console.log(`Retry detection attempt ${attempt}...`);
                try {
                    let detections = await faceapi.detectAllFaces(
                        video,
                        new faceapi.TinyFaceDetectorOptions({ inputSize: 128, scoreThreshold: 0.2 })
                    )
                        .withFaceLandmarks()
                        .withFaceDescriptors();

                    if (detections.length === 0) {
                        console.log(`No faces with tinyFaceDetector (attempt ${attempt}), trying ssdMobilenetv1...`);
                        detections = await faceapi.detectAllFaces(
                            video,
                            new faceapi.SsdMobilenetv1Options({ minConfidence: 0.3 })
                        )
                            .withFaceLandmarks()
                            .withFaceDescriptors();
                    }

                    console.log(`Retry detections (attempt ${attempt}):`, detections);
                    if (detections.length > 0) {
                        faceDescriptor = detections[0].descriptor;
                        console.log('Retry detection successful, Descriptor length:', faceDescriptor?.length);
                        showAlert('Visage détecté lors de la tentative ' + attempt, 'success');
                        break;
                    } else {
                        console.log(`Retry detection failed (attempt ${attempt}), no faces found`);
                    }
                } catch (err) {
                    console.error(`Retry detection error (attempt ${attempt}):`, err);
                    showAlert('Erreur lors de la détection du visage : ' + err.message, 'danger');
                    return;
                }
            }
        }

        if (!faceDescriptor) {
            showAlert('Aucun visage détecté après plusieurs tentatives. Veuillez vous positionner devant la caméra.', 'danger');
            return;
        }

        const emailInput = document.getElementById('username');
        const email = emailInput ? emailInput.value : '';
        if (!email) {
            showAlert('Veuillez entrer un email.', 'danger');
            return;
        }

        try {
            console.log('Sending verify-face-id request for email:', email);
            const response = await fetch('/verify-face-id', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email, descriptor: Array.from(faceDescriptor) }),
            });
            const result = await response.json();
            console.log('Verify-face-id response:', result);

            if (result.success) {
                faceIdTokenInput.value = result.token;
                loginForm.submit();
                console.log('Form submitted with token:', result.token);
                showAlert('Connexion réussie ! Redirection en cours...', 'success');
            } else {
                showAlert('Échec de la vérification du visage : ' + result.message, 'danger');
            }
        } catch (err) {
            console.error('Verify-face-id error:', err);
            showAlert('Erreur lors de la vérification du visage : ' + err.message, 'danger');
        }
    });
} else {
    console.error('startFacialRecoBtn not found in DOM');
}

// Register Face ID
if (registerFaceIdBtn) {
    registerFaceIdBtn.addEventListener('click', async () => {
        console.log('Register Face ID button clicked');
        if (!faceDescriptor) {
            showAlert('Aucun visage détecté. Veuillez démarrer la webcam et vous positionner correctement.', 'danger');
            return;
        }

        const emailInput = document.getElementById('username');
        const email = emailInput ? emailInput.value : '';
        if (!email) {
            showAlert('Veuillez entrer un email.', 'danger');
            return;
        }

        try {
            console.log('Sending store-face-id request for email:', email);
            const response = await fetch('/store-face-id', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email, descriptor: Array.from(faceDescriptor) }),
            });
            const result = await response.json();
            console.log('Store-face-id response:', result);

            if (result.success) {
                showAlert('Face ID enregistré avec succès !', 'success');
            } else {
                showAlert('Échec de l\'enregistrement : ' + result.message, 'danger');
            }
        } catch (err) {
            console.error('Store-face-id error:', err);
            showAlert('Erreur lors de l\'enregistrement du visage : ' + err.message, 'danger');
        }
    });
} else {
    console.log('registerFaceIdBtn not found in DOM');
}

// Use password link
if (usePasswordLink) {
    usePasswordLink.addEventListener('click', (e) => {
        e.preventDefault();
        console.log('Use password link clicked');
        if (stream) {
            stream.getTracks().forEach(track => track.stop());
            console.log('Webcam stream stopped');
        }
        faceIdSection.classList.add('d-none');
        passwordSection.classList.remove('d-none');
    });
} else {
    console.error('usePasswordLink not found in DOM');
}