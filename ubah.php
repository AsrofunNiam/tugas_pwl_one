<?php require 'koneksi.php';
$data = array(
   'nama' => $_POST['txtnama'],
   'npm'  => $_POST['txtnpm'],
   'kelas' => $_POST['txtkelas'],
   'prodi' => $_POST['txtprodi'],
);
$where = $_POST['txtid'];
$cols = array();

foreach ($data as $key => $val) {
   $cols[] = "$key = '$val'";
}

$sql = "UPDATE mahasiswa SET " . implode(',', $cols) . "WHERE id=" . $where;
mysqli_query($conn, $sql);
if ($sql) {
   echo 'Data berhasil diubah<br/><a href="dashboard.php">Kembali</a>';
} else {
   echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);
}

mysqli_close($conn);
