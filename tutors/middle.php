<?php
require_once("model.php");
	require("header.php");
	
	
?>

<?php
	if(isset($_GET['id'])){
		$page = getPage($_GET['id']);
		$data = $page -> fetch_assoc();
		$str = $data['name'];
	}
	echo "<h1 id='center4'>$str</h1>";
	#Return all possible pretests with the right type
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
		$pages=getPretest($_SESSION['id'], $str);
		while($row = $pages->fetch_assoc()){
			echo "<div id='admin'><br/><a href='pretest.php?id={$row['id']}'>{$row['name']}</a><br/><br/></div>";
		}
	}
	#Return all possible tutor pages with the right type
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
		$pages=getTutor($_SESSION['id'], $str);
		while($row = $pages->fetch_assoc()){
			echo "<div id='adminblue'><br/><a href='tutor.php?id={$row['id']}'>{$row['name']}</a><br/><br/></div>";
		}
	}
	require("footer.php");