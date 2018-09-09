++﻿<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */

header {
    background-color: #00CCCC;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 20%;
    height: 400px;
 /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 80%;
    background-color: #f1f1f1;
    height: 400px;
 /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}

</style>
</head>
<body>
<header>
  <h3>Run for ตุ๊ตตู่ กันเถอะ</h3>
</header>
<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a>
</li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
<article>
<h1>ฉันจะ Run For ตุ๊ดตู่</h1>
<?php
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

//echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $gender;
echo "<br>";
echo $age;
echo "<br>";
echo $height;
echo "<br>";
echo $religion;
echo "<br>";
echo $nationality;
echo "<br>";
echo $tel;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $shirts;
echo "<br>";
echo $run;
echo "<br>";
?>
</article>
</section>
<footer>
  <p>Footer</p>
</footer>
</body>
</html>
