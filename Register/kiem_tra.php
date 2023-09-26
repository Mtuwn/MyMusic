<?php
    
    $_name = $_POST['username'];
    $_password = $_POST['password'];

    //Kết nối database
    $ket_noi = mysqli_connect('localhost', 'root', '', 'data');
    mysqli_set_charset($ket_noi, 'utf8');

    // Tạo chỗ chống cho dữ liệu người dùng, giúp tách câu lệnh sql khỏi đầu vào dữ liệu
    $sql = "SELECT Name FROM dang_ky WHERE user = ? AND Password = ?";
    $stmt = mysqli_prepare($ket_noi, $sql);

    // Liên kết dữ liệu đầu vào và câu lệnh đã chuẩn bị
    mysqli_stmt_bind_param($stmt, "ss", $_name, $_password);

    // Thực thi
    mysqli_stmt_execute($stmt);
    $result = $stmt->get_result();
    $result_name = $result->fetch_assoc();

    if (!empty($result_name)) {
        echo "Đăng nhập thành công";

        session_start();
        $_SESSION['user'] = $result_name;
        header('location:../Includes/index.php');
    } else {
        header("location:log_in.php?error='Sai tài khoản hoặc mật khẩu'");
    }

    mysqli_stmt_close($stmt);
    mysqli_close($ket_noi);
?>
