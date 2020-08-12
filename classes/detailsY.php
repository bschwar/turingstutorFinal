    <?php
    include("configY.php");
	require_once("modelY.php");
	require("headerY.php");
	$class=$_SESSION['Yclass'];
	$id=$_SESSION['Yid'];
	$assign=$_GET['name'];
    if(isset($_POST['up'])){
		echo"<a>'$class', '$id', '$assign'</a> ";
        updateAss( $_SESSION['Yclass'], $_SESSION['Yid'], $assign, $_POST['t']);
    }

	$pages=getAss($_SESSION['Yclass'], $_SESSION['Yid'], $_GET['name']);
	$name=$pages['name'];
	$date=$pages['Date'];
	$des=$pages['Description'];
	
	$score=$pages['score'];
	echo"<h1 id='center3'>Assignment: $name</h1>";
	if($score == -1){
		echo"<div id='center3'>Not Graded</div>";
	}else{
		echo"<div id='center3'>Score: $score%</div>";
	}
		echo"<h2 id='center3'>$date</h2>";
	echo"<p><span style='text-decoration:underline;'>Description:</span> $des</p>";


?>

<form method="POST" action="" >
        <input type='text' name='t' placholder= 'Share Link'/>
        <input type='submit' value='upload' name='up'>
        
    </form>
<?php
	require("footerY.php");
