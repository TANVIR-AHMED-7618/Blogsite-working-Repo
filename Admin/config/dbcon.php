
<?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "blogsite";

    $dbcon = mysqli_connect("$host", "$dbusername", "$dbpassword", "$dbname");

    if(!$dbcon){
        header("Location: ../dberror/dberrors.php");
        die();
    }

?>