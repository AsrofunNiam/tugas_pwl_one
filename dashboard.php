<?php require 'koneksi.php'; ?>
<h2>Dashboard</h2>


<table border="1" cellpadding="2" cellspacing="2" width="60%">
	<thead>
		<tr>
			<th>No</th>
			<th>NAMA</th>
			<th>NPM</th>
			<th>KELAS</th>
			<th>PRODI</th>
			<th>ABSEN</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$sql = 'SELECT * FROM mahasiswa';
		$data = mysqli_query($conn, $sql);
		$no = (int)1;
		foreach ($data as $rows) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $rows['nama'] ?></td>
				<td><?php echo $rows['npm'] ?></td>
				<td><?php echo $rows['kelas'] ?></td>
				<td><?php echo $rows['prodi'] ?></td>
				<td><?php echo $rows['absen'] ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<a href="index.php">Kembali</a>