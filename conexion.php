<?php
function dbConnect (){
    $conn = null;
    $host = '92.222.38.97';
    $db =   '2daw13_examenUF3';
    $user = '2daw13_admin';
    $pwd =  'adminadmin';
    try {
        $conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
        //echo 'Connected succesfully.<br>';
    }
    catch (PDOException $e) {
        echo '<p>Cannot connect to database !!</p>';
        exit;
    }
    return $conn;
 }
 
 ?>