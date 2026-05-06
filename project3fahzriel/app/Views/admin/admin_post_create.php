<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - New Post</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css">
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: linear-gradient(180deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            position: fixed;
            top: 0; left: 0;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }
        .sidebar-brand {
            padding: 28px 24px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .sidebar-brand h4 {
            color: white; font-weight: 700;
            margin: 0; font-size: 1.3rem;
        }
        .sidebar-brand span { color: #e94560; }
        .sidebar-menu { padding: 20px 0; flex: 1; }
        .sidebar-menu a {
            display: flex; align-items: center; gap: 12px;
            padding: 12px 24px;
            color: rgba(255,255,255,0.6);
            text-decoration: none; font-size: 0.9rem;
            transition: all 0.2s;
        }
        .sidebar-menu a:hover, .sidebar-menu a.active {
            color: white; background: rgba(255,255,255,0.08);
            border-left: 3px solid #e94560; padding-left: 21px;
        }
        .sidebar-footer {
            padding: 20px 24px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }
        .sidebar-footer a {
            color: rgba(255,255,255,0.5); text-decoration: none;
            font-size: 0.85rem; display: flex; align-items: center;
            gap: 8px; transition: color 0.2s;
        }
        .sidebar-footer a:hover { color: #e94560; }
        .main-content { margin-left: 250px; flex: 1; display: flex; flex-direction: column; }
        .topbar {
            background: white; padding: 16px 32px;
            display: flex; justify-content: space-between; align-items: center;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
            position: sticky; top: 0; z-index: 99;
        }
        .topbar h5 { margin: 0; font-weight: 700; color: #1a1a2e; }
        .content { padding: 28px 32px; }
        .form-card {
            background: white; border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 32px;
        }
        .form-label { font-weight: 600; color: #374151; font-size: 0.9rem; }
        .form-control {
            border-radius: 8px; border: 1.5px solid #e5e7eb;
            padding: 10px 14px; font-size: 0.9rem;
        }
        .form-control:focus {
            border-color: #0f3460;
            box-shadow: 0 0 0 3px rgba(15,52,96,0.1);
        }
        .btn-publish {
            background: #e94560; color: white;
            padding: 10px 24px; border-radius: 9px;
            font-weight: 600; border: none; font-size: 0.9rem;
            cursor: pointer; transition: background 0.2s;
        }
        .btn-publish:hover { background: #c73652; }
        .btn-draft {
            background: #f3f4f6; color: #374151;
            padding: 10px 24px; border-radius: 9px;
            font-weight: 600; border: none; font-size: 0.9rem;
            cursor: pointer; transition: background 0.2s;
        }
        .btn-draft:hover { background: #e5e7eb; }
        .btn-back {
            color: #6b7280; text-decoration: none;
            font-size: 0.85rem; display: flex; align-items: center; gap: 6px;
        }
        .btn-back:hover { color: #374151; }
    </style>
</head>
<body>
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4>✍️ My<span>Blog</span></h4>
            <small style="color:rgba(255,255,255,0.3); font-size:0.75rem;">Admin Panel</small>
        </div>
        <div class="sidebar-menu">
            <a href="<?= base_url('admin/post') ?>">
                <span>📋</span> Posts
            </a>
            <a href="<?= base_url('admin/post/new') ?>" class="active">
                <span>✏️</span> New Post
            </a>
            <a href="#">
                <span>⚙️</span> Setting
            </a>
            <a href="<?= base_url('/') ?>" target="_blank">
                <span>🌐</span> View Site
            </a>
        </div>
        <div class="sidebar-footer">
            <a href="<?= base_url('auth/logout') ?>">🚪 Logout</a>
        </div>
    </div>

    <!-- MAIN -->
    <div class="main-content">
        <div class="topbar">
            <h5>✏️ New Post</h5>
            <a href="<?= base_url('admin/post') ?>" class="btn-back">← Kembali ke Posts</a>
        </div>

        <div class="content">
            <div class="form-card">
                <form action="" method="post" id="text-editor">
                    <div class="mb-4">
                        <label class="form-label">Title</label>
                        <!-- UBAH: tambah id + maxlength -->
                        <input type="text" name="title" id="titleInput"
                               class="form-control form-control-lg"
                               placeholder="Masukkan judul artikel..."
                               required maxlength="100">
                        <!-- TAMBAH: karakter counter -->
                        <div class="d-flex justify-content-end mt-1">
                            <small id="charCount" style="color:#9ca3af;">0 / 100 karakter</small>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Content</label>
                        <textarea name="content" id="summernote"
                                  placeholder="Tulis konten artikel..."></textarea>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <button type="submit" name="status" value="published"
                                class="btn-publish">🚀 Publish</button>
                        <button type="submit" name="status" value="draft"
                                class="btn-draft">💾 Save Draft</button>
                    </div>
                </form>
            </div>
        </div>

        <footer style="padding: 20px 32px; color: #9ca3af; font-size: 0.8rem; text-align:center;">
            &copy; <?= Date('Y') ?> MyBlog Admin Panel
        </footer>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>
    <script>
        $('#summernote').summernote({ height: 300 });

        // TAMBAH: karakter counter
        const titleInput = document.getElementById('titleInput');
        const charCount  = document.getElementById('charCount');
        titleInput.addEventListener('input', function() {
            const len = this.value.length;
            charCount.textContent = len + ' / 100 karakter';
            charCount.style.color = len > 80 ? '#e94560' : '#9ca3af';
        });
    </script>
</body>
</html>