<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome CLIENT</title>
   </head>
   
   <body>
      <h1>Welcome CLIENT <?php echo $email; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>