<?php
require_once("model.php");
	require("header.php");
	if(isset($_SESSION['pretest'])){
	$count = $_SESSION['pretest'];
	#tell student how well they did
	echo "<h2> You got a $count/5. So let help you bring that up some!</h2>";
	}
	#Determine the method of tutorage and return a string of the name
	$test=selectTutor($_SESSION['id'],$_GET['id']);
	#return * from the current page
	$test2=selectTutor2($_GET['id']);
	$data = $test2 -> fetch_assoc();
	$_SESSION['type']= $test;
	#show the tutor method of the current page
	echo $data[$test];

#send user to post-test with the info on how they were taught
echo"<div id='admin'></br><a href='posttest.php?id={$_GET['id']}?type={$test}'>Move on</a></br></br></div>";

	require("footer.php");