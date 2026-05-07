<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - FAQ</title>
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
        .faq-item {
            background: white;
            border-radius: 12px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border: 1px solid #f0f0f0;
            overflow: hidden;
        }
        .faq-question {
            padding: 20px 24px;
            font-weight: 700;
            color: #1a1a2e;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.2s;
            font-size: 0.95rem;
        }
        .faq-question:hover { background: #f9fafb; }
        .faq-question .toggle {
            font-size: 1.2rem;
            color: #e94560;
            transition: transform 0.3s;
            font-weight: 400;
        }
        .faq-answer {
            padding: 0 24px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            color: #6b7280;
            font-size: 0.9rem;
            line-height: 1.7;
        }
        .faq-answer.open {
            padding: 0 24px 20px;
            max-height: 200px;
        }
        .faq-question.active { background: #fff5f7; }
        .faq-question.active .toggle { transform: rotate(45deg); }
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
            <h1>❓ FAQ</h1>
            <p>Pertanyaan yang sering ditanyakan seputar MyBlog</p>
        </div>
    </div>

    <!-- Content -->
    <div class="container" style="padding: 60px 0; max-width: 750px;">

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span>❓ Pertanyaan? (Q)</span>
                <span class="toggle">+</span>
            </div>
            <div class="faq-answer">
                (A) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span>❓ Pertanyaan? (Q)</span>
                <span class="toggle">+</span>
            </div>
            <div class="faq-answer">
                (A) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <span>❓ Pertanyaan? (Q)</span>
                <span class="toggle">+</span>
            </div>
            <div class="faq-answer">
                (A) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?
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
    <script>
        function toggleFaq(el) {
            const answer = el.nextElementSibling;
            const isOpen = answer.classList.contains('open');

            // Tutup semua
            document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
            document.querySelectorAll('.faq-question').forEach(q => q.classList.remove('active'));

            // Buka yang diklik (kalau belum open)
            if (!isOpen) {
                answer.classList.add('open');
                el.classList.add('active');
            }
        }
    </script>
</body>
</html>