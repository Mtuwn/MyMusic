<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <script src="validate.js"></script>
    <title>Register</title>


</head>

<body>
    <?php
    require_once 'Menu.php';
    ?>

    
    <section class="div_tong">
        <div class="background"></div>
        <div class="content">
            <h2>Welcome</h2>
        </div>
        <div class="form">
            <form class="form_dk" method="post" action="process.php">

                <br>
                <p id="heading">
                    Đăng ký
                </p>
                <br>
                <p>
                    Email *
                </p>
                <br>
                <input type="email" placeholder="Nhập email của bạn" id="email" class="input" name="email">
                <br>
                <span id="error_email"></span>
                <br>
                <br>
                <p>
                    Tên *
                </p>
                <br>
                <input type="text" placeholder="Nhập tên của bạn" id="name" class="input" name="name">
                <br>
                <span id="error_name"></span>
                <br>
                <br>

                <p>
                    SĐT *
                </p>

                <br>
                <input type="number" placeholder="Nhập số điện thoại" id="sdt" class="input" name="sdt">
                <br>
                <span id="error_sdt"></span>
                <br>
                <br>
                <p>
                    Tên đăng nhập *
                </p>

                <br>
                <input type="text" placeholder="Nhập tên đăng nhập của bạn" id="user" class="input" name="user">
                <br>
                <span id="error_user"></span>
                <br>
                <p style="font-size: 10px;">(Bao gồm chữ hoa chữ số đầu và gồm 5-32 ký tự)</p>
                <br>

                Mật khẩu *
                <br>
                <br>
                <input type="password" placeholder="Nhập mật khẩu của bạn" id="password" class="input" name="password">
                <br>
                <span id="error_password"></span>
                <br>
                <p style="font-size: 10px;">(Độ dài tối thiểu là 8)</p>
                <br>
                <br>
                <label for="">
                    Giới tính *
                </label>
                <div class="radio_input">
                    <input type="radio" name="Gender" class="sex" id="Male">Nam
                    <input type="radio" name="Gender" class="sex" id="Female">Nữ
                </div>

                <br>
                <span id="error_gender"></span>
                <br>
                <br>
                <label for="">
                    Địa chỉ *
                    <br>
                    <br>
                    <textarea id="Adress" cols="66%" rows="4" name="address">Nhập địa chỉ ...</textarea>
                    <br>
                    <br>
                </label>
                <button onclick="return Register()">Register</button>
                <br><br>
                <p id="log_in">
                    <a href="log_in.php">Log in ?</a>
                </p>
            </form>
        </div>
        <div class="duoi">

        </div>


    </section>

</body>

</html>