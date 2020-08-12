<?php
require_once("model.php");
	require("header.php");
	
	
?>

<h1 id="center4" >Math</h1>
<script type="text/javascript" src="https://api.mesibo.com/mesibo.js"></script>
<script>
var api = new Mesibo();
api.setAppName("console");
api.setListener(new MesiboListener());
api.setCredentials(accessToken);
api.start();
</script>
<?php
#Return all possible middles with the right type
	$str="Math";
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
		$pages=getPretest($_SESSION['id'], $str);
		while($row = $pages->fetch_assoc()){
			echo "<div id='admin'><br/><a href='middle.php?id={$row['id']}'>{$row['name']}</a><br/><br/></div>";
		}
	}
	require("footer.php");
	
	
	