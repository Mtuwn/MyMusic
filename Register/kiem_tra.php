        <?php
        $_name = $_POST['username'];
        $_password = $_POST['password'];

        $ket_noi = mysqli_connect('localhost', 'root', '', 'data');
        mysqli_set_charset($ket_noi, 'utf8');
        $sql = "select Name from dang_ky where user = '$_name' and Password = '$_password'";
        $ket_qua = mysqli_query($ket_noi, $sql);
        $result = mysqli_fetch_array($ket_qua);
        print_r($result);
        if (!empty($result)) {
                echo "Đăng nhập thành công";

                session_start();
                $_SESSION['user'] = $result['Name'];
     
                header('location:../Includes/index.php');
        } else {
                header("location:log_in.php?error='Sai tài khoản hoặc mật khẩu'");
        }




        mysqli_close($ket_noi);
        ?>
        
     