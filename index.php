<?php
include("connection.php");
$insert_f = false;
$error = false;


if (!$con) {
    die(mysqli_connect_error());
}

if (!empty($_POST["name"])&&!empty($_POST["phone"]) &&!empty($_POST["age"]) &&!empty($_POST["gender"]) &&!empty($_POST["password"]) && !empty($_POST["email"]) &&!empty($_POST["desc"]) )
 {

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $other = $_POST["desc"];
    
    

    $ins_sql = "insert into tourist.info (name,gender,password,age,phone,date,other,email) values('$name','$gender','$password','$age','$phone',current_timestamp,'$other','$email');";
    if ($con->query($ins_sql)) {
         //echo ("Successfully inserted");
        $insert_f = true;
        header("location:login.php");
    } else {
        $error = true;
        //echo("Failure try again ");
    }
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="background-img">
    <div class="container">

        <h1>Travel Website</h1>
        <p>Enter details to confirm registration</p>
        <?php
        if ($insert_f == true)
            echo "<p class='confirmation'>Registration done Successfully :).</p>";
        else {
            echo "<p class='confirmation'>" . $con->error . "</p>";
        }
        ?>
        <!-- backend scripting language it can be used to hide the backend part and not show it to the user -->
        <form action="index.php" method="post" onsubmit="return clicked()">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <br>
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <br>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <br>
            <p style="font-size:2em;color:white">Gender</p>
            <select name="gender" id="gender">
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br>
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <br>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <br>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
            <br>
            <button class="btn"  >Register</button>
        </form>

        <p style="font-size:2em">Already a member? <a href="login.php">Login</a></p>
    </div>
    <script src="index.js"></script>
</body>

</html>
<?php

?>