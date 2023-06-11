<?php
//session_start();
//if (!isset($_SESSION["user"])) {
//   header("Location: index.php");
//}
//?>
<!--user session is disabled for dev branch-->
<!--as I didn't know how to set up the db-->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- logo unimed -->
<a href="https://www.unimed.ac.id">
    <div class="container-logo">
        <img src="assets/unimed.png" alt="" class="logo-img">
    </div>
</a>
<!-- logo unimed end -->
<!-- main menu -->
<div class="container-home position-absolute top-0 end-0">
    <div class="home d-grid gap-2 col-3 mx-auto">
        <a class="btn my-4 btn-lg" type="button" href="materi.html">Materi</a>
        <a class="btn my-4 btn-lg" type="button" href="quizz.html">Quizz</a>
    </div>
</div>

<a class="btn btn-logout" type="button" href="logout.php">logout</a>
<!-- audio -->
<audio autoplay loop>
    <source src="assets/bcksnd.mp3" type="audio/mp3">
</audio>
<!-- audio end -->
<!-- end main menu -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>