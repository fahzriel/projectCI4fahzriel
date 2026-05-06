<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <title>404 Not Found</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            background: #0f172a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            color: white;
        }

        .container-box {
            display: flex;
            width: 900px;
            max-width: 95%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }

        .left {
            flex: 1;
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .left h1 {
            font-size: 120px;
            font-weight: 800;
            text-shadow: 0 0 25px rgba(255,255,255,0.6);
        }

        .right {
            flex: 1;
            background: #111827;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right h3 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .right p {
            color: #9ca3af;
            margin-bottom: 25px;
        }

        .btn-home {
            border-radius: 50px;
            padding: 10px 25px;
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
            border: none;
            color: white;
            transition: 0.3s;
        }

        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(59,130,246,0.6);
        }

        .floating-icon {
            position: absolute;
            font-size: 30px;
            opacity: 0.2;
            animation: float 6s infinite ease-in-out;
        }

        .icon1 { top: 20%; left: 20%; }
        .icon2 { bottom: 20%; right: 20%; animation-delay: 2s; }

        @keyframes float {
            0%,100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @media(max-width: 768px){
            .container-box {
                flex-direction: column;
            }
            .left h1 {
                font-size: 80px;
            }
        }
    </style>
</head>

<body>

<div class="container-box">

    <!-- LEFT -->
    <div class="left">
        <i class="bi bi-emoji-frown floating-icon icon1"></i>
        <i class="bi bi-exclamation-circle floating-icon icon2"></i>
        <h1>404</h1>
    </div>

    <!-- RIGHT -->
    <div class="right">
        <h3>Halaman Hilang 👀</h3>
        <p>
            Sepertinya halaman yang kamu cari tidak ada atau sudah dipindahkan.
            Coba kembali ke halaman utama ya.
        </p>

        <a href="<?= base_url('/'); ?>" class="btn btn-home">
            <i class="bi bi-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>

</div>

</body>
</html>