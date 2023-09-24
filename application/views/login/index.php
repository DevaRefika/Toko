<!DOCTYPE html>
<html>
<head>
	<title><?= $judul ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

	<style type="text/css">
		.kotak{
			border: 2px solid white;
			padding: 30px;
			width: 300px;
			margin-top: 90px;
			-webkit-box-shadow: 0px 0px 23px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 23px 2px rgba(0,0,0,0.75);
box-shadow: 0px 0px 23px 2px rgba(0,0,0,0.75);
		}
	</style>

</head>
<body class="bg-dark">

	<div class="kotak mx-auto">
		<div class="text-center">
			<img src="<?= base_url('assets/img/open-book.png') ?>" alt="" width="70">
			<h2 class="text-white mb-3">Login</h2>
			<form method="POST" action="<?= base_url('login') ?>">
				<div class="form-group">
					<input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Password" class="form-control">
				</div>
				<button type="submit" class="btn btn-outline-light">Login</button>
			</form>
		</div>
	</div>

</body>
</html>