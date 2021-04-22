<?php
$title= "Contact";
 require_once('template/header.php');  
 ?>
 
 <!--Html contact-form -->
 <div class="contact-container">
 
  <!--img -->
 <div class="contact-img">
 <img  src="img/tools-bg.webp">
 </div>
 
   <!--form -->
 <div class="contact-content">
 

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form" class="form" enctype="multupart/form-data">
 <h2>Schreib uns </h2>
 <div class="form-control">
 <label for="username">Username</label>
 <input type="text" name="name" id="username" placeholder="Enter username">
 </div>
 
 <div class="form-control">
 <label for="email">Email</label>
 <input type="text" name="email" id="email" placeholder="Enter email">
 </div>
 
  <div class="form-control">
 <label for="image">Image</label>
 <input type="file" name="image" id="email" >
 </div>
 
  <div class="form-control">
 <label for="message">Message</label>
 <textarea name="message" id="message" cols="30" rows="10"></textarea>
 </div>
 
 <button class="btn">Submit</button>

 </form>
 </div>
 </div>
 


<?php require_once('template/footer.php') ?>

