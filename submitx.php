<?php



$farmer_id = $_POST['farmer_id'];
$date_of_birth = $_POST['date_of_birth'];
$farmer_name = $_POST['farmer_name'];
$email = $_POST['farmer_email'];
$mobile_no = $_POST['mobile_no'];
$aadhar_no = $_POST['aadhar_no'];
$account_no = $_POST['account_no'];

$survey_no = $_POST['survey_no'];
$village = $_POST['village'];
$taluka = $_POST['taluka'];
$district = $_POST['district'];
$state = $_POST['state'];

$soil_report = $_POST['soil_report'];
isset($_FILE['soil_report']['name']);
$irrigation = $_POST['irrigation'];
$land_title = $_POST['land_title'];
$doc_712 = $_POST['doc_712'];
isset($_FILE['doc_712']['name']);
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

$conn = mysqli_connect('localhost', 'root', '', 'farmer');
if ($conn->connect_error) {
  die('Connection Failed');
} else {
  $stmt = $conn->prepare("insert into personal_info(farmer_id,mobile_no,aadhar_no,account_no,farmer_name,date_of_birth,email ) values(?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssss", $farmer_id, $mobile_no, $aadhar_no, $account_no, $farmer_name, $date_of_birth, $email);
  $stmt->execute();
  $stmt = $conn->prepare("insert into farm_info(survey_no,village,taluka,district,state) values(?,?,?,?,?)");
  $stmt->bind_param("issss", $survey_no, $village, $taluka, $district, $state);
  $stmt->execute();
  $stmt = $conn->prepare("insert into field_info(soil_report,irrigation,land_title,doc_712,crop_history) values(?,?,?,?,?)");
  $stmt->bind_param("sssss", $soil_report, $irrigation, $land_title,$doc_712, $crop_history);
  $stmt->execute();
  $stmt = $conn->prepare("insert into yeild_info(acres_harvested,harvesting_technique) values(?,?)");
  $stmt->bind_param("ss", $acres_harvested, $harvesting_technique);
  $stmt->execute();
  $stmt = $conn->prepare("insert into financial_instruments(account_ownership,loan_amount,use_of_loan) values(?,?,?)");
  $stmt->bind_param("sis", $account_ownership, $loan_amount, $use_of_loan);
  $stmt->execute();
  $stmt = $conn->prepare("insert into insurance(insurance_amount,cmp_details,ins_period) values(?,?,?)");
  $stmt->bind_param("sss", $insurance_amount, $cmp_details, $ins_period);
  $stmt->execute();
  $stmt = $conn->prepare("insert into bussiness_info(sales_price,co_operative_membership) values(?,?)");
  $stmt->bind_param("ss", $sales_price, $co_operative_membership);

  $stmt->execute();
  $stmt->close();
  $conn->close();
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <title>My Profile</title>
  <link rel="stylesheet" href="myprf.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body background="imgs/bg.jpg">
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'farmer');
  ?>
  <header class="header">
    <img src="imgs\logo.png">
    <a href="#" class="logo"></a>
    <div class="search-container">
      <form action="/action_page.php">
        <div id="search" class="search">
          <input type="text" placeholder=" &nbsp;Search..." name="search" style="font-style:italic">

          <a onclick="window.location.reload();">
            &nbsp;
            <div type="submit" id="menu-btn" class="fas fa-search" style="scale:1.2"></div>

          </a>
        </div>

      </form>
    </div>
    <nav class="navbar" id="home">
      <a onClick="window.location.reload(); " href="#slide">Home</a>
      <a href="#govt_schemes">Schemes</a>


      <a href="#user_login">User_login</a>

      <a href="#footer">About</a>
    </nav>
  </header>
  <br>
  <br>
  <div class="khokhu">
    <div class="container">
      <div class="profile-box">


        <img src="imgs/AdobeStock_395019833_Preview.jpeg" class="profile-pic">
        <h3> <?php echo $farmer_name; ?></h3>
        <p>Farmer ID:  <?php echo $farmer_id; ?></p><br>



        <button type="button">Personal Info</button>
        <div class="profile-bottom">

          <p>Email: <?php echo $email; ?></p>
          <p>Phone: <?php echo $mobile_no; ?></p>
          <p>Adhaar No.: <?php echo $aadhar_no; ?></p>
          <p>Bank Account No.: <?php echo $account_no; ?></p>
          <p>DOB: <?php echo $date_of_birth; ?></p>
        </div>

      </div>
    </div>
  </div>



</body>

</html>