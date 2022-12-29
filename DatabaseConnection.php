<?php 
    $db_connection = mysqli_connect('localhost', 'root', '', 'BYSO');
    if(!$db_connection){
        echo 'DB_CONNECTION_ERROR:',mysqli_error($db_connection);
    }
?>