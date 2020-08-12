<?php
	require_once("modelY.php");
	
	if(isset($_POST['action']) && $_POST['action'] == "Add Page"){
		$result=addPage($_POST['name'],$_SESSION['Yid']);
		setup( $_SESSION['Yid'] ,$result, $_POST['name']);
		$msg= "<div class='msg'>Page {$_POST['name']} was added. <a href='indexY.php'>Home</a></div>";
	}
	require("headerY.php");
?>
	<h1>Make Class</h1>
	<?php
	if(isset($msg)){
		echo $msg;
	}
	?>
	<form method="post" action="">
		<div>Name:</div>
		<input type="text" name="name"/><br/>
		<input type="submit" name="action" value="Add Page"/>
	</form>
<?php
require("footerY.php");