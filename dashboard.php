<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dash.css">
    <title>Document</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee1";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name FROM employee_tbl";
$result = $connection->query($sql);

session_start(); 

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo  "username".$username;
    echo $_SESSION["login"];
} else {
    $username = "Guest";
    echo $username;
    echo $_SESSION["login"];
}
?>
    <header>
        <div class="logo">
            <img class="LOGO" src="./img/logo-removebg-preview.png" alt="Logo">
        </div>
        <div class="buttons">
          <a href="./login.html"> <button class="button1">Log In</button></a>
          <a href="./register.html"> <button class="button1">Register</button></a>
        </div>
    </header>

    <div class="container1">
        <nav class="row">
          <ul class="van">
              <li>Home</li>
              <li>About Us</li>
              <li>Contact Us</li>
              <a href="./data.php" class="data"><li>Data</li></a>
          </ul>
      </nav>
    </div>

    <banner>
        <div class="description">
            <h1>Lorem ipsum dolor sit.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laudantium porro voluptatem totam, officia dolorum, aliquid quae quidem, quod culpa soluta atque? Provident harum sapiente qui, fugiat nesciunt reiciendis quis nemo maxime a ea quo est dolore, ex natus ducimus! Sequi, recusandae dicta laudantium perferendis beatae iure eaque perspiciatis. Aspernatur consequuntur, ex officia nesciunt architecto, recusandae modi fugit tempora, animi vero doloribus dolore repellendus totam nostrum illo ipsum earum nulla laboriosam iste at magni aliquam aliquid. Debitis inventore aperiam numquam, ab velit doloremque. Beatae deleniti ipsum fuga vitae laudantium, aut delectus perspiciatis corrupti modi et assumenda nulla consequuntur! Facilis odit corrupti nesciunt explicabo labore maiores nihil aliquid repellat impedit vel voluptate beatae aspernatur delectus culpa, eos rem, ex quasi minima consectetur nostrum voluptatum a? Harum, amet assumenda reprehenderit distinctio eum asperiores quae molestias, ut repellendus minus iste impedit, velit exercitationem maiores dolore. Adipisci labore quaerat consectetur temporibus hic nemo soluta.</p>
        </div>
        <div class="photo">
            <img src="./img/undraw_building_websites_i78t.svg"></img>
        </div>
    </banner>

    <banner1>
        <div class="photo1">
            <img src="./img/undraw_resume_folder_re_e0bi.svg"></img>
        </div>
        <div class="description1">
            <h1>Lorem ipsum dolor sit.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laudantium porro voluptatem totam, officia dolorum, aliquid quae quidem, quod culpa soluta atque? Provident harum sapiente qui, fugiat nesciunt reiciendis quis nemo maxime a ea quo est dolore, ex natus ducimus! Sequi, recusandae dicta laudantium perferendis beatae iure eaque perspiciatis. Aspernatur consequuntur, ex officia nesciunt architecto, recusandae modi fugit tempora, animi vero doloribus dolore repellendus totam nostrum illo ipsum earum nulla laboriosam iste at magni aliquam aliquid. Debitis inventore aperiam numquam, ab velit doloremque. Beatae deleniti ipsum fuga vitae laudantium, aut delectus perspiciatis corrupti modi et assumenda nulla consequuntur! Facilis odit corrupti nesciunt explicabo labore maiores nihil aliquid repellat impedit vel voluptate beatae aspernatur delectus culpa, eos rem, ex quasi minima consectetur nostrum voluptatum a? Harum, amet assumenda reprehenderit distinctio eum asperiores quae molestias, ut repellendus minus iste impedit, velit exercitationem maiores dolore. Adipisci labore quaerat consectetur temporibus hic nemo soluta.</p>
        </div>
    </banner1>

    <footer>
        <h1>Contact us via</h1>
    </footer>
</body>
</html>