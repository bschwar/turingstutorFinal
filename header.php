<?php
	require_once("model.php");
?>
<!DOCTYPE html>
 <head>
	<meta charset="UTF-8"/>
	<title>Turing's Tutor</title>
	<link rel="stylesheet" href="main.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?
if($_GET['action'] == "search.php"){
	 header("Location: search.php?srch={$_GET['srch']}"); 
		exit(0);
}
?>
	<div id="wrapper">

<header>
<! nav bar !>
<a><div class="topnav">

  
  <a href="about.php">About</a>
  <a href="contact.php">Contact Us</a>
  				<?php
				if(isset($_SESSION['loggedIn'])&& $_SESSION['loggedIn'] == true){
					echo"<a href='logout.php'>Logout</a> ";

					
				}else{
					echo "<a href='login.php'>Login</a> <a href='signup.php'>Sign Up</a> ";
				
				}
				?>

  
  
  
  
  
	</div></a>
	
