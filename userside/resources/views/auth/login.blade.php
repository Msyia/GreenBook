<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/login.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="form-title">Log In</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST" id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="form-input" required aria-label="Email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="form-input" required aria-label="Password">
                </div>
                <a href="#" class="forgot-password">Forgot your password?</a>
                <button type="submit" class="form-button">Log In</button>
            </form>
            <p>Don't have an account? <a href="{{ route('register') }}" class="register-link">Register</a></p>
        </div>
        <div class="image-container">
            <img src="{{ asset('image/LOGIN.png') }}" alt="Login Illustration">
        </div>
    </div>
    <footer>
        <p>Created by GreenBook.co.id 2024</p>
    </footer>
</body>
</html>
