<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko MankGarox</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;

            /* Tambahkan GIF sebagai background */
            background: url("{{ asset('images/intro.gif') }}") no-repeat center center fixed;
            background-size: cover;
        }

        .content {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px 40px;
            border-radius: 10px;
        }

        .btn-login {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 15px;
            background: #ffffff;
            color: #333;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #f39c12;
            color: white;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Toko MankGarox</h1>
        <a href="{{ route('login') }}" class="btn-login">Login</a>
    </div>
</body>
</html>
