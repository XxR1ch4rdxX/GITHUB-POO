<?php


session_start();


$conn = mysqli_connect(

    'localhost',
    'root',
    '',
    'terraforce',

);

if (isset($conn)){
    echo '';
}else{
    echo 'error\n';
}




?>