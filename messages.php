<?php
$title= "Messages";
//header file
  require_once('template/header.php');
  //config file
  require_once('config/app.php');
  //db file
  require_once('config/db.php');
  
  //check for submit delete;
  if(isset($_POST['delete'])){
	  $mysqli->query("delete from message where id =".$_POST['delete_id']);
	   header("Location: messages.php");
	   die();
	  
  }
  
  $messages=$mysqli->query("select * from message order by id")
                    ->fetch_all(MYSQLI_ASSOC);

 ?>
 
 
 <div class="table-main">
 <h2> Recieved messages</h2>
 <table id="message">
 <thead>
 <tr>
   <th>#</th>
   <th>username</th>
   <th>email</th>
   <th>image</th>
   <th>message</th>
   <th>actions</th>
 </tr>
 </thead>
 
 <tbody>
 <?php foreach($messages as $message): ?>

 <tr>
 <td> <?php echo $message['id']; ?></td>
 <td> <?php echo $message['username']; ?></td>
 <td> <?php echo $message['email']; ?></td>
 <td> <?php echo $message['image']; ?></td>
 <td> <?php echo $message['message']; ?></td>
   <td>
     <form onsubmit="return confirm('Are you susr')" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	 <input type="hidden" name="delete_id" value="<?php echo $message['id'] ;?>">
	  <input type="submit" name="delete" value="Delete" class="btn-danger">
	 </form>
	</td>
 </tr>

 <?php endforeach; ?>
 </body>
 
 </table>
 </div>
 