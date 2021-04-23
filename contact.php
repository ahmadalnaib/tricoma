<?php
$title= "Contact";
//header file
 require_once('template/header.php');  
 //uploder file
  require_once('includes/uploader.php');  
 
 ?>
 
 
 
 <!--Html contact-form -->
 <div class="contact-container">
 
  <!--img -->
 <div class="contact-img">
 <p class="lead">Start Writing In <br> Gäestbuch ! </p>
 <img  src="img/tools-bg.webp">
 </div>
 
   <!--form -->
 <div class="contact-content">
 

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form" class="form" enctype="multipart/form-data">

 <div class="form-control">
 <label for="username">Username</label>
 <input type="text" name="username" value="<?php echo $username; ?>" id="username" placeholder="Enter username">
 <small class="text-err"><?php echo $usernameError ?></small>
 
 </div>
 
 <div class="form-control">
 <label for="email">Email</label>
 <input type="text" name="email" value="<?php echo $email; ?>" id="email" placeholder="Enter email">
 <small class="text-err"><?php echo $emailError ?></small>
 </div>
 
  <div class="form-control">
 <label for="image">Image</label>
 <input type="file" name="image">
 <small class="text-err"><?php echo $imageError ?></small>
 </div>
 
  <div class="form-control">
 <label for="message">Message</label>
 <textarea name="message" id="message" cols="30" rows="10"><?php echo $message; ?></textarea>
 <small class="text-err"><?php echo $messageError ?></small>
 </div>
 
 <button class="btn">Submit</button>

 </form>
 </div>
 </div>
 


<?php require_once('template/footer.php') ?>

