<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
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
            color: white;
            font-weight: 700;
            margin: 0;
            font-size: 1.3rem;
            letter-spacing: 0.5px;
        }
        .sidebar-brand span {
            color: #e94560;
        }
        .sidebar-menu {
            padding: 20px 0;
            flex: 1;
        }
        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 24px;
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s;
        }
        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            color: white;
            background: rgba(255,255,255,0.08);
            border-left: 3px solid #e94560;
            padding-left: 21px;
        }
        .sidebar-menu .icon { font-size: 1.1rem; width: 20px; text-align: center; }
        .sidebar-footer {
            padding: 20px 24px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }
        .sidebar-footer a {
            color: rgba(255,255,255,0.5);
            text-decoration: none;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.2s;
        }
        .sidebar-footer a:hover { color: #e94560; }

        /* MAIN CONTENT */
        .main-content {
            margin-left: 250px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* TOPBAR */
        .topbar {
            background: white;
            padding: 16px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
            position: sticky;
            top: 0;
            z-index: 99;
        }
        .topbar h5 {
            margin: 0;
            font-weight: 700;
            color: #1a1a2e;
            font-size: 1.1rem;
        }

        /* CONTENT */
        .content {
            padding: 28px 32px;
        }

        /* STATS CARD */
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 24px;
        }
        .stat-icon {
            width: 48px; height: 48px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem;
        }
        .stat-icon.blue { background: #eff6ff; }
        .stat-icon.green { background: #f0fdf4; }
        .stat-icon.red { background: #fff5f5; }
        .stat-label { font-size: 0.8rem; color: #6b7280; margin-bottom: 2px; }
        .stat-value { font-size: 1.5rem; font-weight: 700; color: #1a1a2e; }

        /* TABLE CARD */
        .table-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        .table-card-header {
            padding: 20px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f3f4f6;
        }
        .table-card-header h6 {
            margin: 0;
            font-weight: 700;
            color: #1a1a2e;
        }
        .table { margin: 0; }
        .table th {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #9ca3af;
            padding: 14px 24px;
            border-bottom: 1px solid #f3f4f6;
            font-weight: 600;
            background: #fafafa;
        }
        .table td {
            padding: 16px 24px;
            vertical-align: middle;
            border-bottom: 1px solid #f9fafb;
            color: #374151;
        }
        .table tbody tr:last-child td { border-bottom: none; }
        .table tbody tr:hover td { background: #f9fafb; }
        .post-title { font-weight: 600; color: #111827; margin-bottom: 2px; }
        .post-date { font-size: 0.76rem; color: #9ca3af; }

        /* BADGE */
        .badge-published {
            background: #dcfce7; color: #16a34a;
            padding: 5px 12px; border-radius: 20px;
            font-size: 0.75rem; font-weight: 600;
        }
        .badge-draft {
            background: #f3f4f6; color: #6b7280;
            padding: 5px 12px; border-radius: 20px;
            font-size: 0.75rem; font-weight: 600;
        }

        /* BUTTONS */
        .btn-icon {
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 500;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-preview { background: #f3f4f6; color: #374151; }
        .btn-preview:hover { background: #e5e7eb; color: #111827; }
        .btn-edit { background: #eff6ff; color: #2563eb; }
        .btn-edit:hover { background: #dbeafe; color: #1d4ed8; }
        .btn-delete { background: #fff5f5; color: #dc2626; }
        .btn-delete:hover { background: #fee2e2; color: #b91c1c; }

        /* NEW POST BTN */
        .btn-new {
            background: #e94560;
            color: white;
            padding: 9px 20px;
            border-radius: 9px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            border: none;
            transition: background 0.2s;
        }
        .btn-new:hover { background: #c73652; color: white; }

        /* MODAL */
        .modal-content { border: none; border-radius: 16px; }

        /* ALERT */
        .alert {
            border-radius: 10px;
            border: none;
            padding: 14px 20px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
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
            <a href="<?= base_url('admin/post') ?>" class="active">
                <span class="icon">📋</span> Posts
            </a>
            <a href="<?= base_url('admin/post/new') ?>">
                <span class="icon">✏️</span> New Post
            </a>
            <a href="#">
                <span class="icon">⚙️</span> Setting
            </a>
            <a href="<?= base_url('/') ?>" target="_blank">
                <span class="icon">🌐</span> View Site
            </a>
        </div>
        <div class="sidebar-footer">
            <?php if (logged_in()) : ?>
                <a href="<?= base_url('logout') ?>">🚪 Logout</a>
            <?php else: ?>
                <a href="<?= base_url('login') ?>">🔑 Login</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- MAIN -->
    <div class="main-content">
        <!-- TOPBAR -->
        <div class="topbar">
            <h5>📋 Manage Posts</h5>
            <a href="<?= base_url('admin/post/new') ?>" class="btn-new">+ New Post</a>
        </div>

        <!-- CONTENT -->
        <div class="content">

            <!-- Flash Message -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    ✅ <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <!-- Stats -->
            <?php
                $total     = count($posts);
                $published = count(array_filter($posts, fn($p) => $p['status'] === 'published'));
                $draft     = $total - $published;
            ?>
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon blue">📄</div>
                        <div>
                            <div class="stat-label">Total Posts</div>
                            <div class="stat-value"><?= $total ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon green">✅</div>
                        <div>
                            <div class="stat-label">Published</div>
                            <div class="stat-value"><?= $published ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon red">📝</div>
                        <div>
                            <div class="stat-label">Draft</div>
                            <div class="stat-value"><?= $draft ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-card">
                <div class="table-card-header">
                    <h6>All Posts</h6>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th width="40">#</th>
                            <th>Title</th>
                            <th width="110">Status</th>
                            <th width="210">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php /** @var array $posts */ ?>
                    <?php $no = 0; foreach($posts as $post): $no++; ?>
                        <tr>
                            <td style="color:#9ca3af"><?= $no ?></td>
                            <td>
                                <div class="post-title"><?= esc($post['title']) ?></div>
                                <div class="post-date">📅 <?= Indonesia_date($post['created_at']) ?></div>
                            </td>
                            <td>
                                <?php if($post['status'] === 'published'): ?>
                                    <span class="badge-published">● Published</span>
                                <?php else: ?>
                                    <span class="badge-draft">○ Draft</span>
                                <?php endif ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/post/'.$post['id'].'/preview') ?>"
                                   class="btn-icon btn-preview" target="_blank">Preview</a>
                                <a href="<?= base_url('admin/post/'.$post['id'].'/edit') ?>"
                                   class="btn-icon btn-edit">Edit</a>
                                <a href="#"
                                   data-href="<?= base_url('admin/post/'.$post['id'].'/delete') ?>"
                                   onclick="confirmToDelete(this)"
                                   class="btn-icon btn-delete">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </div>

        <footer style="padding: 20px 32px; color: #9ca3af; font-size: 0.8rem; text-align:center;">
            &copy; <?= Date('Y') ?> MyBlog Admin Panel
        </footer>
    </div>

    <!-- Modal Delete -->
    <div id="confirm-dialog" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4 text-center">
                    <div style="font-size:3rem; margin-bottom:12px;">🗑️</div>
                    <h5 class="fw-bold mb-2">Hapus Post?</h5>
                    <p class="text-muted mb-4">Data yang dihapus tidak bisa dikembalikan lagi.</p>
                    <div class="d-flex gap-2 justify-content-center">
                        <button class="btn btn-light px-4" data-bs-dismiss="modal">Batal</button>
                        <a href="#" id="delete-button" class="btn btn-danger px-4">Ya, Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        function confirmToDelete(el) {
            document.getElementById("delete-button").setAttribute("href", el.dataset.href);
            new bootstrap.Modal(document.getElementById('confirm-dialog')).show();
        }
    </script>
</body>
</html>