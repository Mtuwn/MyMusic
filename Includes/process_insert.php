<?php

 $name = $_POST['name'];
 $casi = $_POST['Ca_si'];
 $photo = $_FILES['photo'];
 $music = $_FILES['music'];
 
$folder_photo = "photos/";
$file_extention_photo = explode('.',$photo['name'])[1];
$file_name_photo = time() .'.'. "$file_extention_photo";
$path_file_photo = $folder_photo . $file_name_photo;

$folder_music = "music/";
$file_extention_music = explode('.',$music['name'])[1];
$file_name_music = time() .'.'. "$file_extention_music";
$path_file_music = $folder_music . $file_name_music;

move_uploaded_file($music['tmp_name'],$path_file_music);
move_uploaded_file($photo['tmp_name'],$path_file_photo);

require_once'./connect.php';

$sql = "insert into mymusic(Name,Photo,Music,Casi) values('$name','$file_name_photo','$file_name_music','$casi')";

mysqli_query($connect,$sql);
 $error = mysqli_error($connect);
 if(!$error)
 echo $error;

 mysqli_close($connect);