<!DOCTYPE html>
<html>

<head>
	<title>TAMBAH DATA MAHASISWA</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css">

<body class="" style="background: radial-gradient(circle, rgba(18,15,70,1) 0%, rgba(83,83,167,1) 21%, rgba(212,230,255,1) 48%, rgba(216,245,255,1) 76%, rgba(0,212,255,1) 99%);">
	<div class="col-md-6">
		
	<form action="simpan.php" method="POST">
		<div class="row py-5" style="border-radius: 28px; background-color: antiquewhite;">
					<div class="col-md-3" style="color: #606060; font-weight:600;">
		<label for="">NAMA:</label>
		<p><input type="text" name="txtnama" placeholder="NAMA" required="true"></p>
		<label for="">NPM:</label>
		<p><input type="text" name="txtnpm" placeholder="NPM" required="true"></p>
		<label for="">KELAS:</label>
		<p><input type="text" name="txtkelas" placeholder="KELAS" required="true"></p>
		<label for="">PRODI:</label>
		<p><input type="text" name="txtprodi" placeholder="PRODI" required="true"></p>
		<label for="">absen:</label>
		<input type='radio' name="absen" value='hadir'>hadir
		<input type='radio' name="absen" value='sakit'>sakit
		<input type='radio' name="absen" value='izin'>izin
		<button type="submit">SIMPAN</button></div></div>
	</form>
</div>
</body>

</html>