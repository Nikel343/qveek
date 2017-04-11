<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Qveek</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css?t=1">
    <link rel="stylesheet" href="css/animate.css">
</head>
<? require_once ('header.php'); ?>
    <div align="center" class="logo">
    </div>

    <!--------      Content   ----------------------->
    <div class="container">
        <div class="bigbut animated rubberBand">
            <img id="bbid" src="img/Knopka.png" alt="">
        </div>
        <div class="leftbut">
            <img src="img/leftbut.png" alt="">
        </div>
        <div class="rightbut">
            <img src="img/rightbut.png" alt="">
        </div>
        <div class="blockleft">
            <img src="img/leftblock.png" alt="">
        </div>
        <div class="blockright">
            <img src="img/rightblock.png" alt="">
        </div>
    </div>
    <!--------      Form   --------------------->

    <div class="form">
        <svg width="800" height="500" viewbox="-363 90 950 500">
            <path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" stroke-miterlimit="0" fill="transparent" stroke-dasharray="5000 5000" stroke-dashoofset="500" d="M 114.79896,126.37599 C 35.264901,134.59744 -31.833007,44.868983 -29.422317,27.620713 v 0 L 5.3356732,185.4693 H -316.54559 v 300.48846 h 431.34455" id="rect1" class="AnForm formleft" />
            <path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" stroke-miterlimit="0" fill="transparent" stroke-dasharray="5000 5000" stroke-dashoofset="500" d="M 114.79896,126.37599 C 194.333,134.59744 261.43094,44.868983 259.02024,27.620713 v 0 L 224.26225,185.4693 H 546.14351 V 485.95776 H 114.79896" id="rect1" class="AnForm formright" />
        </svg>
        <div class="Uploader">
            <form id="upload" enctype="multipart/form-data" method="post">
                <p align="center">Выберите изображение:</p>
                <input id="upload1" type="file" name="image" multiple accept="image/*">
                <br>
                <div id="load">Загрузить</div>
            </form>
        </div>
        <div id="load2">Загрузить еще</div>
    </div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/snap.svg-min.js"></script>
    <script src="js/blocks.js"></script>
    <script src="js/main.js"></script>
    <script src="js/form.js"></script>

    <!---------------------------------------------->

    <? require_once ('footer.php'); ?>