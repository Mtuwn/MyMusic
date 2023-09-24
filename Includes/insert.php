<?php
require_once 'Menu.php'
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insert.css">
</head>

<body>
    <form method="post" action="process_insert.php" enctype="multipart/form-data">
        <div class="container">
            <h1>Thêm bài hát</h1>
            <br>
            <div class="input">
                <div class="Header">Tên bài hát</div>
                <input type="text" name="name"> <br>
            </div>

            <div class="input">
                <div class="Header"> Ảnh đại diện</div>
                <input type="file" name="photo"> <br>
            </div>

            <div class="input">
                <div class="Header">Bài hát</div>
                <input type="file" name="music"><br>

            </div>
            <div class="input">
                <div class="Header">Ca sĩ</div>
                <input type="text" name="Ca_si"> <br>
            </div>
            
        <button type="submit">Thêm</button>
        </div>
        </div>
    </form>
</body>

</html>