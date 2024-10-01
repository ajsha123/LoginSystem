<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home</a>
      <a class="nav-item nav-link" href="#">Contacts</a>
      <a class="nav-item nav-link" href="login.php">Login</a>
       <a class="nav-item nav-link" href="#">About</a>
      
    </div>
  </div>
</nav>

 <!-- Sidebar -->
 <nav class="sidebar bg-success text-white p-3">
        <div class="text-center mb-4">
            <img src="images/default-avatar.png" alt="Profile Image" class="rounded-circle mb-3" width="80">
            <h5> Admin </h5>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Orders</a>
            </li>
        </ul>

         <!-- Main Content -->
    <div class="content p-4 w-100">
        <h2>Welcome back, Admin! 😊</h2>
        <p>Time: <!-- You can add dynamic time here --></p>

        <a href="logout.php">Logout</a>

    </div>
    </nav>
  
    
</body>
</html>