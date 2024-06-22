<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ludiflex | Login</title>
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
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="{{ route('register.show') }}" onclick="register()">Sign Up</a></span>
                <header><b>Login</b></header>
            </div>
            <form method="post" action="{{ route('login.auth') }}">
                @csrf
                <div class="input-box">
                    <input type="text" class="input-field @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                    <i class="bx bx-user"></i>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="password" class="input-field @error('password') is-invalid @enderror" placeholder="Password" name="password">
                    <i class="bx bx-lock-alt"></i>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Sign In">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check" name="remember">
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </form>
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
