<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Digi Shop</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>temp/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>temp/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>temp/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>temp/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url() ?>temp/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>temp/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>temp/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">

				<div class="auth-box" style="width: 500px;">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?= base_url() ?>temp/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
								<?php if ($this->session->flashdata('message') ):?>
									<?= $this->session->flashdata('message'); ?>
								<?php endif; ?>
								<?php if ($this->session->flashdata('flash') ):?>
									<div class="alert alert-success alert-dismissible" role="alert">
									 <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
								</div>
								<?php endif; ?>
							</div>
							<form class="form-auth-small" action="<?= base_url('Login') ?>" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label">Email :</label>
									<input type="email" class="form-control" name="email" id="signin-email" placeholder="Masukan Email">
									<small class="form-text text-danger"><?= form_error('email'); ?></small>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label">Password :</label>
									<input type="password" class="form-control" name="password" placeholder="Masukan Password">
									<small class="form-text text-danger"><?= form_error('password'); ?></small>
								</div>
								<button type="submit" name="btn_login" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</form>
						</div>
					</div>
			
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>


