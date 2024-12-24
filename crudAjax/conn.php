<?php

$conn = new mysqli('localhost' , 'root' , '', 'cruddb');

if(!$conn){
    $conn->error;
}

?>