<?php
require_once("modelY.php");
	require("headerY.php");
	
	
?>
<a href="indexY.php"><img id="center" src="logologo.png"/></a>
			<h1 id="center2">Turing's Tutor</h1>
<h1 id="center3">What will you learn today?</h1>

<?php
if(!isset($_SESSION['Yclass'])){
	if(isset($_SESSION['YloggedIn']) && $_SESSION['YloggedIn'] == true){
		$pages=getClasses($_SESSION['Yid']);
		while($row = $pages->fetch_assoc()){
			echo "<div id='admin'><br/><a href='enterY.php?id={$row['class_id']}'>{$row['class_name']}</a><br/><br/></div>";
		}
	}
}
			
	require("footerY.php");
