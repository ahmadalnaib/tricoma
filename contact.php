<?php
$title= "Contact";
 require_once('template/header.php');  
 
 //filters inputs
 
 //filter string
 function filterString($input){
	 $input=filter_var(trim($input),FILTER_SANITIZE_STRING);
	 if(empty($input))
	 {
		return false; 
	 }else{
		return $input; 
	 }
	 
 }
 
 //filter email
 function filterEmail($input){
	 $input=filter_var(trim($input),FILTER_SANITIZE_EMAIL);
	 
	 if(filter_var($input,FILTER_VALIDATE_EMAIL)){
		 return $input;
	 }else{
		 return false;
	 }
	 
	
 }
 
 
 //errors message var
 $usernameError=$emailError=$imageError=$messageError='';
 
 //show old value when the user have error
 $username=$email=$message='';
 
 
 
 
 
 
 
 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
	 
	 //validate inputs
	 
	 //validate string
	  $username=filterString($_POST['username']);
	  if(!$username){
		  $usernameError="username is required!";
	  }
	  
	  //validate email
	  $email=filterEmail($_POST['email']);
	  if(!$email){
		  $emailError="email is invalid!";
	  }
	  
	  $message=filterString($_POST['message']);
	  if(!$message){
		  $messageError="message is required!";
	  }
	  
	 
	 
	 
	 //VALID THE UPLOAD IMAGE
	 if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
		 
		//images types
		$allowed=[
		'jpg'=>'image/jpeg',
		'png'=>'image/png',
		'gif'=>'image/gif',
		];
		
		//images size
		$maxImageSize= 500000;
		$imageSize=$_FILES['image']['size'];
		
		$fileType=mime_content_type($_FILES['image']['tmp_name']);
		
		//check the image type
		if(!in_array($fileType,$allowed)){
			$imageError="image type not allowed!";
		}
		//check the image size
		if($imageSize > $maxImageSize){
			$imageError="image size is not allowed!";
			
		}
		
	 }
	 
 }
 
 
 
 ?>
 
 
 
 
 <!--Html contact-form -->
 <div class="contact-container">
 
  <!--img -->
 <div class="contact-img">
 <img  src="img/tools-bg.webp">
 </div>
 
   <!--form -->
 <div class="contact-content">
 

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form" class="form" enctype="multipart/form-data">
 <h2>Schreib uns </h2>
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

