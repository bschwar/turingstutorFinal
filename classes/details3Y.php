    <?php
	require_once("modelY.php");
	require("headerY.php");
	
	$pages=getTeach($_SESSION['Yclass'], $_GET['name']);

$image = $pages['filename'];
$image_src = "upload/".$image;
echo"<h2>$image</h2>";
?>
<img width="800px" height="500px" src='<?php echo $image_src;  ?>' >
 <?php
	require("footerY.php");
