<?php
include "connect.php";
$querry ="select *from user ;
$record = mysqli($con,$querry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <table class ="table">
    <tr class ="table-dark">
      <th> username</th>
      <th> Edit</th>
      <th>delete</th>

    </tr>
    <tr>
      <td> raj</th>
        <td> raj@gamil.com</th>
          <td> <button clas= "btn btn-primary">edit</button></th>
          <td><button class= "btn btn-danger"> delect</button></th>
    </tr>
  <tr>
         <td> manu</th>
        <td> manu@gamil.com</th>
          <td> <button clas= "btn btn-primary">edit</button></th>
          <td><button class= "btn btn-danger"> delect</button></th>
    </tr> 
</body>
</html>