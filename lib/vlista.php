<?php
    require_once 'conexion.php';
 
 class vlista{
        

        function __construct(){
    $conn = dbConnect();
    // Create the query
    $sql = 'SELECT * FROM users';
    // Create the query and asign the result to a variable call $result
    $result = $conn->query($sql);
    // Extract the values from $result
    $rows = $result->fetchAll();
    // Since the values are an associative array we use foreach to extract the values from $rows
    foreach ($rows as $row) {
        echo 'id_user: '.$row['idusers'].'|';
        echo 'nombre: '.$row['name'].'|';
        echo 'email: '.$row['email'].'|';
        echo 'contra: '.$row['pass'].'|';
          echo 'rol: '.$row['rol'].'</br>';
    }

}
}