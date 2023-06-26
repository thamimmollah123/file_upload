 <?php
  include("allmethods.php");
 
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .reg{
          width:30%;
          margin-left:30%;
          margin-top:10%;
          padding:10px;
      }
    </style>
  </head>
  <body>
    <form action=""method="post" class="reg"enctype="multipart/form-data">
    <div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
  <label for="floatingInput">Enter Your Name</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" name="price" placeholder="Enter Your Price">
  <label for="floatingPassword">Enter Your Price</label>
</div>
<div class="form-floating mb-3">
  <input type="file" class="form-control" name="image" placeholder="">
  <label for="floatingPassword"></label>
</div>
<button name="login" class="btn btn-primary">Submit</button>

   <?php
     if(isset($_POST['login'])){
    $response=addUser($_POST);
    echo $response;
          // if($response==1){
          //      echo "Data Inserted";
          // }
          // else{
          //      echo "Data not Inserted";
          // }
     }
   
   ?>

    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>