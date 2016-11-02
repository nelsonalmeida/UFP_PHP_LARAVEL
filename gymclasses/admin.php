<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome ADMIN</title>
   </head>
   
   <body>
      <h1>Welcome ADMIN <?php echo $_SESSION['email']; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>