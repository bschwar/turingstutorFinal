<?php
require_once("model.php");
	require("header.php");
	
	
?>
<h1 id="center4">Language</h1>

<?php
#Return all possible middles with the right type
	$str="Language";
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
		$pages=getPretest($_SESSION['id'], $str);
		while($row = $pages->fetch_assoc()){
			echo "<div id='admin'><br/><a href='middle.php?id={$row['id']}'>{$row['name']}</a><br/></br></div>";
		}
	}
	require("footer.php");
	
	
	