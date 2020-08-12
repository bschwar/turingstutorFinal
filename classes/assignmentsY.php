<?php
require_once("modelY.php");
	require("headerY.php");
?>
<h1 id="center3">What will you learn today?</h1>
<?php

if(!(isset($_SESSION['Yteacher']))|| $_SESSION['Yteacher'] == NULL){
	$pages=listAss($_SESSION['Yclass'], $_SESSION['Yid']);
		while($row = $pages->fetch_assoc()){
			$str=$row['name'];
			if($row['score']==-1){
			echo "<div id='adminblue'><a href='detailsY.php?name={$str}'>{$row['name']}</a></div>";
			}else{
			echo "<div id='admin'><a href='detailsY.php?name={$str}'>{$row['name']}</a></div>";	
			}
		}
}else{
echo"<div id='admin'><br/><a href='addassY.php'>Make Assignment</a><br/><br/></div>";
}
	require("footerY.php");
