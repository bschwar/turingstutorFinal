  <?php
  #clear the class session
	require_once("modelY.php");
	$_SESSION['Yclass']=NULL;
	require("headerY.php");
 
 header("Location: indexY.php"); 
		exit(0);
 
	require("footerY.php");