<?php

$data = false;
$server = "localhost";
$username = "root";
$password = "";
$db = "aptech";

$connection = mysqli_connect($server,$username,$password,$db);
if(!$connection){
    die("connection is failed :" .mysqli_connect_error());
}else{
    // echo "success";
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `gulshan` (`title`, `description`, `email`, `password`) VALUES ('$title', '$description', '$email', '$password')";
    $result = mysqli_query($connection,$sql);
    if($result){
     $data = true;
    }else{
        echo "record does not insert";
    }

}

if($data){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your record insert successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="crud.php">Crud For E-commerce</a></li>
            <li><a class="dropdown-item" href="signup.php">Signup form</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="registrationform.php">Product form</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<form action = "registrationform.php" method = "post">
    <div class="mb-3">
      <label for="title" class="form-label">Product title</label>
      <input type="text" class="form-control" id="title" name = "title" aria-describedby="emailHelp">
     
    </div>
    <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name = "description"></textarea>
  <label for="floatingTextarea">Description about product:</label>
</div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address :</label>
    <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password For registration:</label>
    <input type="password" class="form-control" id="password" name = "password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>