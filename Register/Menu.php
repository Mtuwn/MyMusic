<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            align-items: center;
            font-family: "Poppins", sans-serif;

        }

        .Menu {
            left: 5px;
            top: 5px;
            display: flex;
            position: fixed;
            width: 100%;
            height: 60px;
            justify-content: left;
            align-items: center;
            z-index: 1;
            font-size: 10px;


        }

        .Menu a {
            text-decoration: none;
            padding: 8px 21px;
            color: #242526;
            text-align: center;
            font-weight: 400;
            line-height: 28px;
            font-size: 25px;
        }

        a:hover {
            text-shadow: 1px 0 0 currentColor;
            color: #171100;
        }

        .Menu img:hover {
            transform: scale(1.1);
        }

        .content_menu{
            display: flex;
            justify-content: left;
            align-items: center;
        }
        .content_menu img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
          
        }

              
    </style>
</head>

<body>
    <div class="Menu">
       
        <div class="content_menu">
            <ol>
                <a href="../Includes/index.php"> <img src="../Includes/photos/homee.png" alt=""> </a>  
                <a href="https://www.facebook.com/tuan.tranminh.1865904/"> <img src="../Includes/photos/facebook-icon-512x512-seb542ju.png" alt=""> </a>  
                <a href="https://www.instagram.com/mtuwsn01_03/"> <img src="../Includes/photos/Instagram-Icon.png" alt=""> </a> 
                <a href="https://github.com/Mtuwn"> <img src="../Includes/photos/git.png" alt=""> </a> 
                    
            </ol>
           
        </div>

    </div>
</body>

</html>