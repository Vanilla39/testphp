<!DOCTYPE html>
<html lang="th">
<head>
  <title>BIB for ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="row">
    <div class="col" style="background-color:lavender;">ID</div>
    <div class="col" style="background-color:lavenderblush;">Name</div>
    <div class="col" style="background-color:lavender;">Email</div>
    <div class="col" style="background-color:lavenderblush;">Age</div>
    <div class="col" style="background-color:lavender;">Address</div>
    <div class="col" style="background-color:lavenderblush;">gender</div>
  </div>
<?php
include("conn/mysqlconn.php");

$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
?>
      <div class="row">
      <div class="col" style="background-color:lavender;"><?php echo $row["userid"];?></div>
      <div class="col" ><?php echo $row["name"];?></div>
      <div class="col" ><?php echo $row["email"];?></div>
      <div class="col" ><?php echo $row["age"];?></div>
      <div class="col" ><?php echo $row["address"];?></div>
      <div class="col" ><?php echo $row["gender"];?></div>
      </div>   
 <?
    }
} else {
    echo "0 results";
}

?>
</body>
