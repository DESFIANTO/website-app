<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #d3dcdf, #dfe2e6);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            padding: 30px;
            width: 350px;
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100px;
            height: auto;
        }

        h3 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0,123,255,0.2);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            font-weight: 600;
        }

        button:hover {
            background-color: #0056b3;
        }

        #error-message {
            color: #e74c3c;
            margin-top: 10px;
            font-size: 14px;
        }

        .links {
            margin-top: 20px;
            font-size: 14px;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
            margin: 0 10px;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="https://mf-chan.com/tel-u-logo/lib/Tel-U/primer-vertikal.png" alt="Logo Sekolah">
        </div>
        <h3>{{ __('Login Sekolah') }}</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <div class="links">
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> |
                    <a href="{{ route('register') }}">{{ __('Create Account') }}</a>
                </div>
            @endif
        </form>
    </div>

    <!-- Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
