<?php

	include 'lib/config.php';
	include 'conexion.php';
	class vlogin{
		

		function __construct(){

	
		
		echo '<form action="" method="post"> 
        <input name="username" placeholder="Username"><br> 
        <input name="password" placeholder="Password"><br> 
     
        <input name="login" type="submit"> 
    	</form>' ;  

	$gbd = dbConnect();
$sql = 'SELECT name FROM users WHERE name = :name';
$stmt = $gbd->prepare($sql);
$stmt->bindParam(':id',$_POST['username'], PDO::PARAM_String,12);
$stmt->execute();
$result = $stmt->fetchColumn();
    /*
    $usuari = $_POST['username'];

	$conn = dbConnect();
    $sql = 'SELECT name FROM users ';
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
    foreach ($rows as $row) {
        echo 'id_user: '.$row['name'].'|';
    }*/
     }
}
 
 
	