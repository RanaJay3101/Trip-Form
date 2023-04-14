<?php

// connecting mysql
// 1. using mysql extensions / function 
// 2. php data object 

if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection to this database failed due to " . mysqli_connect_error());
}
// else{
//     echo "Successfully connected with databse.. ";
// }

// if ($_SERVER['REQU EST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];


    $sql = "INSERT INTO `maldivestripform`.`trip` ( `name`, `age`, `ganeder`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Sucessfully inserted";

        echo " <p class=\"submitmsg\">Thanks For submitting the from .. </p>";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@200&display=swap" rel="stylesheet">
</head>

<body>

    <img class="bg" src="bg.jpg" alt="">
    <div class="container">
        <h1>Welcome to Maldives trip form .. </h1>
        <p>Enter your details to participate in the trip . </p>

        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Enter Your Name ">
            <input type="text" name="age" placeholder="Enter Your Age ">
            <input type="text" name="gender" placeholder="Enter Your Gender ">
            <input type="email" name="email" placeholder="Enter Your Email ">
            <input type="phone" name="phone"  placeholder="Enter Your phone ">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information"></textarea>

            <button class="btn">Submit</button>
            <button class="btn">Reset</button>

        </form>

       
    </div>


</body>

</html>

<!-- INSERT INTO `trip` (`sno`, `name`, `age`, `ganeder`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'textname', '23', 'male', 'this@gmail.com', '1234567890', 'nothing', current_timestamp()); -->
