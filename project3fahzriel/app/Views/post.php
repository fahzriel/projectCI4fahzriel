<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - Blog</title>
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

        .post-card {
            background: white;
            border-radius: 16px;
            padding: 28px 32px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            border: 1px solid #f0f0f0;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        .post-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0,0,0,0.1);
        }
        .post-card h5 a {
            color: #1a1a2e;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            transition: color 0.2s;
        }
        .post-card h5 a:hover { color: #e94560; }
        .post-card p {
            color: #6b7280;
            font-size: 0.92rem;
            line-height: 1.7;
            margin: 10px 0 0;
        }
        .post-meta {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 6px;
        }
        .post-meta span {
            font-size: 0.78rem;
            color: #9ca3af;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .btn-read {
            background: #e94560;
            color: white;
            padding: 7px 18px;
            border-radius: 8px;
            font-size: 0.82rem;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s;
            display: inline-block;
            margin-top: 14px;
        }
        .btn-read:hover { background: #c73652; color: white; }

        footer {
            background: #0f172a;
            color: rgba(255,255,255,0.5);
            padding: 32px 0;
            text-align: center;
            font-size: 0.85rem;
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <?= $this->include('layouts/navbar'); ?>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="container">
            <h1>📝 Blog</h1>
            <p>Kumpulan artikel terbaru seputar teknologi dan programming</p>
        </div>
    </div>

    <!-- Posts -->
    <div class="container" style="padding: 60px 0; max-width: 800px;">
        <?php if (empty($posts)): ?>
            <div class="text-center py-5 text-muted">
                <div style="font-size: 4rem;">📭</div>
                <p class="mt-3">Belum ada artikel yang dipublish.</p>
            </div>
        <?php else: ?>
            <?php foreach ($posts as $post) : ?>
                <div class="post-card">
                    <h5><a href="/post/<?= $post['slug'] ?>"><?= esc($post['title']) ?></a></h5>
                    <div class="post-meta">
                        <span>🕒 <?= reading_time($post['content']) ?></span>
                        <?php if (!empty($post['created_at'])): ?>
                            <span>📅 <?= Indonesia_date($post['created_at']) ?></span>
                        <?php endif; ?>
                    </div>
                    <p><?= substr(strip_tags($post['content']), 0, 150) ?>...</p>
                    <a href="/post/<?= $post['slug'] ?>" class="btn-read">Baca Selengkapnya →</a>
                </div>
            <?php endforeach ?>
        <?php endif; ?>
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