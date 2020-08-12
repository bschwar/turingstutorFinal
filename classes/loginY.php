  <?php
  #make sure the user has the right info, then logs the user in with $_SESSION variables
	require_once("modelY.php");
	if(isset($_POST['action']) && $_POST['action'] == "Login"){
		$result=verifyUser($_POST['username'], $_POST['password']);
		if($result !== false){
			$_SESSION['Yname']= $result['username'];
			$_SESSION['Yuser'] = $result;
			$_SESSION['YloggedIn'] = true;
			$_SESSION['Yid'] = $result['id'];
			$_SESSION['Yteacher']= $result['teacher'];
						
			$_SESSION['name']= $result['username'];
			$_SESSION['user'] = $result;
			$_SESSION['loggedIn'] = true;
			$_SESSION['id'] = $result['id'];
			$_SESSION['teacher']= $result['teacher'];
			deleteScore($result['id']);
			$pages=listPages();
			while($row = $pages->fetch_assoc()){
				setup2( $_SESSION['id'] ,$row['id']);
			}
			header("Location: indexY.php"); 
			exit(0);
		}else{
			$error = "Username or Passwors Incorrect.";
		}
	}
	require("headerY.php");
 ?>
 <h1 id="center3">Sign in</h1>
	<?php
	if(isset($error)){
		echo "<div class='error'>$error</div>";
	}
	if(isset($message)){
		echo $message;
	}
	?>
	
	<form id="login3" method="post" action="">
		<input type="text" name="username" placeholder="Username"/>
		<input type="password" name="password" placeholder="Password"/>
		<div>
			<input type="submit" name="action" value="Login"/>
		</div>
	</form> 
 <?php 
	require("footerY.php");