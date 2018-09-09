<!DOCTYPE html>
<html lang="en">
<head>
  <title>Run for ตุ๊ตตู่ กันเถอะ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
          <th>Gender</th>
        </tr>
      </thead>

<?php
include("conn/mysqlconn.php");

$sql = "SELECT* FROM userform";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
  <tbody>
    <tr>
      <td><?php echo $row["userid"];?></td>
      <td><?php echo $row["firstname"];?></td>
      <td><?php echo $row["lastname"];?></td>
    </tr>
<?php
        echo "userid: " . $row["userid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . $row["gender"]. " " . $row["age"]. " " . $row["height"]. " " . $row["religion"]. " " .$row["nationality"]. " "  . $row["tel"]. " " . $row["email"]. " " . $row["address"]. " " . $row["shirts"]. " ".$row["run"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
</tbody>
</table>
</body>
</html>
