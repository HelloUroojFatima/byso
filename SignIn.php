<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include ('DatabaseConnection.php');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $check="SELECT password 
            FROM customer 
            WHERE email='$email'";

    $data=mysqli_query($db_connection,$check);
    $result = mysqli_fetch_assoc($data);
  
       
        if($result['password']==$password){
            header("location:html/index.html");
           
        }
        else{
            echo'User not found';
        }
    }
?>

