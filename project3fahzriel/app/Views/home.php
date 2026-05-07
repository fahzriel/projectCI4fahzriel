<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f8f9fa;
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 70px;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(233,69,96,0.15) 0%, transparent 70%);
            top: -100px; right: -100px;
            border-radius: 50%;
        }
        .hero::after {
            content: '';
            position: absolute;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(102,126,234,0.15) 0%, transparent 70%);
            bottom: -100px; left: -100px;
            border-radius: 50%;
        }
        .hero-content { position: relative; z-index: 1; }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .hero h1 span { color: #e94560; }
        .hero p {
            color: rgba(255,255,255,0.7);
            font-size: 1.1rem;
            margin-bottom: 32px;
            line-height: 1.7;
        }
        .btn-hero-primary {
            background: #e94560;
            color: white;
            padding: 14px 32px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.2s;
            border: none;
        }
        .btn-hero-primary:hover {
            background: #c73652;
            color: white;
            transform: translateY(-2px);
        }
        .btn-hero-secondary {
            background: transparent;
            color: white;
            padding: 14px 32px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            display: inline-block;
            border: 1.5px solid rgba(255,255,255,0.3);
            transition: all 0.2s;
            margin-left: 12px;
        }
        .btn-hero-secondary:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        .hero-badge {
            display: inline-block;
            background: rgba(233,69,96,0.15);
            color: #e94560;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 20px;
            border: 1px solid rgba(233,69,96,0.3);
        }

        /* STATS */
        .stats-section {
            background: white;
            padding: 40px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .stat-item { text-align: center; }
        .stat-item .number {
            font-size: 2rem;
            font-weight: 800;
            color: #1a1a2e;
        }
        .stat-item .number span { color: #e94560; }
        .stat-item .label {
            font-size: 0.85rem;
            color: #6b7280;
            margin-top: 4px;
        }

        /* FEATURED */
        .section-title {
            font-size: 1.8rem;
            font-weight: 800;
            color: #1a1a2e;
            margin-bottom: 8px;
        }
        .section-sub {
            color: #6b7280;
            font-size: 0.95rem;
            margin-bottom: 40px;
        }
        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            transition: all 0.3s;
            border: 1px solid #f0f0f0;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 32px rgba(0,0,0,0.12);
        }
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 16px;
            display: block;
        }
        .feature-card h5 {
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 10px;
        }
        .feature-card p {
            color: #6b7280;
            font-size: 0.9rem;
            line-height: 1.6;
            margin: 0;
        }

        /* CTA */
        .cta-section {
            background: linear-gradient(135deg, #e94560, #764ba2);
            padding: 80px 0;
            text-align: center;
        }
        .cta-section h2 {
            color: white;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 16px;
        }
        .cta-section p {
            color: rgba(255,255,255,0.8);
            margin-bottom: 32px;
        }
        .btn-cta {
            background: white;
            color: #e94560;
            padding: 14px 36px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s;
        }
        .btn-cta:hover {
            background: #f8f9fa;
            color: #c73652;
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            background: #0f172a;
            color: rgba(255,255,255,0.5);
            padding: 32px 0;
            text-align: center;
            font-size: 0.85rem;
        }
        footer a { color: #e94560; text-decoration: none; }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <!-- HERO -->
    <section class="hero">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-badge">✨ Platform Blog Modern</div>
                    <h1>Selamat Datang di <span>MyBlog</span></h1>
                    <p>Tempat berbagi ide, cerita, dan pengetahuan. Temukan artikel menarik seputar teknologi, programming, dan dunia digital.</p>
                    <a href="<?= base_url('post') ?>" class="btn-hero-primary">📖 Baca Artikel</a>
                    <a href="<?= base_url('about') ?>" class="btn-hero-secondary">Tentang Kami</a>
                </div>
                <div class="col-lg-5 d-none d-lg-flex justify-content-center align-items-center">
                    <div style="font-size: 12rem; opacity: 0.15; user-select:none;">✍️</div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="number">50<span>+</span></div>
                        <div class="label">Artikel Tersedia</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="number">10<span>K+</span></div>
                        <div class="label">Pembaca Aktif</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="number">100<span>%</span></div>
                        <div class="label">Konten Berkualitas</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED -->
    <section style="padding: 80px 0; background: #f8f9fa;">
        <div class="container">
            <div class="text-center">
                <div class="section-title">Mengapa MyBlog? 🤔</div>
                <div class="section-sub">Platform blog yang dirancang untuk memudahkan kamu berbagi dan menemukan konten berkualitas</div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <span class="feature-icon">📝</span>
                        <h5>Mudah Ditulis</h5>
                        <p>Editor artikel yang powerful dengan Summernote, memudahkan kamu menulis konten yang menarik tanpa perlu keahlian coding.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <span class="feature-icon">⚡</span>
                        <h5>Cepat & Responsif</h5>
                        <p>Dibangun dengan CodeIgniter 4 dan PHP 8, MyBlog hadir dengan performa tinggi dan tampilan yang responsif di semua perangkat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <span class="feature-icon">🔒</span>
                        <h5>Aman & Terproteksi</h5>
                        <p>Sistem autentikasi yang kuat memastikan hanya pengguna terdaftar yang bisa mengelola konten di platform ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>Siap Mulai Membaca? 🚀</h2>
            <p>Temukan ratusan artikel menarik yang siap menemani harimu</p>
            <a href="<?= base_url('post') ?>" class="btn-cta">Lihat Semua Artikel →</a>
        </div>
    </section>

    <!-- FOOTER -->
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