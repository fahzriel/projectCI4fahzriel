<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - Register</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }
        .register-brand {
            text-align: center;
            margin-bottom: 32px;
        }
        .register-brand h2 {
            color: white;
            font-weight: 800;
            font-size: 1.8rem;
            margin: 0;
        }
        .register-brand h2 span { color: #e94560; }
        .register-brand p {
            color: rgba(255,255,255,0.5);
            font-size: 0.85rem;
            margin-top: 6px;
        }
        .register-card {
            background: white;
            border-radius: 20px;
            padding: 36px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .register-card h4 {
            font-weight: 800;
            color: #1a1a2e;
            margin-bottom: 6px;
            font-size: 1.4rem;
        }
        .register-card .subtitle {
            color: #9ca3af;
            font-size: 0.85rem;
            margin-bottom: 28px;
        }
        .form-label {
            font-weight: 600;
            color: #374151;
            font-size: 0.85rem;
            margin-bottom: 6px;
        }
        .form-control {
            border-radius: 10px;
            border: 1.5px solid #e5e7eb;
            padding: 11px 14px;
            font-size: 0.9rem;
            transition: all 0.2s;
        }
        .form-control:focus {
            border-color: #e94560;
            box-shadow: 0 0 0 3px rgba(233,69,96,0.1);
        }
        .form-text {
            font-size: 0.78rem;
            color: #9ca3af;
        }
        .btn-register {
            background: #e94560;
            color: white;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.95rem;
            border: none;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 8px;
        }
        .btn-register:hover { background: #c73652; }
        .divider {
            border: none;
            border-top: 1px solid #f0f0f0;
            margin: 20px 0;
        }
        .login-link {
            text-align: center;
            font-size: 0.85rem;
            color: #6b7280;
        }
        .login-link a {
            color: #e94560;
            text-decoration: none;
            font-weight: 600;
        }
        .login-link a:hover { text-decoration: underline; }
        .alert {
            border-radius: 10px;
            font-size: 0.85rem;
            padding: 12px 16px;
            margin-bottom: 20px;
            border: none;
        }
        .back-home {
            text-align: center;
            margin-top: 24px;
        }
        .back-home a {
            color: rgba(255,255,255,0.5);
            font-size: 0.82rem;
            text-decoration: none;
            transition: color 0.2s;
        }
        .back-home a:hover { color: white; }
    </style>
</head>
<body>

    <div class="register-wrapper">
        <!-- Brand -->
        <div class="register-brand">
            <h2>✍️ My<span>Blog</span></h2>
            <p>Platform Blog Modern</p>
        </div>

        <!-- Card -->
        <div class="register-card">
            <h4>Buat Akun Baru 🚀</h4>
            <p class="subtitle">Daftarkan dirimu dan mulai menulis artikel</p>

            <!-- Flash errors -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    ❌ <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <div>❌ <?= $error ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           placeholder="Masukkan email kamu..."
                           value="<?= old('email') ?>" required>
                    <div class="form-text">Email kamu tidak akan dibagikan ke siapapun.</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control"
                           placeholder="Masukkan username kamu..."
                           value="<?= old('username') ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control"
                           placeholder="Masukkan password..." required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ulangi Password</label>
                    <input type="password" name="pass_confirm" class="form-control"
                           placeholder="Ulangi password kamu..." required>
                </div>

                <button type="submit" class="btn-register">📝 Daftar Sekarang</button>
            </form>

            <hr class="divider">

            <div class="login-link">
                Sudah punya akun? <a href="<?= route_to('login') ?>">Login di sini</a>
            </div>
        </div>

        <div class="back-home">
            <a href="<?= base_url('/') ?>">← Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>