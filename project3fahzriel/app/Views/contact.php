<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - Contact</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f8f9fa; padding-top: 70px; }
        .page-hero {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            padding: 80px 0;
            text-align: center;
        }
        .page-hero h1 { color: white; font-weight: 800; font-size: 2.5rem; }
        .page-hero p { color: rgba(255,255,255,0.6); font-size: 1rem; margin: 0; }
        .contact-card {
            background: white;
            border-radius: 16px;
            padding: 36px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            border: 1px solid #f0f0f0;
            transition: all 0.3s;
            text-align: center;
            height: 100%;
        }
        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0,0,0,0.1);
        }
        .contact-icon {
            font-size: 2.5rem;
            margin-bottom: 16px;
            display: block;
        }
        .contact-card h5 {
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 8px;
        }
        .contact-card p {
            color: #6b7280;
            margin: 0;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        footer {
            background: #0f172a;
            color: rgba(255,255,255,0.5);
            padding: 32px 0;
            text-align: center;
            font-size: 0.85rem;
            margin-top: 80px;
        }
    </style>
</head>
<body>

    <?= $this->include('layouts/navbar'); ?>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="container">
            <h1>📬 Contact</h1>
            <p>Ada pertanyaan? Jangan ragu untuk menghubungi kami</p>
        </div>
    </div>

    <!-- Content -->
    <div class="container" style="padding: 60px 0;">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="contact-card">
                    <span class="contact-icon">📍</span>
                    <h5>Alamat</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card">
                    <span class="contact-icon">📧</span>
                    <h5>Email</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card">
                    <span class="contact-icon">📱</span>
                    <h5>No. HP</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p class="mb-1">✍️ <strong style="color:white;">MyBlog</strong> — Platform Blog Modern</p>
            <p class="mb-0">&copy; <?= Date('Y') ?> MyBlog. All rights reserved.</p>
        </div>
    </footer>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>