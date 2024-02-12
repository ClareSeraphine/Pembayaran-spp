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
	<div class="row justify-content-md-left">
		<div class="col-md-4">
			<h4 class="text-left" style="text-shadow: 2px 2px 4px rgba (0, 0s, 0, 0.5); font-size: 28px; color: #fff; background color: rgba (0, 123, 255, 0.7); padding: 10px; border-radius: 10px;">LOGIN SISWA</h4>
			<div class="card">
				<div class="card-header">
					<img src="LOGO-spp.jpg" width="100%">
				</div>
				<div class="card-body">
					<form action="proses-login-siswa.php" method="post">
						<div class="form-group mb-2">
							<label>NISN</label>
							<input type="number" name="nisn" class="form-control" placeholder="Masukan NISN anda.." required>
						</div>
						<div class="form-group mb-2">
							<label>NIS</label>
							<input type="number" name="nis" class="form-control" placeholder="Masukan NIS anda.." required>
						</div>
						<div class="form-group mb-2">
							<button type="submit" class="btn btn-primary"> LOGIN </button>
						</div>
						<a href="index2.php"> Login Sebagai Administrator / Petugas </a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>