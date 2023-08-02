<?php 
require 'koneksi.php';
$data = array(
	'nama'  => $_POST['txtnama'],
	'npm' => $_POST['txtnpm'],
    'kelas' => $_POST['txtkelas'],
    'prodi'=> $_POST['txtprodi'],
    'absen'=> $_POST['absen'],
    
);

$key = array_keys($data);

$val = array_values($data);

$sql = "INSERT INTO mahasiswa(".implode(', ', $key) . ") ". "VALUES ('".implode("', '", $val) . "')";

mysqli_query($conn,$sql);

if ($sql) {echo 'Data berhasil disimpan <br/><a href="index.php">Kembali</a>';}
else {echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);}
mysqli_close($conn);
?>