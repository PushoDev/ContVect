
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title><?= isset($pageTitle) ? $pageTitle : 'New Page Title'; ?> </title>

		<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="/backend/vendor/images/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="/backend/vendor/images/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="/backend/vendor/images/favicon-16x16.png" />
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/backend/vendor/styles/core.css" />
		<link rel="stylesheet" type="text/css" href="/backend/vendor/styles/icon-font.min.css" />
		<link rel="stylesheet" type="text/css" href="/backend/vendor/styles/style.css" />
		<!-- Sweet Alert -->
		<link rel="stylesheet" type="text/css" href="/assets/sweetalert2/sweetalert2.css" />

		<?= $this->renderSection('stylesheets') ?>

	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.html">
						<img src="/backend/vendor/images/deskapp-logo.svg" alt="" />
					</a>
				</div>
				<div class="login-menu">
					
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="/backend/vendor/images/login-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<?= $this->renderSection('content') ?>
					</div>
				</div>
			</div>
		</div>
		
		<!-- js -->
		<script src="/backend/vendor/scripts/core.js"></script>
		<script src="/backend/vendor/scripts/script.min.js"></script>
		<script src="/backend/vendor/scripts/process.js"></script>
		<script src="/backend/vendor/scripts/layout-settings.js"></script>
		<script src="/assets/sweetalert2/sweetalert2.all.js"></script>
		<script src="/assets/sweetalert2/sweet-alert.init.js"></script>
		
        <?= $this->renderSection('scripts') ?>

	</body>
</html>