
<?php
$title= "Home";
//header file
  require_once('template/header.php');
 
 

 
 //connect to sql
 $mysqli=new mysqli('localhost','root','','tricoma');
 
 if($mysqli->connect_error){
	 die("Error connecting to database" . $mysqli->connect_error);
 }
 
 ?>
 
 <!-- main Html content-->
<main class="showcase">

<!-- main showcase section-->
<section class="flex-showcase">

 <div class="content-showcase">
 <h1>Start Writing <br> Your <br> Next Great Story </h1>
 <p>Create better designs, user <br> experiences, and showcase your <br> application in style with — Tails.  </p>
 <a href="contact.php" class="btn-showcase">Write Now</a>
 </div>
 
  <div class="img-showcase">
 <img src="img/hero-character.png">
 </div>
 
</section>

<!-- post showcase section -->
<section class="post-showcase">
<div class="post-content">

</div>

</section>

</main>





<!--footer file-->
<?php
 require_once('template/footer.php')
 ?>

