<!DOCTYPE html>
<html>
<head>
<body style="margin: 0; overflow: hidden;">
		<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden;">
		<video autoplay loop muted style="position: absolute; top: 0; left: 0; min-width: 100%; min-height: 100%; object-fit: cover;">
		<source src="malam.mp4" type="video/mp4">
	</video>
	</div>
</body>
</head>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Admin / Petugas - Aplikasi Pembayaran SPP.</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	
</head>
<div class="container mt-5">
	<div class="row justify-content-md-center">
		<div class="col-md-4">
			<h4 class="text-center">LOGIN ADMIN / PETUGAS</h4>
			<div class="card">
				<div class="card-header">
					<img src="LOGO-spp.jpg" width="100%">
				</div>
				<div class="card-body">
					<form action="proses-login-petugas.php" method="post">
						<div class="form-group mb-2">
							<label>Username</label>
							<input type="text" name="username" class="form-control" placeholder="Masukan Username anda.." required>
						</div>
						<div class="form-group mb-2">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Masukan Password anda.." required>
						</div>
						<div class="form-group mb-2">
							<button type="submit" class="btn btn-primary"> LOGIN </button>
						</div>
						<a href="index.php"> Login Sebagai Siswa </a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>