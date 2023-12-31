<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richard group Theatres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .box {
        width: 100%;
        height: 500px;
        border: 5px solid gold;
    }

    .img {
        width: 100%;
        height: 100%;
    }
</style>

<body class="alert alert-primary">
    <?php
    include "sitenavigationbar.php"
        ?>

    <?php
    if (isset($_SESSION['status'])) {
        ?>
        <div class="alert alert-danger">
            <h4>Info!
                <?= $_SESSION['status'] ?>
            </h4>
        </div>
        <?php
        unset($_SESSION['status']);
    }
    ?>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="box carousel-item active">
                <img src="./uploads/4c177c2b7f7bb9a679f089bcb50f844e_3e89eb5d-ffbd-4033-a00f-e595a3ef2e2a_240x360_crop_center.progressive.jpg"
                    class="box object-fit-cover border rounded d-inline-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Black Panther</h5>
                    <p>Will be in our Theatres soon</p>
                </div>
            </div>
            <div class="box carousel-item">
                <img src="./uploads/4d18d2a1c7c6b00799adf2966a20ff76e8-multiverse.2x.rsocial.w600.jpg"
                    class="box object-fit-cover border rounded d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Black Panther</h5>
                    <p>Will be in our Theatres soon</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./uploads/black-panther-movie-wallpaper-preview.jpg"
                    class="box object-fit-cover border rounded d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Black Panther</h5>
                    <p>Will be in our Theatres soon</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row alert alert-primary">
        <div class="col-sm-4">
            <!-- <h5>Welcome all every weekend</h5> -->
        </div>
        <div class="col-sm-4">
            <h5>Welcome all every weekend <br> Here are the latest movies and respective thearters</h5>
            <h5 class="alert alert-danger">Book one get a packet of Popcorns Free!!</h5>
        </div>
        <div class="col-sm-4">
            <!-- <h5>Welcome all every weekend</h5> -->
        </div>
    </div>


    <?php
    include "cardsbooked.php";
    ?>
    <div class="row alert alert-primary">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h3>Available theaters</h3>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <?php
    include "theatres.php"
        ?>
    <div class="row alert alert-primary">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h3>Richard Movie Theatres,,,,, Home of Joy</h3>
        </div>
        <div class="col-sm-4"></div>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

    <script src=."/js/bootstrap.bundle.js"></script>

</html>