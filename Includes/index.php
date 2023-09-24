<?php
session_start();
?>
<?php

if (empty($_SESSION['user'])) {
    header('location: ../Register/log_in.php');
}
require_once './connect.php';
require_once 'Menu.php'
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
</head>

<body>
    <div class="list_song">
        <div class="header_list">
            <h1>LIST SONGS </h1>
            <div class="exit">
                <img src="photos/istockphoto-1188413565-612x612.jpg" alt="" onclick="exit_list()">
            </div>

        </div>


        
        <form class="Album">
            <div class="list">
                <?php
                require_once 'album.php'
                ?>
            </div>

        </form>
    </div>

    <div class="change_background">

        <?php require_once 'background.php' ?>
    </div>
    <div class="result" id="result" >
            <?php require_once 'search.php' ?>
    </div>

    <div class="header">
        <div class="Menu">
            <img src="photos/ddd.png" alt="Menu" id="icon_list" onclick="icon_list()">
            <img src="photos/images.png" alt="Background" onclick="icon_background()">
            <a href="insert.php"><img src="photos/insert.png" alt=""></a>
        </div>


        <div class="has-search">
            <form action="" >
            <input type="search" class="form-control" placeholder="Search" name="search">
            </form>
           
        </div>

    </div>



    <div class="container_btn">




        <div class="playControl">
            <img id="Photo_song" style="width: 100px; height: 100px; object-fit: cover;">
            <div id="Name_song"></div>
            <div id="author_song"></div>

            <div class="control">
                <div id="repeat" class="btn btn-repeat" onclick="repeatPlay()">
                    <i class="fas fa-redo"></i>
                </div>
                <div class="btn btn-prev" onclick="prePlay()">
                    <i class="fas fa-step-backward"></i>
                </div>
                <div class="btn btn-toggle-play">

                    <i class="fas fa-play icon-play"></i>
                </div>
                <div class="btn btn-next" onclick="nextPlay()">
                    <i class="fas fa-step-forward"></i>
                </div>

                <div id="radom" class="btn btn-random" onclick="radomPlay()">
                    <i class="fas fa-random"></i>
                </div>
            </div>

            <input id="progress" class="progress" type="range" value="0" step="1" min="0" max="100">

            <audio id="audio_control">
                <source id="audio_song" type="audio/mpeg">
            </audio>


        </div>

        <?php
        require_once 'control.php'
        ?>

    </div>




</body>

</html>