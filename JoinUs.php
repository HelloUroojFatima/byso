<?php
    session_start();
   
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include ('DatabaseConnection.php');
    $email=$_POST['email'];
    $check="SELECT COUNT(email) 
            FROM customer 
            WHERE email='$email'";

    $data=mysqli_query($db_connection,$check);
    $count = mysqli_fetch_array($data);
 
    if($count['COUNT(email)']!='0'){
        echo"already joined";
    }
    else{
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        $postalCode=$_POST['postalCode'];
        $address=$_POST['address'];
        $city=$_POST['city'];

        $result="INSERT INTO customer(name,email,mobile,password,postalCode,address,city)
                VALUES ('$name','$email','$mobile','$password','$postalCode','$address','$city')";


        $save=mysqli_query($db_connection,$result);

        if($save){
            $_SESSION['email']= $email;
            header("location:html/index.php");
        }
        else{
            echo'fail insertion'.mysqli_error($db_connection);
        }
    }}

?>

