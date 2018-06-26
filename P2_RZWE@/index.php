<?php
error_reporting(0);
ini_set('display_errors', 0);
if ($_SESSION['Code'] != $_SESSION['wachtwoordPuzzel3']){
    header("Location: ../Puzzel index/index.php");
    session_unset();
} else {
    //actions to perform when you get logged in
    session_unset();
}

?>
<!doctype html>
<html lang="nl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Eigen custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>DSA879usdd</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6">
          <a href="../P2_99dK/index.php">
            <img src="images/commies.png" alt="logo" class="img-thumbnail">
          </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/3.JPG" target="_blank">
            <img  src="images/3.JPG" alt="img1" class="img-thumbnail">
          </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/5.JPG" target="_blank">
            <img src="images/5.JPG" alt="img2" class="img-thumbnail">
            </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/1.JPG" target="_blank">
            <img src="images/1.JPG" alt="img3" class="img-thumbnail">
            </a>
        </div> <!-- end col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <a href="images/2.JPG" target="_blank">
                <img src="images/2.JPG" alt="img4" class="img-thumbnail">
                </a>
            </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/4.JPG" target="_blank">
            <img src="images/4.JPG" alt="img5" class="img-thumbnail">
            </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/10.JPG" target="_blank">
            <img src="images/10.JPG" alt="img6" class="img-thumbnail">
            </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/hidden_image.png" target="_blank">
            <img src="images/hidden_image.png" alt="img7" class="img-thumbnail" width="600">
            </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/9.JPG" target="_blank">
            <img src="images/9.JPG" alt="img8" class="img-thumbnail">
            </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/7.JPG" target="_blank">
            <img src="images/7.JPG" alt="img9" class="img-thumbnail">
            </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/8.JPG" target="_blank">
            <img src="images/8.JPG" alt="img10" class="img-thumbnail">
            </a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-4 col-md-6">
            <a href="images/6.jpg" target="_blank">
            <img src="images/6.jpg" alt="Verborgen" class="img-thumbnail">
            </a>
        </div> <!-- end col-lg-4 -->
    </div> <!-- end div row -->
</div> <!-- end div container-fluid -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
