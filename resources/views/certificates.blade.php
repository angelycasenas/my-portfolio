<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Certificates | Angely Caseñas</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Certificates Page -->
    <main class="certificates-page">

        <div class="certificates-header">

            <h1>My Certificates</h1>

            <p>
                Here are some of the certificates I have earned
                from online courses and learning activities.
            </p>

        </div>


        <div class="certificate-grid">

            <!-- Certificate 1 -->
            <div class="certificate-card">

                <img src="{{ asset('images/certificates/certificate1.png') }}"
                     alt="Certificate 1"
                      onclick="openCertificate(this)"
                      >

                <div class="certificate-info">

                    <h3>Analysis for Business Systems</h3>

                    <p>Coursera</p>

                </div>

            </div>


            <!-- Certificate 2 -->
            <div class="certificate-card">

                <img src="{{ asset('images/certificates/certificate2.png') }}"
                     alt="Certificate 2"
                      onclick="openCertificate(this)"
                      >
                <div class="certificate-info">

                    <h3>Ethical Hacking Essentials (EHE)</h3>

                    <p>Coursera</p>

                </div>

            </div>


            <!-- Certificate 3 -->
            <div class="certificate-card">

                <img src="{{ asset('images/certificates/certificate3.png') }}"
                     alt="Certificate 3"
                      onclick="openCertificate(this)"
                      >

                <div class="certificate-info">

                    <h3>Google AI Essentials</h3>

                    <p>Coursera</p>

                </div>

            </div>
            

            <!-- Certificate 4 -->
            <div class="certificate-card">

                <img src="{{ asset('images/certificates/certificate4.png') }}"
                     alt="Certificate 4"
                      onclick="openCertificate(this)"
                      >

                <div class="certificate-info">

                    <h3>Guided Website Development Project</h3>

                    <p>Coursera</p>

                </div>

            </div>


            <!-- Certificate 5 -->
            <div class="certificate-card">

                <img src="{{ asset('images/certificates/certificate5.png') }}"
                     alt="Certificate 5"
                      onclick="openCertificate(this)"
                      >

                <div class="certificate-info">

                    <h3>Introduction to Data Analytics</h3>

                    <p>Coursera</p>

                </div>

            </div>


            <!-- Certificate 6 -->
            <div class="certificate-card">

                <img src="{{ asset('images/certificates/certificate6.png') }}"
                     alt="Certificate 6"
                      onclick="openCertificate(this)"
                      >

                <div class="certificate-info">

                    <h3>Introduction to Web Development with HTML, CSS,
JavaScript</h3>

                    <p>Coursera</p>

                </div>

            </div>

   
            <!-- Certificate 7 -->
            <div class="certificate-card">

                <img src="{{ asset('images/certificates/certificate7.png') }}"
                     alt="Certificate 7"
                      onclick="openCertificate(this)"
                      >

                <div class="certificate-info">

                    <h3>The Arduino Platform and C Programming</h3>

                    <p>Coursera</p>

                </div>

            </div>

    
            <!-- Certificate 8 -->
            <div class="certificate-card">

                <img src="{{ asset('images/certificates/certificate8.png') }}"
                     alt="Certificate 8"
                      onclick="openCertificate(this)"
                      >

                <div class="certificate-info">

                    <h3>Interfacing with the Arduino</h3>

                    <p>Coursera</p>

                </div>

            </div>

        </div>


        <!-- Back to Portfolio -->
        <div class="back-button">

            <a href="{{ url('/') }}" class="btn btn-primary">
                Back to Portfolio
            </a>

        </div>

    </main>

       <!-- Image Preview Popup -->
    <div id="certificateModal" class="certificate-modal">

        <span class="close-modal" onclick="closeCertificate()">
            &times;
        </span>

        <img
            id="previewImage"
            class="modal-content"
            alt="Certificate Preview"
        >

    </div>


    <!-- JavaScript -->
    <script>

        // Open certificate
        function openCertificate(image) {

            const modal = document.getElementById('certificateModal');

            const preview = document.getElementById('previewImage');

            modal.style.display = 'flex';

            preview.src = image.src;

        }


        // Close certificate
        function closeCertificate() {

            document.getElementById('certificateModal').style.display = 'none';

        }


        // Close when clicking outside image
        document.getElementById('certificateModal').addEventListener('click', function(event) {

            if (event.target === this) {
                closeCertificate();
            }

        });


        // Close using ESC key
        document.addEventListener('keydown', function(event) {

            if (event.key === 'Escape') {
                closeCertificate();
            }

        });

    </script>

</body>
</html>