<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <title>Log in</title>

</head>

<body>

    <?php
    $cookie_name = "background";
    $cookie_value = "photos/bg1.gif";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    ?>


    <?php
    if (isset($_GET['success'])) {
        $success = $_GET['success'];
        $message = "Đăng ký thành công";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    ?>


    <section class="home">
        <?php
        require_once 'Menu.php';
        ?>
        <div class="content">
            <h2>Welcome</h2>
        </div>

        <div class="login">
            <h2>Sign in</h2>
            <form method="post" action="kiem_tra.php" class="form">

                <input type="text" id="username" class="input" name="username" autocomplete="off" placeholder="Tên đăng nhập" required>
                <br>
                <br>
                <br>

                <input type="password" class="input" name="password" id="password" autocomplete="off" placeholder="Mật khẩu" required><br>
                <br>
                <span style="width: 100%; justify-content: center; font-size: 20px; color: #ff6633;">
                    <?php
                    if (isset($_GET['error'])) {
                        echo 'Sai tài khoản hoặc mật khẩu';
                    }
                    ?>
                </span>
                <br>
                <br>

                <Button type="submit">Log in</Button>
                <br>
                <span id="dang_ky">
                    <a href="form_register.php">Register?</a>
                </span>
            </form>

            </form>
        </div>
    </section>


</body>

</html>