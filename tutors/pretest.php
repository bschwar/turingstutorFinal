<?php
require_once("model.php");
	require("header.php");
	$count=0;
	#check how many are correct
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
		$_SESSION['pretest']=$count;
		updateScore($_GET['id'], $count, $_SESSION['id']);
		#Direct based upon susscesfulness of test
		if($count<4){
			header("Location: tutor.php?id={$_GET['id']}"); 
			exit(0);
		}else{
			header("Location: yay.php"); 
			exit(0);
		}
	}else if(isset($_POST['q1']) || isset($_POST['q2'])|| isset($_POST['q3'])|| isset($_POST['q4'])|| isset($_POST['q5'])) {
		$error = "please make sure you have filled in all fields";
		echo "<div class='error'>$error</div>";
	}else{
		
	}
?>
<h1>Pretest</h1>

<?php
	#return pretest from database
	if(isset($_GET['id'])){
		$page = getPage($_GET['id']);
		$data = $page -> fetch_assoc();
		echo"<p class='test'>";
		echo $data['contents'];
		echo"</p>";
	}
		
	require("footer.php");