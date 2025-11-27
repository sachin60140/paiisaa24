<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Compressor</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: system-ui, -apple-system, sans-serif;
        }

        .main-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            width: 100%;
            max-width: 600px;
            overflow: hidden;
        }

        .upload-area {
            position: relative; /* Important for the overlay */
            border: 2px dashed #cbd5e1;
            border-radius: 15px;
            padding: 50px 20px;
            text-align: center;
            background: #f8fafc;
            transition: all 0.3s ease;
        }

        .upload-area:hover {
            border-color: #3b82f6;
            background: #eff6ff;
        }

        /* THE FIX: Make the input cover the entire area but be invisible */
        .file-input-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
            z-index: 10;
        }

        .hidden { display: none !important; }

        .progress { height: 8px; border-radius: 4px; }
        
        .stat-box {
            background: #f1f5f9;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container p-3">
    <div class="main-card mx-auto">
        <div class="p-4 p-md-5">
            <h3 class="fw-bold text-center mb-4">Compress PDF</h3>

            <div id="uploadSection">
                <div class="upload-area">
                    <input type="file" id="fileInput" class="file-input-overlay" accept="application/pdf">
                    
                    <div class="pointer-events-none">
                        <i class="fa-solid fa-file-arrow-up text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5 class="fw-bold">Click or Drag PDF here</h5>
                        <p class="text-muted small mb-0">Processing is done in your browser</p>
                    </div>
                </div>

                <div class="mt-4">
                    <label class="form-label fw-bold small text-muted">Compression Strength</label>
                    <select class="form-select" id="qualitySelect">
                        <option value="0.8">Low (Better Quality)</option>
                        <option value="0.5" selected>Medium (Balanced)</option>
                        <option value="0.3">High (Smallest Size)</option>
                    </select>
                </div>
            </div>

            <div id="processingSection" class="hidden text-center py-3">
                <div class="spinner-border text-primary mb-3" role="status"></div>
                <h5 class="fw-bold">Compressing...</h5>
                <p id="pageStatus" class="text-muted small">Initializing PDF engine...</p>
                <div class="progress mt-3">
                    <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 0%"></div>
                </div>
            </div>

            <div id="resultSection" class="hidden">
                <div class="text-center mb-4">
                    <div class="text-success mb-2" style="font-size: 3rem;">
                        <i class="fa-regular fa-circle-check"></i>
                    </div>
                    <h4>Done!</h4>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <div class="stat-box">
                            <small class="text-muted d-block">Original</small>
                            <span id="originalSize" class="fw-bold">0 MB</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box" style="background: #ecfdf5; color: #059669;">
                            <small class="d-block" style="opacity: 0.8">Compressed</small>
                            <span id="newSize" class="fw-bold">0 MB</span>
                        </div>
                    </div>
                </div>

                <button id="downloadBtn" class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-sm">
                    <i class="fa-solid fa-download me-2"></i> Download File
                </button>
                
                <div class="text-center mt-3">
                    <button onclick="location.reload()" class="btn btn-link text-muted btn-sm text-decoration-none">
                        Compress another PDF
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script>
    // 1. Worker Setup (Crucial for PDF.js)
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    $(document).ready(function() {
        
        // 2. File Selection Handler
        // We listen for 'change' because the user clicks the transparent input directly
        $('#fileInput').on('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                startCompression(file);
            }
        });

        // 3. Compression Logic
        async function startCompression(file) {
            if (file.type !== 'application/pdf') {
                alert('Please upload a valid PDF file.');
                return;
            }

            // Show Processing UI
            $('#uploadSection').addClass('hidden');
            $('#processingSection').removeClass('hidden');
            $('#originalSize').text(formatBytes(file.size));

            try {
                // Read PDF
                const arrayBuffer = await file.arrayBuffer();
                const pdf = await pdfjsLib.getDocument(arrayBuffer).promise;
                const totalPages = pdf.numPages;
                
                // Init jsPDF
                const { jsPDF } = window.jspdf;
                const doc = new jsPDF();
                
                // Get Quality Setting
                const quality = parseFloat($('#qualitySelect').val());

                // Loop Pages
                for (let i = 1; i <= totalPages; i++) {
                    $('#pageStatus').text(`Processing Page ${i} of ${totalPages}...`);
                    const percent = Math.round((i / totalPages) * 100);
                    $('#progressBar').css('width', percent + '%');

                    // Render Page
                    const page = await pdf.getPage(i);
                    // Scale 1.5 gives good balance of readibility/speed
                    const viewport = page.getViewport({ scale: 1.5 }); 
                    
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    await page.render({ canvasContext: ctx, viewport: viewport }).promise;

                    // Compress to JPEG
                    const imgData = canvas.toDataURL('image/jpeg', quality);

                    // Add to PDF
                    const imgProps = doc.getImageProperties(imgData);
                    const pdfWidth = doc.internal.pageSize.getWidth();
                    const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;

                    if (i > 1) doc.addPage();
                    doc.addImage(imgData, 'JPEG', 0, 0, pdfWidth, pdfHeight);
                }

                // Finalize
                const compressedPdf = doc.output('blob');
                
                // Show Result
                $('#processingSection').addClass('hidden');
                $('#resultSection').removeClass('hidden');
                $('#newSize').text(formatBytes(compressedPdf.size));

                // Download Setup
                $('#downloadBtn').off('click').on('click', function() {
                    doc.save('compressed_' + file.name);
                });

            } catch (err) {
                console.error(err);
                alert('Error processing file. Please try a different PDF.');
                location.reload();
            }
        }

        // Helper: Format File Size
        function formatBytes(bytes) {
            if (bytes === 0) return '0 B';
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(1024));
            return parseFloat((bytes / Math.pow(1024, i)).toFixed(2)) + ' ' + sizes[i];
        }
    });
</script>

</body>
</html>