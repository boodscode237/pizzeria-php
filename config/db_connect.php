<?php
$conn = mysqli_connect('localhost', 'john', 'test1234', 'dona_pizza');

// check connection
if (!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}
?>
