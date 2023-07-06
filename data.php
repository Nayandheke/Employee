<!DOCTYPE html>
<html>
<head>
    <title>Database</title>
    <link rel="stylesheet" type="text/css" href="data.css">

</head>
<body>
<header>
        <div class="logo">
            <a href="./dashboard.php"><img class="LOGO" src="./img/logo-removebg-preview.png" alt="Logo"></a>
        </div>
        <div class="buttons">
          <a href="./login.php"> <button class="button1">Log In</button></a>
          <a href="./register.php"> <button class="button1">Register</button></a>
        </div>
    </header>

    <h1>Database</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee1";

$connection = new mysqli($servername, $username, $password, $dbname);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT * FROM employee_tbl";
$result = $connection->query($sql);

    while ($row = $result->fetch_assoc()) {
        $ID = $row['ID'];
        $First_Name = $row['First_Name'];
        $Last_Name = $row['Last_Name'];
        $Department = $row['Department'];
        $Location = $row['Location'];


        echo '<div class="card-container">' ;
        echo'<div class="card">';
        echo '<img src="./img/undraw_pic_profile_re_7g2h.svg" alt="Card Image">';
        echo '<div class="card-content">';
        echo '<h3>' . $Department . '</h3>';
        echo '<p>'. $First_Name .''.$Last_Name.' </p>';
        echo '<p>'.$Location .'</p>';
        echo '<div class="button">';
        echo '<a href="./edit.php"> <button class="button2">Edit</button></a>';
        echo '<a href=""> <button class="button2">Delete</button></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo'</div>';
    }
$connection ->close();
?>

</body>
</html>

