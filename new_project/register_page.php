<?php 
include 'connect.php';
if (isset($_POST['submit'])) {
    $npm = $_POST['input_npm'];
    $name = $_POST['input_name'];
    $email = $_POST['input_email'];
    $class = $_POST['input_class'];
    $number_mobile = $_POST['input_number'];
    $password = $_POST['input_password'];
    
    $sql="INSERT INTO datamhs (npm, name, email, class, numbermobile, password) 
    VALUES('$npm','$name', '$email', '$class','$number_mobile','$password') ";
    $result= mysqli_query($con, $sql);
    if ($result) {
        echo "Data Insert success";
        // header('location: login_page.php');
    } else{
        die(mysqli_error($con));


    }
}

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="register_style.css" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>project</title>
  </head>
  <body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="logo.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are Team 5</h4>
                </div>

                <form method="POST" action="connect.php">
                  <p>Please Create New Account</p>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">NPM</label>
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Input NPM" name="input_npm" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Name</label>
                    <input type="text" id="form2Example11" class="form-control"
                    name="input_name"
                      placeholder="Input Name" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Input Class" name="input_email" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Class</label>
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Input Class" name="input_class" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Number Mobile</label>
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Phone number Phone Mobile " name="input_number"/>
                  </div>
                  <label class="form-label" for="form2Example22">Password</label>
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="input_password" />
                  </div>
                  <div class="form-outline mb-4">

                   <button type="submit" class="btn btn-primary"
                   name="submit"
                
                   >
                   Submit 

                   </button>
                  </div>


                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">UNINDRA</h4>
                <p class="small mb-0">Best Of 20 Campus Top Indonesian</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>