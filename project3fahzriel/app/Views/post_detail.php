<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<div class="p-5 mb-4 bg-light rounded-3">
		<div class="container py-5">
			<h1 class="display-5 fw-bold">Blog Detail</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5"><?= $post['title'] ?></h5>
					<!-- TAMBAH: author, tanggal Indonesia, reading time -->
					<span class="text-muted small">
						<?= $post['author'] ?> &nbsp;|&nbsp;
						<?= Indonesia_date($post['created_at']) ?> &nbsp;|&nbsp;
						🕒 <?= reading_time($post['content']) ?>
					</span>
					<hr>
					<p><?= $post['content'] ?></p>

					<!-- TAMBAH: tombol share -->
					<?php
						$url   = urlencode(current_url());
						$title = urlencode($post['title']);
					?>
					<div class="mt-4 pt-3 border-top">
						<p class="fw-bold mb-2">📢 Bagikan artikel ini:</p>
						<div class="d-flex gap-2">
							<a href="https://wa.me/?text=<?= $title ?>+<?= $url ?>"
							   target="_blank"
							   style="background:#25D366; color:white; padding:8px 18px;
							          border-radius:8px; text-decoration:none; font-size:0.85rem; font-weight:600;">
								💬 WhatsApp
							</a>
							<a href="https://twitter.com/intent/tweet?text=<?= $title ?>&url=<?= $url ?>"
							   target="_blank"
							   style="background:#1DA1F2; color:white; padding:8px 18px;
							          border-radius:8px; text-decoration:none; font-size:0.85rem; font-weight:600;">
								🐦 Twitter/X
							</a>
							<a href="javascript:void(0)"
							   onclick="navigator.clipboard.writeText('<?= current_url() ?>'); alert('Link berhasil disalin!')"
							   style="background:#f3f4f6; color:#374151; padding:8px 18px;
							          border-radius:8px; text-decoration:none; font-size:0.85rem; font-weight:600; cursor:pointer;">
								🔗 Copy Link
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>
		</footer>
	</div>

	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>
</html>