<?php 
    require("helpers/db.php");

        $sql = "INSERT INTO color (title, code) VALUES ('เเดงจริงๆ', '#FF0000');";
    $result = mysqli_query($connection, $sql);
    var_dump($result);

    mysqli_close($connection);
?>