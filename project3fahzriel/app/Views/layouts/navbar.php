<style>
    .navbar-custom {
        background: rgba(15, 23, 42, 0.95);
        backdrop-filter: blur(10px);
        padding: 14px 0;
        box-shadow: 0 1px 20px rgba(0,0,0,0.3);
    }
    .navbar-custom .navbar-brand {
        font-weight: 800;
        font-size: 1.4rem;
        color: white !important;
        letter-spacing: -0.5px;
    }
    .navbar-custom .navbar-brand span { color: #e94560; }
    .navbar-custom .nav-link {
        color: rgba(255,255,255,0.7) !important;
        font-size: 0.9rem;
        font-weight: 500;
        padding: 6px 14px !important;
        border-radius: 6px;
        transition: all 0.2s;
    }
    .navbar-custom .nav-link:hover {
        color: white !important;
        background: rgba(255,255,255,0.08);
    }
    .btn-login {
        background: #e94560;
        color: white !important;
        padding: 7px 20px !important;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.85rem;
        border: none;
        transition: background 0.2s;
    }
    .btn-login:hover { background: #c73652 !important; }
</style>

<nav class="navbar navbar-expand-md fixed-top navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/">✍️ My<span>Blog</span></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            style="color:white;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
                </li>
            </ul>
            <div>
                <?php if (logged_in()) : ?>
                    <a class="btn-login nav-link" href="<?= base_url('logout') ?>">🚪 Logout</a>
                <?php else: ?>
                    <a class="btn-login nav-link" href="<?= base_url('login') ?>">🔑 Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>