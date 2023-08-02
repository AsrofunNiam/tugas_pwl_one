<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css">

<head>
	<title>DATA MAHASISWA</title>
</head>

<body class="" style="background-color: aquamarine;">
	<div class="container-xxl mt-5">
		<div class="container">
			<div class="row d-flex justify-content-center p-4 box2" style="">
				<img src="logo.png" style="width: 20%;" alt="">
				<h1 class="d-flex justify-content-center" style="color: #404040;">DATA MAHASISWA</h1>
			</div>
		</div>
	</div>
	<div class="container d-flex justify-content-center">
		<table border="2" cellpadding="2" cellspacing="2" width="100%" style="background-color: #fff;">
			<thead>
				<tr>
					<th class="box2 border p-1" style="font-size: 18px; font-weight:600;">No</th>
					<th class="box2 border p-1" style="font-size: 18px; font-weight:600;">Nama</th>
					<th class="box2 border p-1" style="font-size: 18px; font-weight:600;">NPM</th>
					<th class="box2 border p-1" style="font-size: 18px; font-weight:600;">Kelas</th>
					<th class="box2 border p-1" style="font-size: 18px; font-weight:600;">Jenis Kelamin</th>
					<th class="box2 border p-1" style="font-size: 18px; font-weight:600;">Absen</th>
					<th class="box2 border p-1" style="font-size: 18px; font-weight:600;">Pilihan</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = 'SELECT * FROM mahasiswa';
				$data = mysqli_query($conn, $sql);
				$no = (int)1;
				foreach ($data as $rows) : ?>
					<tr>
						<td class="border p-2"><?php echo $no++ ?></td>
						<td class="border p-2"><?php echo $rows['nama'] ?></td>
						<td class="border p-2"><?php echo $rows['npm'] ?></td>
						<td class="border p-2"><?php echo $rows['kelas'] ?></td>
						<td class="border p-2"><?php echo $rows['prodi'] ?></td>
						<td class="border p-2"><?php echo $rows['absen'] ?></td>
						<td class="border p-2">
							<a href="form_ubah.php?id=<?php echo $rows['id'] ?>">
								<button class="py-1 px-4 rounded-3" style="background-color: black; color:#fff;">Ubah</button>
							</a>
							<a href="hapus.php?id=<?php echo $rows['id'] ?>">
								<button class="py-1 px-4 rounded-3" style="background-color: red; color:#fff;">Hapus</button>
							</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

	<div class=" container mt-5 d-flex justify-content-start">
		<div class="row">
			<a href="form_tambah.php">
				<div class="row box">
					<button class="p-2 rounded-3" box>Tambah</button>
				</div>
			</a>
		</div>
	</div>

</body>

</html>