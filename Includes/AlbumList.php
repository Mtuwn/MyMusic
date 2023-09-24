<?php
$sql = "select * from mymusic";

$result = mysqli_query($connect, $sql);
$ArrayID = array();
$ArrayPhoto = array();
$ArrayName = array();
$ArraySong = array();
$ArrayAuthor = array();



while($row = mysqli_fetch_array($result)) {
    array_push($ArrayID, $row['Ma']);
    array_push($ArrayPhoto, $row['Photo']);
    array_push($ArrayName, $row['Name']);
    array_push($ArraySong, $row['Music']);
    array_push($ArrayAuthor, $row['Casi']);
}


$ArrayID = json_encode($ArrayID);
$ArrayPhoto = json_encode($ArrayPhoto);
$ArrayName = json_encode($ArrayName);
$ArraySong = json_encode($ArraySong);
$ArrayAuthor = json_encode($ArrayAuthor);

?>