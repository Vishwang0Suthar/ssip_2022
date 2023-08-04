<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body style="display: none;">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
    </body>
</html>
<?php      
    $conn = mysqli_connect('localhost', 'root', '', 'farmer');
    if ($conn->connect_error) {
      die('Connection Failed');
    } else {
    $admin_id = $_POST['a_email'];  
    $admin_password = $_POST['pass'];  
        
        //to prevent from mysqli injection  
        $admin_id = stripcslashes($admin_id);  
        $admin_password = stripcslashes($admin_password);  
        $admin_id = mysqli_real_escape_string($conn, $admin_id);  
        $admin_password = mysqli_real_escape_string($conn, $admin_password);  
      
        $sql = "select *from admin_login where admin_id = '$admin_id' and admin_password = '$admin_password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "<h1><center> Login successful </center></h1>";
            echo '<script>alert("Login Successfully!!!")</script>';
			echo '<script>location.replace("registration.html")</script>';  
        }  
        else{  
            // echo "<h1> Login failed. Invalid admin_id or admin_password.</h1>";  
            echo '<script>alert("check your credentials...")</script>';
			echo '<script>location.replace("adminH.html")</script>';
        }     
    }
?>