 <?php
 
 /* $conn=[
  "host"=>"localhost",
  "user"=>"root",
  "pass"=>"",
  "db"=>"tricoma"
  ];
 
 //connect to sql
 $mysqli=new mysqli($conn['host'],
                    $conn['user'],
					$conn['pass'],
					$conn['db']);
 
 if($mysqli->connect_error){
	 die("Error connecting to database" . $mysqli->connect_error);
 }
 
 */
 
 $host="localhost";
 $user="root";
 $password="";
 $dbname="tricoma";


 //set Dsn;
 
 $dsn='mysql:host='.$host .";dbname=".$dbname; 
 
 //create a PDO instance
 $pdo=new PDO($dsn,$user,$password);
 
