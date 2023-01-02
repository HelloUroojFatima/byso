<?php
    session_start();
    $email=$_POST['email'];
  
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include ('DatabaseConnection.php');
    
    $password=$_POST['password'];
    $check="SELECT password 
            FROM customer 
            WHERE email='$email'";

    $data=mysqli_query($db_connection,$check);
    $result = mysqli_fetch_assoc($data);
  
       
        if($result['password']==$password){
            $_SESSION['email']=$email;
            header("location:html/index.php");
           
        }
        else{
            echo"User Not Found";
        }
    }
?>

