  <?php
	require_once("model.php");
	#Set session to the class code given
	if(isset($_POST['action']) && $_POST['action'] == "Login"){
		$_SESSION['class']=$_POST['class'];
		header("Location: da.php"); 
		exit(0);
	}
	require("header.php");
 ?>
	<h1>Enter Class</h1>
	<form method="post" action="">
		<div>Teacher Code</div>
		<input type="text" name="class"/>
		<div>
			<input type="submit" name="action" value="Login"/>
		</div>
	</form> 
 <?php 
	require("footer.php");