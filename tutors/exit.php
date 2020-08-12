  <?php
  #clear the class session
	require_once("model.php");
	$_SESSION['class']=NULL;
	require("header.php");
 
 header("Location: da.php"); 
		exit(0);
 
	require("footer.php");