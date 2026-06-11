<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#d9d9d9;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        /* UKURAN DIKUNCI SAMA PERSIS (Lebar 320px, Tinggi 500px) */
        .card{
            width:320px;
            height:500px; 
            background:white;
            border-radius:5px;
            overflow:hidden;
            box-shadow:0 2px 10px rgba(0,0,0,0.15);
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Memaksa gambar bawah tetap di dasar card */
        }

        .content{
            padding:25px 25px 10px 25px;
        }

        .logo{
            display:block;
            width:90px;
            margin:0 auto;
        }

        .title{
            text-align:center;
            margin-top:10px;
            font-size:18px;
            font-weight:bold;
        }

        .subtitle{
            text-align:center;
            font-size:10px;
            color:#777;
            margin-top:5px;
            margin-bottom:15px;
        }

        .form-group{
            margin-bottom:12px;
        }

        .form-group label{
            display:block;
            font-size:11px;
            margin-bottom:5px;
        }

        .form-group input{
            width:100%;
            height:32px;
            border:none;
            background:#f0f0f0;
            border-radius:5px;
            padding:0 10px;
        }

        .opsi-login {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 11px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .opsi-login label {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #333;
            cursor: pointer;
        }

        .opsi-login a {
            color: #f06b6b;
            text-decoration: none;
        }

        .btn{
            width:100%;
            height:35px;
            border:none;
            border-radius:20px;
            background:#f06b6b;
            color:white;
            cursor:pointer;
            margin-top:15px;
            font-weight:bold;
        }

        .btn:hover{
            background:#e85a5a;
        }

        .register-link{
            text-align:center;
            margin-top:12px;
            font-size:11px;
        }

        .register-link a{
            color:#f06b6b;
            text-decoration:none;
            font-weight:bold;
        }

        .gambar-bawah{
            width:100%;
            display:block;
            margin-top: auto; /* Memastikan nempel di dasar flex */
        }
    </style>
</head>
<body>

<div class="card">
    <div class="content">
        <img src="{{ asset('images/logo_lamcer.jpeg') }}" alt="Logo" class="logo">
        <h2 class="title">Selamat Datang</h2>
        <p class="subtitle">Masuk untuk mengakses layanan</p>

        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="opsi-login">
                <label>
                    <input type="checkbox" name="remember"> Ingat Saya
                </label>
                <a href="#">Lupa password?</a>
            </div>

            <button type="submit" class="btn">MASUK</button>

            <div class="register-link">
                Belum punya akun? <a href="/register">Daftar Sekarang</a>
            </div>
        </form>
    </div>

    <img src="{{ asset('images/gambar_bawah.jpeg') }}" alt="Background" class="gambar-bawah">
</div>

</body>
</html>
