let lastScannedCode = null;
let scanActive = true;

function initScanner(videoId, resultId) {
    const videoElement = document.getElementById(videoId);
    const resultElement = document.getElementById(resultId);
    
    // Reset state
    lastScannedCode = null;
    scanActive = true;
    
    Quagga.init({
        inputStream: {
            type: "LiveStream",
            target: videoElement,
            constraints: {
                facingMode: "environment",
                width: { ideal: 640 },
                height: { ideal: 480 }
            }
        },
        decoder: {
            readers: [
                "ean_reader",
                "ean_8_reader",
                "code_128_reader",
                "code_39_reader"
            ],
            multiple: false // Ne pas lire plusieurs codes en même temps
        },
        locate: true,
        frequency: 10 // Réduire la fréquence de scan
    }, function(err) {
        if (err) {
            console.error('Erreur initialisation:', err);
            resultElement.innerHTML = `
                <div class="alert alert-danger">
                    Erreur caméra: ${err.message}
                </div>
            `;
            return;
        }
        Quagga.start();
    });

    Quagga.onDetected(async function(result) {
        if (!scanActive) return;
        
        const code = result.codeResult.code;
        if (code === lastScannedCode) return;
        
        lastScannedCode = code;
        scanActive = false;
        
        // Capture l'image du code-barres
        const canvas = Quagga.canvas.dom.image;
        const context = canvas.getContext('2d');
        context.drawImage(Quagga.canvas.dom.image, 0, 0);
        const imageUrl = canvas.toDataURL('image/png');
        
        // Affiche le résultat immédiatement
        resultElement.innerHTML = `
            <div class="scanner-result-content">
                <div class="scanner-image">
                    <img src="${imageUrl}" alt="Code-barres scanné" class="img-thumbnail">
                    <div class="barcode-value">${code}</div>
                </div>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Chargement...</span>
                </div>
            </div>
        `;
        
        try {
            // Vérification serveur
            const response = await fetch(`/materiel/scan?barcode=${encodeURIComponent(code)}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });
            
            if (!response.ok) throw new Error('Erreur serveur');
            
            const data = await response.json();
            
            if (data.materiel) {
                resultElement.innerHTML = `
                    <div class="scanner-result-content">
                        <div class="scanner-image">
                            <img src="${imageUrl}" alt="Code-barres scanné" class="img-thumbnail">
                            <div class="barcode-value">${code}</div>
                        </div>
                        <div class="scanner-details">
                            <h5>Matériel trouvé</h5>
                            <p><strong>Nom:</strong> ${data.materiel.nom}</p>
                            <p><strong>Type:</strong> ${data.materiel.type || 'N/A'}</p>
                            <div class="scanner-actions">
                                <a href="/materiel/${data.materiel.id}" class="btn btn-sm btn-primary">
                                    <i class="bx bx-show"></i> Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                `;
            } else {
                resultElement.innerHTML = `
                    <div class="scanner-result-content">
                        <div class="scanner-image">
                            <img src="${imageUrl}" alt="Code-barres scanné" class="img-thumbnail">
                            <div class="barcode-value">${code}</div>
                        </div>
                        <div class="scanner-details">
                            <h5>Nouveau matériel</h5>
                            <div class="scanner-actions">
                                <a href="/materiel/new?barcode=${code}" class="btn btn-sm btn-success">
                                    <i class="bx bx-plus"></i> Ajouter
                                </a>
                            </div>
                        </div>
                    </div>
                `;
            }
        } catch (error) {
            console.error('Erreur:', error);
            resultElement.innerHTML = `
                <div class="scanner-result-content">
                    <div class="scanner-image">
                        <img src="${imageUrl}" alt="Code-barres scanné" class="img-thumbnail">
                        <div class="barcode-value">${code}</div>
                    </div>
                    <div class="scanner-details alert alert-warning">
                        <h5>Erreur de vérification</h5>
                        <p>Le code a été scanné mais la vérification a échoué.</p>
                        <button onclick="resetScanner()" class="btn btn-sm btn-warning">
                            <i class="bx bx-refresh"></i> Réessayer
                        </button>
                    </div>
                </div>
            `;
        } finally {
            // Réactive le scan après un délai
            setTimeout(() => {
                scanActive = true;
                lastScannedCode = null;
            }, 2000);
        }
    });
}

function resetScanner() {
    const resultElement = document.getElementById('scanner-result');
    resultElement.innerHTML = '<div class="placeholder-text">Scannez un code-barres</div>';
    initScanner('scanner-video', 'scanner-result');
}