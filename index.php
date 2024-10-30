<?php
// index.php
?>

<!DOCTYPE html>
<html lang="id">




<head>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="foto/logo1.jpg">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css-1/index.css">

    <!-- Header CSS -->
    <link rel="stylesheet" href="css_berita/header.css">


    <!-- About CSS -->
    <link rel="stylesheet" href="css-1/about.css">

    <!-- Berita CSS -->
    <link rel="stylesheet" href="css_berita/kabar_berita.css">

    <title>Project PKL</title>
    
</head>


<body>
    <!-- Navigasi Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="foto/logo1.jpg" alt="Logo" width="80" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active m-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-2" href="#about-section">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-2" href="#berita-section">Berita</a>
                    </li>
                    <li class="nav-item">
                    <a class="btn m-2 bg-white fw-medium text-black" href="pgs/login.html" style="width: auto; padding-left: 30px; padding-right: 30px;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <?php Include("pgs/header.php"); ?>

        <hr class="container mt-5 mb-2">
        

        <!-- Include About dan Berita -->
        <?php include("pgs/about.php"); ?>
        <hr class="container mt-5 mb-2">
        <?php include("pgs/kabar_berita.php"); ?>
    </div>
    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>