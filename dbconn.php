<?php
    $user="root";
    $pass="";
    $host="localhost";
    $dbname="furrycat";

    $connect=mysqli_connect($host, $user, $pass, $dbname);
   
    if(isset($connect))
    echo(" ");
    //connection established
else
    echo("Cant Connect With Database");

?>