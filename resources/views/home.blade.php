<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="landpage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!---Navigation Bar-->
    <nav class="app__navbar">
        <div class="app__navbar_Logo">
            <img src="logo.png" alt="Logo Popular">
        </div>
        <div class="app__navbar_link">
            <ul>
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
                <li><a href="{{ route('buku.index') }}">Data buku</li>
            </ul>
        </div>
        <div class="app__navbar_button">
            <a href="{{ route('login') }}" class="button__1">LOGIN</a>
        </div>
        <div class="app__navbar_smallscreen">
            <span class="material-symbols-outlined overlay_open">menu</span>
            <div class="app__navbar_smallscreen_overlay slide-bottom">
                <span class="material-symbols-outlined overlay_close">close</span>
                <ul class="app__navbar_smallscreen_links">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('about.index') }}">About</a></li>
                    <li><a href="{{ route('buku.index') }}">Data Buku</a></li>
                    <li><a href="#content">Content</a></li>
                </ul>
                <div class="app__navbar_smallscreen_button">
                    <button class="button__1">LOGIN</button>
                    <button class="button__2">REGISTER</button>
                </div>
            </div>
        </div>
    </nav>
 

    <!---Home Section-->
    <div class="app__home section__padding">
        <div class="app__home_left " data-aos="fade-right" data-aos-delay="100">
            <span>SELAMAT DATANG DI PERPUSTAKAAN</span>
            <h1>HAPPY AND ENJOY READ BOOKS & STORY </h1>
            <p>Temukan kesenangan dalam setiap halaman. Koleksi buku kami siap menemani dan menginspirasi hari-hari kalian. Mari membaca dan menikmati bersama!</p>
        </div>  
        <div class="app__home_right" data-aos="fade-left" data-aos-delay="100">
            <img src="character.png">
            <div class="notif-1">
                <p>Many of Category</p>
            </div><div class="notif-2">
                <p>Novel, Story, Text books, etc.</p>
            </div>
        </div>
    </div>

    <!---About Section-->
    <div class="app__about  section__padding" id="about">
        <p data-aos="zoom-in">Visi kami menjadi perpustakaan akademik terdepan yang memberdayakan pertumbuhan intelektual dan pembelajaran 
            sepanjang hayat bagi komunitas melalui sumber daya inovatif, teknologi canggih, dan layanan yang luar biasa. <br><br> Misi kami menyediakan akses mudah ke sumber informasi berkualitas, mendukung penelitian dan 
            pendidikan dengan koleksi mutakhir, memanfaatkan teknologi untuk meningkatkan layanan, memberikan 
            layanan yang ramah dan responsif, serta menciptakan lingkungan perpustakaan yang nyaman dan 
            inklusif.
    </div>

    <!---Footer Section-->
    <footer class="section__padding">
        <div class="footer_content-1" data-aos="fade-right" data-aos-delay="100">
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
            <p>Membaca adalah investasi masa depanmu.</p>
        </div>
    </footer>
    <div class="copyright">
        <h1>Copyright © 2024 Tasogare Child</h1>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>