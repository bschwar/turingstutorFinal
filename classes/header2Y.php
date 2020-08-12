<?php
	require_once("modelY.php");
?>
<!DOCTYPE html>
 <head>
	<meta charset="UTF-8"/>
	<title>Aristole's Classroom</title>
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

<div class="topnav">
  <a href="index3Y.php">Home</a>
  <a href="aboutY.php">About</a>
  <a href="contactY.php">Contact Us</a>
  				
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
			
		</header>
		
