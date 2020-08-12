<?php
require_once("modelY.php");
	require("headerY.php");
	
	
?>

<h1 id="center4" >Search Page</h1>

<?php
	$str= $_GET['srch'];
	#Return all possible pretests with the right name
	if(isset($_SESSION['YloggedIn']) && $_SESSION['YloggedIn'] == true){
		$pages=getPretest2($_SESSION['Yid'], $str);
		while($row = $pages->fetch_assoc()){
			echo "<div id='admin'><br/><a href='pretestY.php?id={$row['id']}'>{$row['name']}</a><br/></div>";
		}
	}
	#Return all possible tutor pages with the right name
	if(isset($_SESSION['YloggedIn']) && $_SESSION['YloggedIn'] == true){
		$pages=getTutor2($_SESSION['Yid'], $str);
		while($row = $pages->fetch_assoc()){
			echo "<div id='adminblue'><br/><a href='tutorY.php?id={$row['id']}'>{$row['name']}</a><br/></br></div>";
		}
	}
	require("footerY.php");