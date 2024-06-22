<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>Ludiflex | Register</title>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>Tasogare Child</p>
        </div>
        <div class="nav-button">
            <button class="btn" id="loginBtn" onclick="location.href='{{ route('login') }}'">Sign In</button>
            <button class="btn white-btn" id="registerBtn" onclick="location.href='{{ route('register.show') }}'">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

    <div class="form-box">
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="{{ route('login') }}">Login</a></span>
                <header><b>Sign Up</b></header>
            </div>
            <form method="post" action="{{ route('register.store') }}">
                @csrf

                <div class="input-box">
                    <i class="bx bx-user"></i>
                    <input type="text" class="input-field @error('namaInput') is-invalid @enderror" id="namaInput" placeholder="Nama" name="namaInput" value="{{ old('namaInput') }}">
                    @error('namaInput')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>                            
                    @enderror
                </div>
                <div class="input-box">
                    <i class="bx bx-envelope"></i>
                    <input type="text" class="input-field @error('emailInput') is-invalid @enderror" id="emailInput" placeholder="Email" name="emailInput" value="{{ old('emailInput') }}">
                    @error('emailInput')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>                            
                    @enderror
                </div>
                <div class="input-box">
                    <i class="bx bx-id-card"></i>
                    <input type="text" class="input-field @error('nimInput') is-invalid @enderror" id="nimInput" placeholder="NIM" name="nimInput" value="{{ old('nimInput') }}">
                    @error('nimInput')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>                            
                    @enderror
                </div>
                <div class="input-box">
                    <i class="bx bx-lock"></i>
                    <input type="password" class="input-field @error('passwordInput') is-invalid @enderror" placeholder="Password" id="passwordInput" name="passwordInput">
                    @error('passwordInput')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>                            
                    @enderror
                </div>
                <div class="input-box">
                    <i class="bx bx-lock-alt"></i>
                    <input type="password" class="input-field @error('passwordInput_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password" id="passwordInput_confirmation" name="passwordInput_confirmation">
                    @error('passwordInput_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>                            
                    @enderror
                </div>
                <button type="submit" class="submit">Register</button>
                
        </div>
    </div>
</div>
<script>
    function myMenuFunction() {
        var i = document.getElementById("navMenu");
        if (i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
    }
</script>
</body>
</html>
