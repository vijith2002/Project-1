<?php include("connection.php");?>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="login.css">

</head>
    <body>
    <img class="bg" src="login_bg.jpg" alt="login-img">
    <title>Tourist Login</title>
    <form action="" method="post">
  <!-- Email input -->
  <div class="contain">

  <div class="form-outline mb-4">
  <input type="email" id="form2Example1" class="form-control" name="email" style="width: 40%;margin: auto;">
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <input type="password" id="form2Example2" class="form-control" name="password" style="
    width: 40%;
    margin: auto;
">
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4 bt" name="submit">Sign in</button>
  </div>
 

 

  <!-- Submit button -->
  

  <!-- Register buttons -->
  <div class="text-center">
    <span style="color:white;background:blue"><strong>Not a member?</strong></span> <span>  <a href="index.php" ><b>Register</b></a></span>

  </div>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
$query = "select * from tourist.info where email='$email' and password='$password'";

$res=$con->query($query);
if($res->num_rows==1)
{
    while($row=$res->fetch_assoc())
    $_SESSION['user']=$row['name'];
    header("location:./tourist-temp/index.html");
}
else
echo "not present";
}
?>
