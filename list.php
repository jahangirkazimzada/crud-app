<?php 
    include 'connect_db.php';

    $sql = "SELECT * FROM workers";
    $list = $conn -> query($sql);

    while($row = $list -> fetch_assoc()){
        echo("Id: " . $row["id"] . "<br>Name: " . $row["name"] . "<br>Surname: " . $row["surname"] .
         "<br>Password: " . $row["password"] . "<br>Age: " . $row["age"] . "<br><br>");
    }
?>