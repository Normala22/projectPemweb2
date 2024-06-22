<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Perpustakaan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="landpage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .app__about {
            background: linear-gradient(135deg, #ffda9f 0%, #ffecd8 100%);
            padding: 80px 0;
            text-align: center;
        }

        .app__about p {
            font-size: 18px;
            line-height: 1.8;
            margin: 20px auto;
            max-width: 800px;
            color: #555;
        }

        .team-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .team-member {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            margin: 15px;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .team-member img {
            width: 100%;
            height: auto;
            border-bottom: 5px solid #ECB176;
        }

        .team-member h3 {
            margin: 20px 0 10px;
            color: #333;
        }

        .team-member p {
            color: #777;
            padding: 0 20px 20px;
        }

        .footer_content-1 {
            background-color: #ffda9f;
            color: #fff;
            padding: 60px 0;
            text-align: center;
        }

        .footer_content-1 ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .footer_content-1 ul li {
            margin: 0 10px;
        }

        .footer_content-1 ul li a {
            color: #fff;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .footer_content-1 ul li a:hover {
            color: #007bff;
        }

        .footer_content-1 p {
            margin-top: 20px;
            font-size: 16px;
        }

        .copyright {
            color: #050505;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="app__navbar">
        <div class="app__navbar_Logo">
            <img src="logo.png" alt="Logo Popular">
        </div>
        <div class="app__navbar_link">
            <ul>
                <li><a href="{{ route('home.index') }}" style="color: #b3955b;">Home</a></li>
                <li><a href="{{ route('about.index') }}" style="color: orange;">About</a></li>
                <li><a href="{{ route('buku.index') }}">Data Buku</a></li>
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
                </ul>
                <div class="app__navbar_smallscreen_button">
                    <button class="button__1">LOGIN</button>
                    <button class="button__2">REGISTER</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <div class="app__home section__padding">
        <div class="app__home_left" data-aos="fade-right" data-aos-delay="100">
            <span>TENTANG KAMI</span>
            <h1>MENGENAL SISTEM INFORMASI PERPUSTAKAAN TASOGARE CHILD</h1>
            <p>" Perpustakaan kami berdedikasi untuk menyediakan akses mudah tentang sumber informasi buku yang berkualitas. Kami mendukung penelitian dan pendidikan dengan koleksi mutakhir dan layanan yang ramah serta responsif. Mari bergabung dengan kami dan temukan kesenangan dalam setiap halaman buku yang kami tawarkan!!! "</p>
        </div>  
        <div class="app__home_right" data-aos="fade-left" data-aos-delay="100">
            <img src="character.png" alt="Character">
            <div class="notif-1">
                <p>Many of Category</p>
            </div>
            <div class="notif-2">
                <p>Novel, Story, Text books, etc.</p>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="app__about section__padding" id="about" data-aos="zoom-in">
        <h2>Visi & Misi</h2>
        <p>Visi kami adalah menjadi perpustakaan akademik terdepan yang memberdayakan pertumbuhan intelektual dan pembelajaran sepanjang hayat bagi komunitas melalui sumber daya inovatif, teknologi canggih, dan layanan yang luar biasa.</p>
        <p>Misi kami adalah menyediakan akses mudah ke sumber informasi berkualitas, mendukung penelitian dan pendidikan dengan koleksi mutakhir, memanfaatkan teknologi untuk meningkatkan layanan, memberikan layanan yang ramah dan responsif, serta menciptakan lingkungan perpustakaan yang nyaman dan inklusif.</p>

        <!-- Team Section -->
        <div class="team-container">
            <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                <img src="rahma.jpeg" alt="Team Member 1">
                <h3>NOVIA RAHMA</h3>
                <p>Full Stack Developer</p>
            </div>
            <div class="team-member" data-aos="fade-up" data-aos-delay="300">
                <img src="mala.jpeg" alt="Team Member 2">
                <h3>NORMALA</h3>
                <p>Full Stack Developer</p>
            </div>
            <div class="team-member" data-aos="fade-up" data-aos-delay="400">
                <img src="zhafira.jpeg" alt="Team Member 3">
                <h3>NUR ALIFYA ZHAFIRA PUTRI</h3>
                <p>Full Stack Developer</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="section__padding">
        <div class="footer_content-1" data-aos="fade-right" data-aos-delay="100">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
            <p>Membaca adalah investasi masa depanmu.</p>
        </div>
    </footer>

    <!-- Copyright -->
    <div class="copyright">
        <h1>&copy; 2024 Tasogare Child</h1>
    </div>

    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
