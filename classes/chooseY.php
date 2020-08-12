<?php
require_once("modelY.php");
	require("header2Y.php");
	
	if(!isset($_GET['count'])){
		$count=0;
	}
	else{
		$count=$_GET['count'];
		if($count == 21){
			header("Location: indexgY.php");
			exit(0);
		}
	}
	if(isset($_GET['ans'])&&($_GET['ans']==1)){
		$count+=1;
	}else{
		header("Location: choose1Y.php?count=$count");
		exit(0);
	}
	
?>
<a href="indexgY.php"><img id="center4" src="logologo.png"/></a>
<?php
$pages=listCho($count);
$row = $pages->fetch_assoc();
$img=$row['filename'];
	echo"
	<div id='choose1'>
	<img id='scene' src='$img'/></a>
	<div id='choose2'>
	</br>";
	$pages=listCho($count);
		while($row = $pages->fetch_assoc()){
			$ans=$row['ans'];
			$name=$row['name'];
			echo "<span id='choose'><a href='chooseY.php?ans=$ans&count=$count'>$name</a></span>";
		}

echo"
</div>
</div>";
	
	require("footerY.php");
