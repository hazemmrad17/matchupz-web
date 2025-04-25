document.addEventListener('DOMContentLoaded', async () => {
    const form = document.getElementById('loginForm');
    const emailBlock = document.querySelector('.blocEmail');
    const webcamContainer = document.querySelector('.webcam-container');
    const passwordBlock = document.querySelector('.blocPassword');
    const emailInput = document.getElementById('inputEmail');
    const passwordInput = document.getElementById('inputPassword');
    const btnEmail = document.querySelector('.btnEmail');
    const btnStartWebcam = document.querySelector('.startWebcam');
    const btnFacialReco = document.querySelector('.startFacialReco');
    const btnConnect = document.querySelector('.btnConnect');
    const alert = document.querySelector('.alert');
    const video = document.querySelector('.webcam');
    const canvas = document.getElementById('canvas');
    let stream = null;

    // Load face-api.js models
    await faceApi.nets.ssdMobilenetv1.loadFromUri('/models');
    await faceApi.nets.faceLandmark68Net.loadFromUri('/models');
    await faceApi.nets.faceRecognitionNet.loadFromUri('/models');

    // Email validation
    btnEmail.addEventListener('click', async () => {
        const email = emailInput.value;
        if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            emailInput.classList.add('is-invalid');
            return;
        }
        emailInput.classList.remove('is-invalid');
        emailBlock.classList.add('d-none');
        webcamContainer.classList.remove('d-none');
    });

    // Start webcam
    btnStartWebcam.addEventListener('click', async () => {
        try {
            stream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = stream;
            btnStartWebcam.classList.add('d-none');
            btnFacialReco.classList.remove('d-none');
        } catch (err) {
            console.error('Webcam error:', err);
            showAlert('error', 'Could not access webcam. Please ensure it is enabled.');
            webcamContainer.classList.add('d-none');
            passwordBlock.classList.remove('d-none');
        }
    });

    // Facial recognition
    btnFacialReco.addEventListener('click', async () => {
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0);
        const imageData = canvas.toDataURL('image/jpeg');

        if (stream) {
            stream.getTracks().forEach(track => track.stop());
        }
        webcamContainer.classList.add('d-none');

        try {
            const response = await fetch('{{ path('app_user_face_id_login') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '{{ csrf_token('face_id') }}'
                },
                body: JSON.stringify({
                    email: emailInput.value,
                    image: imageData
                })
            });

            const result = await response.json();
            if (result.success) {
                window.location.href = '{{ path('app_acceuil') }}';
            } else {
                showAlert('error', result.message);
                passwordBlock.classList.remove('d-none');
            }
        } catch (err) {
            console.error('Face ID error:', err);
            showAlert('error', 'Error during face recognition.');
            passwordBlock.classList.remove('d-none');
        }
    });

    // Password login
    btnConnect.addEventListener('click', (e) => {
        e.preventDefault();
        if (!passwordInput.value || passwordInput.value.length < 8) {
            passwordInput.classList.add('is-invalid');
            return;
        }
        passwordInput.classList.remove('is-invalid');
        form.action = '{{ path('app_verif_userF') }}';
        form.method = 'POST';
        form.submit();
    });

    // Show alert
    function showAlert(type, message) {
        alert.classList.remove('d-none', 'alert-success', 'alert-danger');
        alert.classList.add(`alert-${type === 'error' ? 'danger' : 'success'}`);
        alert.textContent = message;
        setTimeout(() => alert.classList.add('d-none'), 5000);
    }
});