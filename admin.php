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
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="" async defer></script>
    </body>
</html>

<?php

  $admin_id = $_POST['admin_id'];
  $admin_password = $_POST['admin_password'];

  $farmer_id = $_POST['farmer_id'];
  $date_of_birth =$_POST['date_of_birth'];
  $farmer_name = $_POST['farmer_name'];
  $eamil = $_POST['email'];
  $mobile_no = $_POST['mobile_no'];
  $aadhar_no = $_POST['aadhar_no'];
  $account_no = $_POST['account_no'];

  $survey_no = $_POST['survey_no'];
  $village = $_POST['village'];
  $taluka = $_POST['taluka'];
  $district = $_POST['district'];
  $state = $_POST['state'];

  $soil_report = $_POST['soil_report'];
  $irrigation = $_POST['irrigation'];
  $land_title = $_POST['land_title'];
  $crop_history = $_POST['crop_history'];

  $acres_harvested = $_POST['acres_harvested'];
  $harvesting_technique = $_POST['harvesting_technique'];
  
  $account_ownership = $_POST['account_ownership'];
  $loan_amount = $_POST['loan_amount'];
  $use_of_loan = $_POST['use_of_loan'];

  $insurance_amount  = $_POST['insurance_amount'];
  $cmp_details = $_POST['cmp_details'];
  $ins_period = $_POST['ins_period'];

  $sales_price = $_POST['sales_price'];
  $co_operative_membership = $_POST['co_operative_membership'];
  
  $conn = mysqli_connect('localhost','root','','farmer');
  if($conn->connect_error){
    die('Connection Failed ');
  }
  else
  {
    $stmt = $conn->prepare("insert into personal_info(farmer_id,mobile_no,aadhar_no,account_no,farmer_name,date_of_birth,email) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$farmer_id,$mobile_no,$aadhar_no,$account_no,$farmer_name,$date_of_birth,$email);
    $stmt->execute();
    

    $stmt->execute();
    $stmt->close();
    $conn->close();
  
  }
?>