<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peminjaman</title>
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
    .card {
        width: 100%;
        border: none;
        transition: transform 0.2s;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 20px;
    }
    .card:hover {
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
<h2 class="text-center"><b>Edit Data Peminjaman</b></h2>
<div class="container">
    <div class="card">
        <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <div class="form-floating">           
                    <input type="text" name="kode_buku" id="kodeBukuInput" class="form-control" value="{{ $peminjaman->kode_buku }}" placeholder="Kode Buku">
                    <label for="kodeBukuInput" class="form-label">Kode Buku</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating"> 
                    <input type="text" name="judul" id="judulInput" class="form-control" value="{{ $peminjaman->judul }}" placeholder="Judul">
                    <label for="judulInput" class="form-label">Judul</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating"> 
                    <input type="text" name="nama_peminjam" id="namaPeminjamInput" class="form-control" value="{{ $peminjaman->nama_peminjam }}" placeholder="Nama Peminjam">
                    <label for="namaPeminjamInput" class="form-label">Nama Peminjam</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating"> 
                    <input type="date" name="tanggal_peminjaman" id="tanggalPeminjamanInput" class="form-control" value="{{ $peminjaman->tanggal_peminjaman }}" placeholder="Tanggal Peminjaman">
                    <label for="tanggalPeminjamanInput" class="form-label">Tanggal Peminjaman</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating"> 
                    <input type="date" name="tanggal_pengembalian" id="tanggalPengembalianInput" class="form-control" value="{{ $peminjaman->tanggal_pengembalian }}" placeholder="Tanggal Pengembalian">
                    <label for="tanggalPengembalianInput" class="form-label">Tanggal Pengembalian</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating"> 
                    <select name="status" id="statusInput" class="form-control">
                        <option value="Dipinjam" {{ $peminjaman->status == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                        <option value="Dikembalikan" {{ $peminjaman->status == 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                    </select>
                    <label for="statusInput" class="form-label">Status</label>
                </div>
            </div>  
            <div class="text-center">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
