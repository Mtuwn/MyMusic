<?php
require_once 'AlbumList.php';
?>
<script>
    const $ = document.querySelector.bind(document)
    const audio_song_control = document.getElementById('audio_control');
    const audio = $("#audio");
    const btnPlay = $('.btn-toggle-play')
    const player = $('.fa-play')
    const progress = $('#progress')
    const cd = $('#Photo_song')
    const Photo_song = document.getElementById('Photo_song');
    // const icon_list = $("#icon_list")
    const exit = document.querySelector(".exit")
    const list = document.querySelector(".list_song")
    var flag_radom = 0
    var flag = 0
    var flag_repeat = 0
    var Ma
    var Photo
    var Song
    var Name
    var author
    var currentIndex = 0;
    var ArrayID = <?php echo $ArrayID ?>;
    var ArrayPhoto = <?php echo $ArrayPhoto ?>;
    var ArrayName = <?php echo $ArrayName ?>;
    var ArraySong = <?php echo $ArraySong ?>;
    var ArrayAuthor = <?php echo $ArrayAuthor ?>;
    const $$$ = document.getElementById.bind(document)

    // Xử lí phát nhạc khi click
    function myFunction(ma, Name, Photo, Song, author) {
        const Photo_song = document.getElementById('Photo_song')
        Photo_song.src = "photos/" + Photo

        song = "music/" + Song

        document.getElementById('Name_song').innerHTML = Name;
        document.getElementById('author_song').innerHTML = author;
        currentIndex = ma
        const audio_song = document.getElementById('audio_song');
        audio_song_control.load()
        audio_song.src = song
        if (flag == 0) {
            playing(1);

        } else {
            playing(0)
        }
    }

    playing = function(flag) {
        if (flag == 0) {
            player.classList.add('fa-pause')
            player.classList.add('icon-pause')
            cdThumd.play()
            player.classList.remove('icon-play')
            player.classList.remove('fa-play')
            flag = 1
            audio_song_control.play()
            audio_song_control.ontimeupdate = function() {
                if (audio_song_control.duration) {
                    const progressPercent = Math.floor(audio_song_control.currentTime / audio_song_control.duration * 100)
                    progress.value = progressPercent
                    if (progress.value == 100) {
                        nextPlay()
                    }
                }
            }
            progress.onchange = function(e) {
                const seekTime = audio_song_control.duration / 100 * e.target.value

                audio_song_control.currentTime = seekTime
            }
        } else {
            player.classList.add('icon-play')
            player.classList.add('fa-play')
            player.classList.remove('fa-pause')
            player.classList.remove('icon-pause')
            cdThumd.pause()
            audio_song_control.pause();
            flag = 0
        }

        for (var i = 1; i <= ArrayID.length; i++) {
            if (i != parseInt(currentIndex)) {
                $$$('ID' + i).style.backgroundColor = ''
            } else {
                $$$('ID' + currentIndex).style.backgroundColor = '#9a7224'
            }
        }
    }

    btnPlay.onclick = function() {
        if (flag == 0) {
            playing(0)
            flag = 1
        } else {
            playing(1)
            flag = 0
        }
    }

    //Đĩa cd quay
    cdThumd = cd.animate([{
        transform: 'rotate(360deg)'
    }], {
        duration: 10000,
        iterations: Infinity
    })

    cdThumd.pause();

    //Nút next
    nextPlay = function() {

        if (flag_repeat == 1) {
            currentIndex = parseInt(currentIndex) - 1
            myFunction(ArrayID[currentIndex], ArrayName[currentIndex], ArrayPhoto[currentIndex], ArraySong[currentIndex], ArrayAuthor[currentIndex])

        } else if (flag_radom == 1) {
            var radom = 0
            radom = Math.floor(Math.random() * ArrayID.length)

            currentIndex = radom;
            myFunction(ArrayID[currentIndex], ArrayName[currentIndex], ArrayPhoto[currentIndex], ArraySong[currentIndex], ArrayAuthor[currentIndex])

        } else {
            if (currentIndex == ArrayID.length) {
                currentIndex = 0
            } else {

                currentIndex = parseInt(currentIndex);

            }


            myFunction(ArrayID[currentIndex], ArrayName[currentIndex], ArrayPhoto[currentIndex], ArraySong[currentIndex], ArrayAuthor[currentIndex])
        }


    }

    //Nút quay lại
    prePlay = function() {

        if (flag_repeat == 1) {
            currentIndex = parseInt(currentIndex) - 1
            myFunction(ArrayID[currentIndex], ArrayName[currentIndex], ArrayPhoto[currentIndex], ArraySong[currentIndex], ArrayAuthor[currentIndex])
        } else if (flag_radom == 1) {
            var radom = 0
            radom = Math.floor(Math.random() * ArrayID.length)
            currentIndex = radom;
            myFunction(ArrayID[currentIndex], ArrayName[currentIndex], ArrayPhoto[currentIndex], ArraySong[currentIndex], ArrayAuthor[currentIndex])
        } else {
            if (currentIndex == 1) {
                currentIndex = ArrayID.length
                currentIndex -= 1
            } else currentIndex -= 2
            myFunction(ArrayID[currentIndex], ArrayName[currentIndex], ArrayPhoto[currentIndex], ArraySong[currentIndex], ArrayAuthor[currentIndex])
        }
    }

    //Nút radom
    radomPlay = function() {
        if (flag_radom == 0) {
            document.getElementById("radom").style.color = '#8cb03f';
            flag_radom = 1;
        } else {
            document.getElementById("radom").style.color = '#666';
            flag_radom = 0
        }
    }

    //Nút Lặp
    repeatPlay = function() {
        if (flag_repeat == 0) {
            document.getElementById("repeat").style.color = '#8cb03f';
            flag_repeat = 1;
        } else {
            document.getElementById("repeat").style.color = '#666';
            flag_repeat = 0
        }
    }


    myFunction(ArrayID[currentIndex], ArrayName[currentIndex], ArrayPhoto[currentIndex], ArraySong[currentIndex], ArrayAuthor[currentIndex])

    //chuyển động con chuột
    window.addEventListener('mousemove', e => {
        const body = $('body')
        const animate = document.createElement('span')

        animate.style.left = e.pageX + 'px'
        animate.style.top = e.pageY + 'px'

        const size = (Math.random() * 34).toFixed()
        const rotate = (Math.random() * 360).toFixed()

        animate.style.left = e.pageX + 'px'
        animate.style.top = e.pageY + 'px'
        animate.style.width = size + 'px'
        animate.style.height = size + 'px'
        animate.style.transform = `rotate(${rotate}deg)`
        animate.setAttribute("class", "cursor")
        body.appendChild(animate)

        setTimeout(function() {
            animate.remove()
        }, 700)
    })

    //Đổi background
    const images = document.querySelectorAll('.img_background');

    images.forEach(image => {
        image.addEventListener('click', function() {
            const imgSrc = this.getAttribute('src');
            document.cookie = "background = " + imgSrc;


            images.forEach(img => img.classList.remove('clicked'));


            this.classList.add('clicked');

        });
    });

    var backgroundCookieValue = '<?php echo $_COOKIE["background"] ?>'
    // console.log(backgroundCookieValue)
    document.body.style.backgroundImage = 'url(' + backgroundCookieValue + ')';

    //Hiển thị và xóa các chức năng ẩn
    icon_list = function() {
        list.classList.add('show_list')
    }

    exit_list = function() {
        list.classList.remove('show_list')
    }

    const background = document.querySelector(".change_background")
    icon_background = function() {
        background.classList.add('show_list')
    }
    exit_background = function() {
        background.classList.remove('show_list')

    }

    const result = document.querySelector(".result")
    exit_search = function() {
        result.classList.remove('show')

    }
</script>