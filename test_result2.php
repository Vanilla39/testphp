<?php
include("conn/mysqlconn.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// define variables and set to empty values
$firstname = $lastname = $gender = $age = $height = $religion = $nationality = $tel = $email  = $address = $shirts = $run ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $gender = test_input($_POST["gender"]);
  $age = test_input($_POST["age"]);
  $height = test_input($_POST["height"]);
  $religion = test_input($_POST["religion"]);
  $nationality = test_input($_POST["nationality"]);
  $tel = test_input($_POST["tel"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $shirts = test_input($_POST["shirts"]);
  $run = test_input($_POST["run"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname."<br>".$lastname."<br>".$gender."<br>".$age."<br>".$height."<br>".$religion."<br>".$nationality."<br>".$tel."<br>".$email."<br>".$address."<br>".$shirts."<br>".$run."<br>";

//insert data
$sql = "INSERT INTO userform (firstname, lastname, gender, age, height, religion, nationality, tel, email, address, shirts, run)
VALUES ('$firstname', '$lastname', '$gender', '$age', '$height', '$religion', '$nationality', '$tel', '$email', '$address', '$shirts', '$run')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {  //ใส่if เพื่อเช็คว่าเชื่อมต่อได้ไหม
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
