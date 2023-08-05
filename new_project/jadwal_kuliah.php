<?php 
include 'connect.php'; 

$query="SELECT *FROM mata_kuliah;";
 $sql= mysqli_query($con, $query );

//  $result = mysqli_fetch_assoc( $sql);
//   // var_dump($result)

// while ($result = $result = mysqli_fetch_assoc( $sql)) {
//   # code...
//   echo $result['mata_kuliah']."<br>";
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style_new.css" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>project</title>
  </head>
  <body>
    <div></div>
    <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name Dosen</th>
      <th>Mata Kuliah</th>
      <th>Jumlah SKS</th>
      <th>Status</th>
      <th>Course</th>
      <th>Actions</th> 
      <?php 
      foreach ($sql as $rows) : ?>
        <tr> 
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                alt=""
                style="width: 45px; height: 45px"
                class="rounded-circle"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1"><?php echo $rows['nama_dosen'] ?></p>
              <p class="text-muted mb-0">john.doe@gmail.com</p>
            </div>
          </div>
          <td> 
            <p class="fw-normal mb-1"> <?php echo $rows['mata_kuliah'] ?> </p> 
          </td> 
          <td><?php echo $rows['jumlah_sks'] ?></td> 
          <td><?php echo $rows['keterangan'] ?></td> 
          
        <td>Online</td>
        <td>
          <button type="button" class="btn btn-link btn-sm btn-rounded">
            View Materi
          </button>
        </td>
          
        </td>
        </tr>
      <?php endforeach ?>                      
</tbody>
</table>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>