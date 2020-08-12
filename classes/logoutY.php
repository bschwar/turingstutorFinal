  <?php
  #clear the session to end the user's current onteraction
	require_once("modelY.php");
	session_destroy();
	require("headerY.php");
 
 header("Location: indexY.php"); 
		exit(0);
 
	require("footerY.php");