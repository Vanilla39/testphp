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
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Address</th>
        <th>gender</th>
      </tr>
    </thead>
    <tbody>
<?php
include("conn/mysqlconn.php");

$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
?>
      <tr>
        <td><?php echo $row["userid"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["age"];?></td>
        <td><?php echo $row["address"];?></td>
        <td><?php echo $row["gender"];?></td>
	  </tr>
 <?php
    }
} else {
    echo "0 results";
}

?>
 </tbody>
</table>
</body>
</html>
