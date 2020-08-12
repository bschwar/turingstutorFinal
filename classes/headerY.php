<?php
	require_once("modelY.php");
?>
<!DOCTYPE html>
 <head>
	<meta charset="UTF-8"/>
	<title>Turing's Tutor</title>
	<link rel="stylesheet" href="main.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script data-ad-client="ca-pub-6899744210351149" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body>
<?
if($_GET['action'] == "searchY.php"){
	 header("Location: searchY.php?srch={$_GET['srch']}"); 
		exit(0);
}
?>
	<div id="wrapper">

<header>
<! nav bar !>
<div class="topnav">
  <a href="../index.php">Home</a>
  <a href="aboutY.php">About</a>
  <a href="contactY.php">Contact Us</a>
  				<?php
				if(isset($_SESSION['YloggedIn'])&& $_SESSION['YloggedIn'] == true){
					echo"<a href='logoutY.php'>Logout</a> ";

					if(!(isset($_SESSION['Yteacher']))|| $_SESSION['Yteacher'] == NULL){
						if(isset($_SESSION['Yclass'])&& $_SESSION['Yclass'] == true){
							echo"<a> </a>";
						}else{
							echo "<a href='classY.php'>Join Class</a> ";
						}
					}
					else{
						echo "<a href='addY.php'>Create Class</a> ";
						
					}
				}else{
					echo "<a href='loginY.php'>Login</a> <a href='signupY.php'>Sign Up</a> ";
				
				}
				?>

  <! search bar!>
  <form id="search" name="myForm" method="get" action="searchY.php" >
    <input id="myInput" name="srch" type="text" placeholder="Search..">
    <button id="myBtn" type="submit" value="searchY.php" style="display: none">Button</button>
  </form>
  <script>
var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("myBtn").click();
  }
});
</script>
</div>
<?php
if(isset($_SESSION['Yclass'])){
	$class=$_SESSION['Yclass'];

	echo "<div class='topnav'>
	  <a href='chatY.php?$class'>Chat</a>
	  <a href='assignmentsY.php?$class'>Assignments</a>
	  <a href='announcmentsY.php?$class'>Announcments</a>";
	if(!(isset($_SESSION['Yteacher']))|| $_SESSION['Yteacher'] == NULL){
		echo "<a href='gradesY.php?$class'>Graded Work</a> ";
	}else{
		echo "<a href='grade2Y.php?$class'>Grade Work</a> ";
		echo "<a href='gradeY.php?$class'>Graded Work</a> ";
		}
	echo "<a href='databaseY.php?$class'>Database</a>";
	echo"<a href='exitY.php'>Leave Class</a>";
	 echo "</div>";


}
?>	
		
			
			
		</header>
		
