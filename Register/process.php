<?php
$ten = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['Gender'];
if ($gender == 'Nam')
    $gender = 1;
else $gender = 0;
$Address = $_POST['address'];

$user = $_POST['user'];
$sdt = $_POST['sdt'];

$connect = mysqli_connect('localhost', 'root', '', 'data');
mysqli_set_charset($connect, 'utf8');
$sql = "insert into dang_ky(Name,Email,Password,Gender,Address,sdt,user) values('$ten','$email','$password','$gender','$Address','$sdt','$user')";
mysqli_query($connect, $sql);

mysqli_close($connect);

header("location:log_in.php?success='Đăng ký thành công'");
exit;
?>