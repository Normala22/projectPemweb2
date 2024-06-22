<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="landpage.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding: 20px;
        }
        .card {
            border: none;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
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
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{ route('data.buku') }}">Data Buku</a></li>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#content">Content</a></li>
                </ul>
                <div class="app__navbar_smallscreen_button">
                    <button class="button__1">LOGIN</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Data Buku -->
    <main>
        <h2 class="text-center mt-5">DATA BUKU</h2>
        <div class="container mt-5">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($buku as $item)
                    <div class="col">
                        <div class="card h-100">
                            @if ($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                            @else
                                <img src="{{ asset('storage/default-image.jpg') }}" class="card-img-top" alt="Default Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->pengarang }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('login', $item->id) }}" class="btn btn-primary">
                                    <i class="fas fa-book-reader"></i> Pinjam Buku
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
    </script>
</body>
</html>