<!--config file--php-->
<?php
 //session
session_start();

//config file
require_once('config/app.php') 
?>

<!--html-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="css/style.css">
  <title><?php echo $config['App_Name'] .  " | "  . $title ?> </title>
</head>
<body>

<!-- start container-->
<div class="container">
  <?php isset($_SESSION['name'])? $name=$_SESSION['name'] :$name=""; ?>
  <p>Hi <?php echo $name; ?> </p>
