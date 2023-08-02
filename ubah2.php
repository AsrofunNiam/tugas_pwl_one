<table border="1">
   <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NPM</th>
      <th>no hp</th>
      <th>prodi</th>
      <th>absen</th>
      <th>EDIT</th>
   </tr>

<?php
   include "koneksi.php";
   $data = array(
      'npm'  => $_POST['txtnpm'],
      'nama' => $_POST['txtnama'],
       'nohp' => $_POST['txtnohp'],
       'prodi' => $_POST['txtprodi'],
       'absen' => $_POST['absen'],
   );
   $where = $_POST['txtid'];
   $cols = array();
   
   foreach($data as $key=>$val) {
      $cols[] = "$key = '$val'";
   }
   
   $no=1;
   $sql = "UPDATE mahasiswa SET ". implode(',', $cols). "WHERE id=".$where;
   $ambildata = mysqli_query($conn,$sql);
   if ($sql) {
      echo "
      <tr>
         <td>$no</td>
         <td>$sql[id]</td>
         <td>$sql[npm]</td>
         <td>$sql[nama]</td>
         <td>$sql[nohp]</td>
         <td>$sql[prodi]</td>
         <td>$sql[absen]</td>
      </tr>";
      $no++;
   }
   ?>
</table>