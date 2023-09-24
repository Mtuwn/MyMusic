
<?php


$sql = "SELECT * FROM mymusic";
$result = mysqli_query($connect, $sql);
$i = 1;
foreach ($result as $each) {
?>

    <a href="#" onclick="myFunction('<?php echo $each['Ma'] ?>', '<?php echo $each['Name'] ?>','<?php echo $each['Photo'] ?>','<?php echo $each['Music'] ?>','<?php echo $each['Casi'] ?>')">
        <div class="The_song" id="ID<?php echo $each['Ma'] ?>">
            <img src="photos/173809024-icono-de-nota-musical-icono-de-música-con-signo-de-corazón-como-icono-de-la-música-icono-de-nota.jpg" style="width: 40px; height: 40px; margin: 10px; object-fit: cover; border-radius: 50%;" alt="icon">
            <div class="Ma_song">
                <?php echo $i++ ?>

            </div>


            <div class="name_song">
                <?php echo $each['Name'] ?>
                <p style="font-size: 15px;"><?php echo $each['Casi'] ?> </p>

            </div>

            <span style="margin: 10px;">|</span>

            <img src="photos/micro.png" style="width: 40px; height: 40px; margin: 10px; object-fit: cover; border-radius: 50%;" alt="icon">


            <div class="photo_song">
                <img src="photos/<?php echo $each['Photo'] ?>" style="width: 40px; height: 40px; object-fit: cover;">

            </div>


        </div>
    </a>

<?php }


?>