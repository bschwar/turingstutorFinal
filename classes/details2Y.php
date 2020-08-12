    <?php
    include("configY.php");
	require_once("modelY.php");
	require("headerY.php");
	$class=$_SESSION['Yclass'];
	$id=$_SESSION['Yid'];
	$assign=$_GET['name'];
    if(isset($_POST['action']) && $_POST['action'] == "Update_Score"){
	updateScore($_SESSION['Yclass'], $_GET['id'], $_GET['name'], $_POST['score']);
		echo"<div class='msg'>Score Updated <a href='grade2Y.php'>Turned in Work</a></div>";
	}
	$pages=getAss($_SESSION['Yclass'], $_GET['id'], $_GET['name']);
	$name=$pages['name'];
	$date=$pages['Date'];
	$des=$pages['Description'];
	$file=$pages['file'];
	$score=$pages['score'];
	
	echo"<h1 id='center2'>Assignment: $name</h1>";
	if($score == -1){
		echo"<div id='center3'>Not Graded</div>";
	}else{
		echo"<div id='center3'>Score: $score%</div>";
	}
		echo"<h2 id='center4'>$date</h2>";

echo "<div id='admin'><a href='$file'>assignment</a></div>";	
?>

   
  <form id="login3" method="post" action="">
		<input type="text" name="score" placeholder="Score"/>
		<div>
			<input type="submit" name="action" value="Update_Score"/>
		</div>
	</form> 
<?php
	require("footerY.php");
