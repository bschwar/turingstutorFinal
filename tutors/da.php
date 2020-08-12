<?php
require_once("model.php");
	require("header.php");
	
	
?>
<h1 id="center3">What will you learn today?</h1>

<?php
#show the button options depending on user type
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
			echo "<a id= 'buton2' href='math.php'><img src='math.png'/></a>";
			echo "<a id= 'buton' href='science.php'><img src='science.png'/></a>";
			echo "<a id= 'buton' href='ss.php'><img src='SS 2.png'/></a>";
			echo "<a id= 'buton2' href='language.php'><img src='lang.png'/></a>";
			echo "<a id= 'buton' href='programming.php'><img src='c2.png'/></a>";
	
	if(isset($_SESSION['teacher']) && $_SESSION['teacher'] != NULL){
		echo "<a id= 'buton' href='add.php'><img src='CClass.png'/></a>";
		$pages=getPretest($_SESSION['id'], $_SESSION['teacher']);
		while($row = $pages->fetch_assoc()){
			echo "<div id='adminblue'></br><a href='pretest.php?id={$row['id']}'>{$row['name']}</a></br></div>";
		}
		$pages=getTutor($_SESSION['id'], $_SESSION['teacher']);
		while($row = $pages->fetch_assoc()){
			echo "<div id='admingreen'></br><a href='tutor.php?id={$row['id']}'>{$row['name']}</a></br></div>";
		}
		
	
	}
	else{
		echo "<a id= 'buton' href='other.php'><img src='other.png'/></a>";
	}
	if(isset($_SESSION['class']) && $_SESSION['class'] != NULL){
		
		$pages=getPretest($_SESSION['id'], $_SESSION['class']);
		while($row = $pages->fetch_assoc()){
			echo "<div id='adminblue'></br><a href='pretest.php?id={$row['id']}'>{$row['name']}</a></br></br></div>";
		}
		$pages=getTutor($_SESSION['id'], $_SESSION['class']);
		while($row = $pages->fetch_assoc()){
			echo "<div id='admingreen'></br><a href='tutor.php?id={$row['id']}'>{$row['name']}</a></br></br></div>";
		}
	}
	}
			
	require("footer.php");
