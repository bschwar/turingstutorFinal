<?php
require_once("model.php");
	require("header.php");
	$count=0;
	#check for correct answers
	if(isset($_POST['q1']) && isset($_POST['q2'])&& isset($_POST['q3'])&& isset($_POST['q4'])&& isset($_POST['q5'])){
		if($_POST['q1']==1){
			$count++;
		}
		if($_POST['q2']==1){
			$count++;
		}
		if($_POST['q3']==1){
			$count++;
		}
		if($_POST['q4'] ==1){
			$count++;
		}
		if($_POST['q5'] == 1){
			$count++;
		}
		updateScore($_GET['id'], $count, $_SESSION['id']);
		#Change the flash, video, and article values based upon preformance
		if($count<4){
			if($_SESSION['type']=video){
				updateTutorF($_SESSION['id']);
				updateTutorA($_SESSION['id']);
			}
			else if($_SESSION['type']=flash){
				updateTutorV($_SESSION['id']);
				updateTutorA($_SESSION['id']);
			}else{
				updateTutorF($_SESSION['id']);
				updateTutorV($_SESSION['id']);
			}
			header("Location: tutor.php?id={$_GET['id']}"); 
			exit(0);
		}else{
		echo"type:$_SESSION[type]";
			if($_SESSION['type']== "video"){
				echo"video";
				globalUpdateV();
				updateTutorV($_SESSION['id']);
				updateTutorV($_SESSION['id']);
			}
			else if($_SESSION['type']== "flash"){
				echo"flash";
				globalUpdateF();
				updateTutorF($_SESSION['id']);
				updateTutorF($_SESSION['id']);
			}else{
				globalUpdateA();
				updateTutorA($_SESSION['id']);
				updateTutorA($_SESSION['id']);
			}
			header("Location: yay.php"); 
			exit(0);
		}
	}else if(isset($_POST['q1']) || isset($_POST['q2'])|| isset($_POST['q3'])|| isset($_POST['q4'])|| isset($_POST['q5'])) {
		$error = "please make sure you have filled in all fields";
		echo "<div class='error'>$error</div>";
	}else{
		
	}
?>
<h1>Post-test</h1>

<?php
	#retrieve one of the post-tests from the database
	if(isset($_GET['id'])){
		$page = getPage($_GET['id']);
		$data = $page -> fetch_assoc();
		$count = rand(0,2);
		echo"<p class='test'>";
		if($count == 0){
			echo $data['posttest'];
		}else if($count == 1){
			echo $data['postest2'];
		}else{
			echo $data['posttest3'];
		}
		echo "</p>";
	}

	require("footer.php");