<?php
require 'koneksi.php';
$id_mhs = $_REQUEST['id'];
$sql = "SELECT * FROM mahasiswa WHERE id='$id_mhs'";
$result = mysqli_query($conn, $sql);
foreach ($result as $rows) {
	$id   = $rows['id'];
	$nama = $rows['nama'];
	$npm  = $rows['npm'];
	$kelas = $rows['kelas'];
	$prodi = $rows['prodi'];
	$absen = $rows['absen'];
}
?>
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css">

<head>
	<title>UBAH DATA MAHASISWA</title>
</head>

<body class="" style="background: radial-gradient(circle, rgba(18,15,70,1) 0%, rgba(83,83,167,1) 21%, rgba(212,230,255,1) 48%, rgba(216,245,255,1) 76%, rgba(0,212,255,1) 99%);">
	<div class="container mt-5 d-flex justify-content-center">
		<div class="col-md-6">
			<form action="ubah.php" method="POST">
				<div class="row py-5" style="border-radius: 28px; background-color: antiquewhite;">
					<div class="col-md-3" style="color: #606060; font-weight:600;">
						<input type="hidden" name="txtid" value="<?php echo $id ?>">
						<div class="row"><label class="mb-3" for="">Nama <span class="float-end">:</span></label></br></div>
						<div class="row"><label class="mb-3" for="">NPM <span class="float-end">:</span></label></br></div>
						<div class="row"><label class="mb-3" for="">Kelas <span class="float-end">:</span></label></br></div>
						<div class="row"><label class="mb-3" for="">Prodi <span class="float-end">:</span></label></br></div>
						<div class="row"><label class="mb-3" for="">absen <span class="float-end">:</span></label></br></div>
					</div>
					<div class="col-md-9" style="color: black;">
						<div class="row me-3"><input class="mb-2" type="text" name="txtnama" value="<?php echo $nama ?>"></br></div>
						<div class="row me-3"><input class="mb-2" type="text" name="txtnpm" value="<?php echo $npm ?>"></br></div>
						<div class="row me-3"><input class="mb-2" type="text" name="txtkelas" value="<?php echo $kelas ?>"></br></div>
						<div class="row me-3"><input class="mb-2" type="text" name="txtprodi" value="<?php echo $prodi ?>"></br></div>
						<div class="row me-3"><input class="mb-2" type="text" name="txtprodi" value="<?php echo $absen ?>"></br></div>
						</br><button type="submit">UBAH</button>
					</div>
			</form>
		</div>
	</div>
	</div>
</body>

</html>