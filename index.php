<?php
if(isset($_POST['name'])){
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    //create a database connection
    $con = mysqli_connect($server, $username, $password);
    //check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    } 
    // collect post variables
    $name = $_POST[ 'name' ];
   $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO `trip` . `trip` (`name`, `age`, `gender`, `email`, `phone`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', current_timestamp());";
    // execute the query
    if($con ->query($sql) == TRUE){
        //echo "successfully inserted";
    }
    else{
        echo " Error ";
    }
    // close the database connection
    $con->close();
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome To NCIT Japan Travel Form</h1>
        <p>Register the form</p>
        <form action= "index.php" method= "post">
            <input type="text"  name = "name" id = "name" placeholder = "Enter your name">
            <input type="text"  name = "age"  id = "age" placeholder = "Enter your Age">
            <input type="gender"  name = "gender"  id = "gender" placeholder = "Enter your gender">
            <input type="email"  name = "email" id = "email" placeholder = "Enter your email">
            <input type="phone" name = "phone" id = "phone" placeholder = "Enter your phone">
            <button class = "btn"> Submit Form</button>
            <!-- <button class = "btn"> Reset Form</button> -->
        </form>
    </div>
    <script src="index.js"></script>
 
</body>
</html>