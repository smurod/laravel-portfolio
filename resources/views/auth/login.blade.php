<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Вход</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-container {
            background: #fff;
            padding: 45px 35px;
            border-radius: 16px;
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.6s ease-in-out;
        }

        .form-container h2 {
            margin-bottom: 25px;
            font-size: 26px;
            font-weight: 700;
            color: #333;
            text-align: center;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            margin: 10px 0;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 15px;
            transition: all 0.3s ease;
        }


        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 18px;
        }


    </style>
</head>
<body>
<div class="form-container">
    <h2>Вход в аккаунт</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <x-input-label for="email" :value="('Email')" />
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="password" :value="('Пароль')" />
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <label class="checkbox-group">
            <input id="remember_me" type="checkbox" name="remember">
            <span>Запомнить меня</span>
        </label>
        <div class="form-footer">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Забыли пароль?</a>
            @endif

            <button class="btn btn-primary">
                {{ __('Войти') }}
            </button>
        </div>
    </form>
</div>
</body>
</html>
