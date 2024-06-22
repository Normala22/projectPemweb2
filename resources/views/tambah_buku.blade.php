<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: linear-gradient(to bottom right, #E7D4B5, #B6C7AA);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        h2 {
            font-weight: 500;
            margin-bottom: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
        }
        .card-p4 {
            width: 100%;
            border: none;
            transition: transform 0.2s;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }
        .card-p4:hover {
            transform: scale(1.02);
        }
        .btn-success {
            background-color: #28a745;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        .form-floating label {
            transition: color 0.2s;
        }
        .form-floating input:focus + label {
            color: #F6E6CB;
        }
        .form-control:focus {
            border-color: #F6E6CB;
            box-shadow: 0 0 5px rgba(244, 212, 5, 0.5);
        }
    </style>
</head>
<body>
<h2 class="text-center"><b>Tambah Data Buku</b></h2>
<div class="container">
    <div class="card-p4">
        <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="kodeInput" id="kodeInput" class="form-control" placeholder="Kode Buku">
                        <label for="kodeInput">Kode Buku</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" id="judulInput" name="judulInput" class="form-control" placeholder="Judul Buku">
                        <label for="judulInput">Judul Buku</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" id="pengarangInput" name="pengarangInput" class="form-control" placeholder="Pengarang">
                        <label for="pengarangInput">Pengarang</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" id="genreInput" name="genreInput" class="form-control" placeholder="Genre">
                        <label for="genreInput">Genre</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" id="jenisInput" name="jenisInput" class="form-control" placeholder="Jenis Buku">
                        <label for="jenisInput">Jenis Buku</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="gambarInput" class="form-label">Gambar Buku</label>
                    <input type="file" id="gambarInput" name="gambarInput" class="form-control">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
