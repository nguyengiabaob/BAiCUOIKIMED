<?php
    $servername="localhost";
    $databasename="medicine";
    $username="root";
    $password="";
    $con= @mysqli_connect($servername,$username,$password,$databasename);
    if(!$con)
    {
        echo("Kết nối thất bại");
    }

?>