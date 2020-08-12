<?php
require_once("modelY.php");
	require("headerY.php");
	
$_SESSION['Yclass']=$_GET['id'];
header("Location: indexY.php"); 
			exit(0);
	
			
	require("footerY.php");
