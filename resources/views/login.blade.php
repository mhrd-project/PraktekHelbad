<!DOCTYPE html>
<html>
<head>
    <title>Laravel - Jancok</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('login.css') }}">
</head>
<body>
    <div class="form-container">
        <div class="form-body">
            <h2 class="title">Login</h2>
            @if (session()->has('warning'))
                <div class="alert alert-danger">
                    {{ session('warning') }}
                </div>
            @elseif (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ url('login') }}" method="POST" class="the-form">
                @csrf
                <label for="username">Username</label>
                <input type="username" name="username" id="username" placeholder="Masukkan Username" required autofocus>
                <!-- @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif -->

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
                <!-- @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif -->
                    
                <button type="Masuk" class="masuk">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>