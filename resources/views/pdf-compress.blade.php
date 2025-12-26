<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro PDF Compressor</title>
    
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
            max-width: 650px;
            overflow: hidden;
        }

        .upload-area {
            position: relative;
            border: 2px dashed #cbd5e1;
            border-radius: 15px;
            padding: 40px 20px;
            text-align: center;
            background: #f8fafc;
            transition: all 0.3s ease;
        }

        .upload-area:hover {
            border-color: #3b82f6;
            background: #eff6ff;
        }

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

        /* Range Slider Styling */
        input[type=range] {
            height: 6px;
        }
        
        .settings-panel {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container p-3">
    <div class="main-card mx-auto">
        <div class="p-4 p-md-5">
            <h3 class="fw-bold text-center mb-4">Pro PDF Compressor</h3>

            <div id="uploadSection">
                <div class="upload-area mb-4">
                    <input type="file" id="fileInput" class="file-input-overlay" accept="application/pdf">
                    <div class="pointer-events-none">
                        <i class="fa-solid fa-file-pdf text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5 class="fw-bold">Click or Drag PDF here</h5>
                        <p class="text-muted small mb-0">Local Browser Processing (Private & Secure)</p>
                    </div>
                </div>

                <div class="accordion" id="optionsAccordion">
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-light rounded-3 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOptions">
                                <i class="fa-solid fa-sliders me-2"></i> Compression Settings
                            </button>
                        </h2>
                        <div id="collapseOptions" class="accordion-collapse collapse show" data-bs-parent="#optionsAccordion">
                            <div class="accordion-body p-0 pt-3">
                                <div class="settings-panel">
                                    
                                    <div class="mb-3">
                                        <label class="form-label fw-bold small text-muted">Preset Mode</label>
                                        <select class="form-select" id="presetSelect">
                                            <option value="balanced" selected>Balanced (Recommended)</option>
                                            <option value="extreme">Extreme Compression (Low Quality)</option>
                                            <option value="high_res">High Resolution (Print Quality)</option>
                                            <option value="custom">Custom Settings</option>
                                        </select>
                                    </div>

                                    <div id="customControls" class="hidden">
                                        <div class="mb-3">
                                            <label class="form-label d-flex justify-content-between small fw-bold">
                                                <span>Resolution (DPI)</span>
                                                <span id="dpiValue" class="text-primary">144 DPI</span>
                                            </label>
                                            <input type="range" class="form-range" id="scaleRange" min="0.5" max="3.0" step="0.1" value="1.5">
                                            <div class="d-flex justify-content-between text-muted" style="font-size: 10px;">
                                                <span>Screen (Low)</span>
                                                <span>Print (High)</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label d-flex justify-content-between small fw-bold">
                                                <span>Image Quality</span>
                                                <span id="qualityValue" class="text-primary">70%</span>
                                            </label>
                                            <input type="range" class="form-range" id="qualityRange" min="0.1" max="1.0" step="0.05" value="0.7">
                                        </div>
                                    </div>

                                    <div class="form-check form-switch mt-3">
                                        <input class="form-check-input" type="checkbox" id="grayscaleCheck">
                                        <label class="form-check-label small fw-bold" for="grayscaleCheck">Convert to Grayscale (B&W)</label>
                                        <div class="text-muted" style="font-size: 0.75rem;">Greatly reduces size for documents.</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="startBtn" class="btn btn-primary w-100 py-3 mt-4 rounded-3 fw-bold disabled" disabled>
                    Start Compression
                </button>
            </div>

            <div id="processingSection" class="hidden text-center py-4">
                <div class="spinner-border text-primary mb-3" role="status"></div>
                <h5 class="fw-bold">Optimizing Pages...</h5>
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
                    <h4>Optimization Complete!</h4>
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
                            <small class="d-block" style="opacity: 0.8">New Size</small>
                            <span id="newSize" class="fw-bold">0 MB</span>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info small py-2 text-center" id="savingInfo">
                    <span id="percentSaved">0%</span> reduction achieved.
                </div>

                <button id="downloadBtn" class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-sm">
                    <i class="fa-solid fa-download me-2"></i> Download PDF
                </button>
                
                <div class="text-center mt-3">
                    <button onclick="location.reload()" class="btn btn-link text-muted btn-sm text-decoration-none">
                        Compress another file
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script>
    // 1. Worker Setup
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    let selectedFile = null;

    $(document).ready(function() {
        
        // --- UI INTERACTION LOGIC ---

        // File Selected
        $('#fileInput').on('change', function(e) {
            selectedFile = e.target.files[0];
            if (selectedFile) {
                if(selectedFile.type !== 'application/pdf') {
                    alert("Please select a valid PDF file");
                    return;
                }
                // Change UI to show file is selected
                $('.upload-area').css('border-color', '#198754').css('background', '#f0fdf4');
                $('.upload-area h5').text(selectedFile.name);
                $('.upload-area p').text(formatBytes(selectedFile.size));
                $('.upload-area i').removeClass('fa-file-pdf text-primary').addClass('fa-check-circle text-success');
                $('#startBtn').removeClass('disabled').prop('disabled', false);
            }
        });

        // Preset Logic
        $('#presetSelect').on('change', function() {
            const mode = $(this).val();
            if (mode === 'custom') {
                $('#customControls').removeClass('hidden');
            } else {
                $('#customControls').addClass('hidden');
                // Apply preset values internally logic handled in startCompression
            }
        });

        // Sliders Feedback
        $('#scaleRange').on('input', function() {
            const scale = parseFloat($(this).val());
            const dpi = Math.round(scale * 96); // Approx DPI calculation
            $('#dpiValue').text(dpi + ' DPI');
        });

        $('#qualityRange').on('input', function() {
            const q = Math.round($(this).val() * 100);
            $('#qualityValue').text(q + '%');
        });


        // --- MAIN PROCESSING LOGIC ---

        $('#startBtn').on('click', async function() {
            if (!selectedFile) return;

            // UI Transitions
            $('#uploadSection').addClass('hidden');
            $('#processingSection').removeClass('hidden');
            $('#originalSize').text(formatBytes(selectedFile.size));

            // Determine Settings
            let scale, quality;
            const mode = $('#presetSelect').val();
            const isGrayscale = $('#grayscaleCheck').is(':checked');

            if (mode === 'balanced') {
                scale = 1.5; // Good for readable text (~150dpi)
                quality = 0.6;
            } else if (mode === 'extreme') {
                scale = 1.0; // Standard screen (~96dpi)
                quality = 0.4;
            } else if (mode === 'high_res') {
                scale = 2.0; // Crisp text (~200dpi)
                quality = 0.8;
            } else {
                // Custom
                scale = parseFloat($('#scaleRange').val());
                quality = parseFloat($('#qualityRange').val());
            }

            try {
                // Read File
                const arrayBuffer = await selectedFile.arrayBuffer();
                const pdf = await pdfjsLib.getDocument(arrayBuffer).promise;
                const totalPages = pdf.numPages;
                
                // Initialize jsPDF
                const { jsPDF } = window.jspdf;
                // 'p' = portrait, 'mm' = units, 'a4' = format (we will adjust per page anyway)
                const doc = new jsPDF({ compress: true }); 

                for (let i = 1; i <= totalPages; i++) {
                    $('#pageStatus').text(`Processing Page ${i} of ${totalPages}...`);
                    const percent = Math.round((i / totalPages) * 100);
                    $('#progressBar').css('width', percent + '%');

                    const page = await pdf.getPage(i);
                    const viewport = page.getViewport({ scale: scale });

                    // Create Canvas
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    // Apply Grayscale Filter if checked
                    if (isGrayscale) {
                        ctx.filter = 'grayscale(100%)';
                    }

                    // Render Page to Canvas
                    await page.render({ canvasContext: ctx, viewport: viewport }).promise;

                    // Convert Canvas to Image Data (JPEG)
                    const imgData = canvas.toDataURL('image/jpeg', quality);

                    // Calculate Dimensions for PDF (Convert pixels to PDF points/mm)
                    const imgProps = doc.getImageProperties(imgData);
                    const pdfWidth = imgProps.width * 0.264583; // px to mm conversion approx
                    const pdfHeight = imgProps.height * 0.264583;

                    // Add Page to PDF
                    // The first page is automatically created, so we set size for 1, add for others
                    if (i === 1) {
                        doc.deletePage(1); // Remove default blank page
                        doc.addPage([pdfWidth, pdfHeight]);
                    } else {
                        doc.addPage([pdfWidth, pdfHeight]);
                    }
                    
                    doc.addImage(imgData, 'JPEG', 0, 0, pdfWidth, pdfHeight);
                }

                // Output Result
                const compressedPdf = doc.output('blob');
                
                // Show Result UI
                $('#processingSection').addClass('hidden');
                $('#resultSection').removeClass('hidden');
                $('#newSize').text(formatBytes(compressedPdf.size));

                // Calculate savings
                const savings = ((selectedFile.size - compressedPdf.size) / selectedFile.size) * 100;
                const savedText = savings > 0 ? Math.round(savings) + '%' : '0%';
                $('#percentSaved').text(savedText);

                if (savings < 0) {
                    $('#savingInfo').addClass('alert-warning').removeClass('alert-info').text('File size increased. Try lowering quality or resolution.');
                }

                // Setup Download
                $('#downloadBtn').off('click').on('click', function() {
                    doc.save('optimized_' + selectedFile.name);
                });

            } catch (err) {
                console.error(err);
                alert("An error occurred during compression.");
                location.reload();
            }
        });

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