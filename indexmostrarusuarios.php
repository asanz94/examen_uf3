<?php
    require_once 'conexion.php';
 
    $conn = dbConnect();
    // Create the query
    $sql = 'SELECT * FROM users';
    // Create the query and asign the result to a variable call $result
    $result = $conn->query($sql);
    // Extract the values from $result
    $rows = $result->fetchAll();
    // Since the values are an associative array we use foreach to extract the values from $rows
    foreach ($rows as $row) {
        echo 'id_empleado: '.$row['idusers'].'<br/>';
        echo 'nombre: '.$row['name'].'<br/>';
        echo 'email: '.$row['email'].'<br/>';
        echo 'telefono: '.$row['pass'].'<br/>';
          echo 'telefono: '.$row['rol'].'<br/>';
        echo "<hr/>";
    }
 ?>