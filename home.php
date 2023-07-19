<?php
include("connection.php");

?>
<html>
    <body style="text-align:center;">
    
        <h1><?php echo "Hello ".$_SESSION['user'];?></h1>
        <p style="font-size:2em">Want to book flight?  <a href="https://www.makemytrip.com/flights/"> click here</a></p>
        <img class="bg" src="bg.jpg" alt="background-img">
    </body>
</html>