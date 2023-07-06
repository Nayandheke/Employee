<?php
include 'connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM employee_tbl WHERE ID = '$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
}

if(!$connection){
    echo "No Connection with Database";
}else{
    if(isset($_POST['submit'])){
        $First_Name = $_POST ['First_Name'];
        $Last_Name = $_POST ['Last_Name'];
        $Department = $_POST ['Department'];
        $Location = $_POST ['Location'];

        $query = "UPDATE employee_tbl SET First_Name = '$First_Name' ,Last_Name = '$Last_Name' , Department = '$Department', Location = '$Location' WHERE ID = '$id'";
        echo "$query <br>";
        $res = mysqli_query($connection, $query);
        if($res){
            echo "Date Edited Succesfully !!";
            header("Location: employee.php");
            exit();
        }else {
            echo "Error in data Insert". mysqli_error($connection);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Data</title>
</head>
<body>
    <form action="" method="post">
        <label for="">First Name</label>
        <input type="text" name="First_Name" value="<?php echo $row['First_Name'] ?>"><br>

        <label for="">Last Name</label>
        <input type="text" name="Last_Name" value="<?php echo $row['Last_Name'] ?>"><br>

        <label for="">Department</label>
        <input type="text" name="Department" value="<?php echo $row['Department'] ?>"><br>

        <label for="">Location</label>
        <input type="text" name="Location" value="<?php echo $row['Location'] ?>"><br>

        
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>