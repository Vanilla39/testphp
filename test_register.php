<!DOCTYPE html>
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
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px;
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
    width: 70%;
    background-color: #f1f1f1;
    height: 300px;
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
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>
  <form method="post" action="test_result2.php">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="">
  <br>
  Gender:<br>
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br>
  Age:<br>
  <input type="text" name="age" value="">
  <br>
  Height:<br>
  <input type="text" name="height" value="">
  <br>
  Religion:<br>
  <input type="text" name="religion" value="">
  <br>
  Nationality:<br>
  <input type="text" name="nationality" value="">
  <br>
  Telephone Number: *Ex.0811111111<br>
  <input type="text" name="tel" value="">
  <br>
  E-mail:<br>
  <input type="text" name="email" value="">
  <br>
  Address:<br>
  <textarea name="address" rows="10" cols="30"></textarea>
  <br>
  <p>Size shirts:</p>
  <select name="shirts">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <br><br>
  <p>Distance Running:</p>
  <select name="run">
    <option value="marathon">42.195 km.</option>
    <option value="half marathon">21.1 km.</option>
    <option value="mini marathon">10.5 km.</option>
    <option value="muang thai smile run">5 km.</option>
  </select>
  <br><br>
  <br>
  <input type="submit" value="Submit" >
</form>

<footer>
  <p>Footer</p>
</footer>
    </body>
</html>
