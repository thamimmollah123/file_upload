<?php

function dbConnect(){
     $serverName="localhost";
     $userName="root";
     $password="";
     $dbName="crud";
     $conn=mysqli_connect($serverName,$userName,$password,$dbName);
     return $conn;
}
function addUser($data){
     $name=$data['name'];
     $price=$data['price'];
     // $path=$data['path'];

     //IMAGE CODE
     $target_dir = "products/";
$path = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($path,PATHINFO_EXTENSION));
$fileSize=$_FILES["image"]["size"];
  if(!($imageFileType=='png'||!$imageFileType=='jpg')){
     $response="File format is not supported";
  }
  elseif($fileSize/1024>200){
     $response="file size should be 200kb";
  }
  else{
     // $response="Okay";
     if (move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
          $conn=dbConnect();
   $sql="insert into product(name, price,path) values ('$name', '$price','$path')";
    $resp=mysqli_query($conn,$sql);
    if($resp==1){
     $response="All data submitted into database";
    }
     }
     else{
           $response="File not uploaded into serve";
     }

  }



     
     return $response;
}

?>