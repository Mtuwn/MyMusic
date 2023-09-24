<div class="result_list">
    <script>
       function Addclass() {
            result.classList.add('show')
            console.log('233')
        }
    </script>
    <div class="header_list_search">
        <h1 style="color: #fff; width: 50%; "> Kết quả liên quan </h1>
        <div class="exit_search">
            <img src="photos/istockphoto-1188413565-612x612.jpg" alt="" onclick="exit_search()">
        </div>

    </div>

    <div class="list_search">
        <?php


        if (!empty($_GET['search'])) {
            $search = $_GET['search'];
            $sql = "SELECT * FROM mymusic where Name like '%$search%' or Casi like '%$search%'";
            $result = mysqli_query($connect, $sql);
            echo '<script type="text/javascript">
                        Addclass();
                </script>';
            $i = 1;
            foreach ($result as $each) {
        ?>

                <a href="#" onclick="myFunction('<?php echo $each['Ma'] ?>', '<?php echo $each['Name'] ?>','<?php echo $each['Photo'] ?>','<?php echo $each['Music'] ?>','<?php echo $each['Casi'] ?>')">
                    <div class="The_song_search" id="<?php echo $each['Ma'] ?>">
                        <img src="photos/173809024-icono-de-nota-musical-icono-de-música-con-signo-de-corazón-como-icono-de-la-música-icono-de-nota.jpg" style="width: 40px; height: 40px; margin: 10px; object-fit: cover; border-radius: 50%;" alt="icon">
                        <div class="Ma_song_search">
                            <?php echo $i++ ?>
                        </div>
                        <div class="name_song_search">
                            <?php echo $each['Name'] ?>
                            <p style="font-size: 15px;"><?php echo $each['Casi'] ?> </p>
                        </div>
                        <span style="margin: 10px;">|</span>

                        <img src="photos/micro.png" style="width: 40px; height: 40px; margin: 10px; object-fit: cover; border-radius: 50%;" alt="icon">


                        <div class="photo_song_search">
                            <img src="photos/<?php echo $each['Photo'] ?>" style="width: 40px; height: 40px; object-fit: cover;">

                        </div>


                    </div>
                </a>


        <?php }
        }



        ?>

    </div>

</div>