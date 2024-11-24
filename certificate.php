<?php
// Define the path to the certificates folder
$folder = "certificates/";

// Get all image files from the certificates folder
$images = glob($folder . "*.{jpg,png,jpeg,gif}", GLOB_BRACE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates Gallery</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Modern Card Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        h2 {
            font-weight: bold;
            color: #212529;
            margin-bottom: 20px;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            border-bottom: 1px solid #ddd;
            border-radius: 0;
            display: block;
            max-width: 100%;
            height: auto;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #0056b3;
        }
        .card-body {
            background: #fff;
        }
        .card-body:hover {
            background: #f5faff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" data-aos="fade-down">
        <a class="navbar-brand" href="index.html">Krishanth G</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Certificate.php">Licenses & Certifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="skills.html">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/krishanth-g/recent-activity/articles/">Articles</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Certificates Gallery Section -->
    <div class="container my-5" id="certificates-section">
        <h2 class="text-center">Certificates Achieved</h2>
        <p class="text-center text-muted mb-4">Showcasing some of my professional achievements.</p>
        <div class="row g-4">
            <?php
            // Loop through each image and display it in the gallery
            foreach ($images as $image) {
                // Extract the image name without the extension
                $imageName = pathinfo($image, PATHINFO_FILENAME);
                echo '
                    <div class="col-md-4 col-sm-6">
                        <div class="card shadow-sm h-100">
                            <img src="' . $image . '" class="card-img-top" alt="' . $imageName . '">
                            <div class="card-body text-center">
                                <h5 class="card-title">' . $imageName . '</h5>
                            </div>
                        </div>
                    </div>
                ';
            }
            ?>
        </div>
    </div>


   
    <!-- Footer Section -->
    <footer class="bg-dark text-light pt-4" style="margin-left: ;">
        <div class="container">
            <div class="row">
                <!-- Quick Links -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-light">Home</a></li>
                        <li><a href="skills.html" class="text-light">Skills</a></li>
                        <li><a href="certificate.php" class="text-light">Certifications</a></li>
                        <li><a href="https://www.linkedin.com/in/krishanth-g/recent-activity/articles/" class="text-light">Articles</a></li>
                    </ul>
                </div>
    
                <!-- Social Media Links -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Follow Me</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.linkedin.com/in/krishanth-g" target="_blank" class="text-light">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyZr_TcrM65k9vQkbPQy_aK9Fg_bvya1ydMg&s" alt="LinkedIn" class="footer-icon rounded-circle"> LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/KrishanthG" target="_blank" class="text-light">
                                <img src="https://holoms.com/images/services/github.png" alt="GitHub" class="footer-icon rounded-circle"> GitHub
                            </a>
                        </li>
                        <li>
                            <a href="mailto:gkrishanth2023@gmail.com" class="text-light">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkVPRNqc5tiiQoTIj2kseY6t2foptXdjpbTw&s" alt="Email" class="footer-icon rounded-circle"> Email
                            </a>
                        </li>
                    </ul>
                </div>
    
                <!-- Contact Information -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Contact</h5>
                    <p>Email: <a href="mailto:gkrishanth2023@gmail.com" class="text-light">gkrishanth2023@gmail.com</a></p>
                    <p>Location: Chennai, Tamil Nadu, India</p>
                </div>
            </div>
    
            <!-- Copyright Information -->
            <div class="text-center py-3">
                <p class="mb-0">&copy; 2024 Krishanth G. All Rights Reserved.</p>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
