<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            filter: blur(1.5px);
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.8); /* Optional: to improve readability */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        .header_title {
            flex-grow: 1;
            text-align: right;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 0.5rem;
        }

        .header_title i {
            margin-right: 10px;
        }
    </style>
</head>
<body id="body-pd">
    <header class="header d-flex align-items-center" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_title">
            <i class="fas fa-user"></i> Selamat Datang, {{ Auth::user()->name }}
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Perpustakaan</span> </a>
                <div class="nav_list"> 
                    <a href="{{ route('dashboard.index') }}" class="nav_link"><i class='bx bx-home nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="{{ route('buku.index') }}" class="nav_link"><i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Data Buku</span> </a> 
                    @can('admin')
                        <a href="{{ route('dashboard.showDataPengguna') }}" class="nav_link"><i class='bx bx-user nav_icon'></i> <span class="nav_name">Data Anggota</span> </a> 
                        <a href="{{ route('peminjaman.index') }}" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Peminjaman</span> </a> 
                        <a href="{{ route('pengembalian.index') }}" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Pengembalian</span> </a> 
                    @endcan
                </div>

                <a href="{{ route('home.logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span> </a>
            </div> 
        </nav>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <!-- Optional Content Here -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                      nav = document.getElementById(navId),
                      bodypd = document.getElementById(bodyId),
                      headerpd = document.getElementById(headerId);

                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        nav.classList.toggle('show');
                        toggle.classList.toggle('bx-x');
                        bodypd.classList.toggle('body-pd');
                        headerpd.classList.toggle('body-pd');
                    });
                }
            };

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

            const linkColor = document.querySelectorAll('.nav_link');
            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink));
        });
    </script>
</body>
</html>
