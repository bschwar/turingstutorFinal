<?php
session_start();

$connection = new mysqli("localhost:3306","turings1","9jVY4Wn$(5dFWiP","turings1_data");
if($connection->connect_error){
	die("Failed to connect to database");
}
function listPages(){
	global $connection;
	$sql = "SELECT id, name FROM pages";
	$statement = $connection->prepare($sql);
	$statement->execute();
	$result = $statement->get_result();
	return $result;	
}
function getTutorInfo(){
	global $connection;
	$sql = "SELECT * FROM users WHERE id=1";
	$statement = $connection->prepare($sql);
	$statement->execute();
	$result = $statement->get_result();
	return $result;
}
function getPages($teacher){
	global $connection;
	$sql = "SELECT * FROM pages WHERE type=?";
	$statement = $connection->prepare($sql);
	$statement->bind_param("s", $teacher);
	$statement->execute();
	$result = $statement->get_result();
	return $result;	
}
function getPages2($teacher){
	global $connection;
	$sql = "SELECT * FROM pages WHERE name=?";
	$statement = $connection->prepare($sql);
	$statement->bind_param("s", $teacher);
	$statement->execute();
	$result = $statement->get_result();
	return $result;	
}
function setup($userid, $pageid){
	global $connection;
	$sql = "INSERT INTO scores(user_id, page_id) VALUES(?,?)";
	$statement = $connection->prepare($sql);
	$statement->bind_param("ii", $userid, $pageid);
	$statement->execute();
}
function selectTutor($iduser, $idpage){
	global $connection;
	$sql = "SELECT flash, video, article FROM users WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement->bind_param("i", $iduser);
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	$test = ($row['flash']+$row['video']+$row['article']);
	$num = rand(0,$test);
	if($num < $row['flash']){
		$str = "flash";
	}
	else if($num > $row['flash'] + $row['video']){
		$str = "article";
	}
	else{
		$str = "video";
	}
	return $str;
}
function selectTutor2($idpage){
	global $connection;
	$sql = "SELECT * FROM pages WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement->bind_param("i",$idpage);
	$statement->execute();
	$result = $statement->get_result();
	return $result;	
}
function updateTutorV($iduser){
	global $connection;
	$sql = "SELECT * FROM users WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement->bind_param("i",$iduser);
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	$test = $row['video'];
	$test = 1 + $test;
	$sql="UPDATE users set video = ? WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("ii", $test, $iduser);
	$statement->execute();
}
function updateTutorF($iduser){
	global $connection;
	$sql = "SELECT * FROM users WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement->bind_param("i",$iduser);
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	$test = $row['flash'];
	$test = 1 + $test;
	$sql="UPDATE users set flash = ? WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("ii", $test, $iduser);
	$statement->execute();
}
function updateTutorA($iduser){
	global $connection;
	$sql = "SELECT * FROM users WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement->bind_param("i",$iduser);
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	$test = $row['article'];
	$test = 1 + $test;
	$sql="UPDATE users set article = ? WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("ii", $test, $iduser);
	$statement->execute();
}
function globalUpdateA(){
	global $connection;
	$sql = "SELECT * FROM users WHERE id=1";
	$statement = $connection->prepare($sql);
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	$test = $row['article'];
	$test = 1 + $test;
	$sql="UPDATE users set article = ? WHERE id=1";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("i", $test);
	$statement->execute();
}
function globalUpdateF(){
	global $connection;
	$sql = "SELECT * FROM users WHERE id=1";
	$statement = $connection->prepare($sql);
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	$test = $row['flash'];
	$test = 1 + $test;
	$sql="UPDATE users set flash = ? WHERE id=1";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("i", $test);
	$statement->execute();
}
function globalUpdateV(){
	global $connection;
	$sql = "SELECT * FROM users WHERE id=1";
	$statement = $connection->prepare($sql);
	$statement->execute();
	$result = $statement->get_result();
	$row = $result->fetch_assoc();
	$test = $row['video'];
	$test = 1 + $test;
	$sql="UPDATE users set video = ? WHERE id=1";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("i", $test);
	$statement->execute();
}
function getPretest($id, $str){
	global $connection;
	$sql="Select pages.id,name FROM pages LEFT JOIN scores ON pages.id=scores.page_id LEFT JOIN users ON scores.user_id=users.id WHERE users.id=? AND( scores.score = -1) AND type=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("is",$id, $str);
	$statement->execute();
	$result = $statement->get_result();
	return $result;
}
function getTutor($id, $str){
	global $connection;
	$sql="Select pages.id,name FROM pages LEFT JOIN scores ON pages.id=scores.page_id LEFT JOIN users ON scores.user_id=users.id WHERE users.id=? AND( scores.score < 4 AND scores.score >-1) AND type=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("is",$id, $str);
	$statement->execute();
	$result = $statement->get_result();
	return $result;
}
function getPretest2($id, $str){
	global $connection;
	$sql="Select pages.id,name FROM pages LEFT JOIN scores ON pages.id=scores.page_id LEFT JOIN users ON scores.user_id=users.id WHERE users.id=? AND( scores.score = -1) AND pages.name=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("is",$id, $str);
	$statement->execute();
	$result = $statement->get_result();
	return $result;
}
function getTutor2($id, $str){
	global $connection;
	$sql="Select pages.id,name FROM pages LEFT JOIN scores ON pages.id=scores.page_id LEFT JOIN users ON scores.user_id=users.id WHERE users.id=? AND( scores.score < 4 AND scores.score >-1) AND pages.name=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("is",$id, $str);
	$statement->execute();
	$result = $statement->get_result();
	return $result;
}
function getPage($id){
	global $connection;
	$sql="Select * FROM pages WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("i",$id);
	$statement->execute();
	$result = $statement->get_result();
	return $result;
}
function addUser($user, $flash, $video, $article){
	global $connection;
	$sql = "INSERT INTO users(username, password, firstName, lastName, flash, video, article, teacher) VALUES(?,?,?,?,?,?,?,?)";
	$statement = $connection->prepare($sql);
	$statement->bind_param("ssssiiis", $username, $password, $first, $last, $flash, $video, $article, $teacher);
	$username = $user['username'];
	$password = password_hash($user['password'], PASSWORD_DEFAULT);
	$first = $user['firstName'];
	$last = $user['lastName'];
	$teacher = $user['teacher'];
	$statement->execute();
	
	if($connection->errno != 0){
		return null;
	}
	
	return $connection->insert_id;
}
function addUser2($user, $flash, $video, $article){
	global $connection;
	$sql = "INSERT INTO users(username, password, firstName, lastName, flash, video, article) VALUES(?,?,?,?,?,?,?)";
	$statement = $connection->prepare($sql);
	$statement->bind_param("ssssiii", $username, $password, $first, $last, $flash, $video, $article);
	$username = $user['username'];
	$password = password_hash($user['password'], PASSWORD_DEFAULT);
	$first = $user['firstName'];
	$last = $user['lastName'];
	$statement->execute();
	
	if($connection->errno != 0){
		return null;
	}
	
	return $connection->insert_id;
}
function addPage($name, $pretest, $flash, $article, $video, $posttest, $posttest2, $posttest3, $teacher){
	global $connection;
	$sql = "INSERT INTO pages (id, name, contents, article, video, flash, posttest, postest2, posttest3, type) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("sssssssss", $name, $pretest, $article, $video, $flash, $posttest, $posttest2, $posttest3, $teacher);
	$statement->execute();
	return $connection->insert_id;
}
function editPage($id, $name, $contents){
	global $connection;
	$sql="UPDATE pages set name=?, contents=? WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("ssi",$name,$contents, $id);
	$statement->execute();
}
function deletePage($id){
	global $connection;
	$sql = "DELETE FROM pages WHERE id=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("i", $id);
	$statement->execute();
}
function deleteScore($id){
	global $connection;
	$sql = "DELETE FROM scores WHERE user_id=? AND score=-1";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("i", $id);
	$statement->execute();
}
function updateScore($idpage, $score, $id){
	global $connection;
	$sql="UPDATE scores set score=? WHERE user_id=? AND page_id=?";
	$statement = $connection->prepare($sql);
	$statement ->bind_param("iii", $score, $id, $idpage);
	$statement->execute();
}
function verifyUser($username, $password){
	global $connection;
	$sql = "SELECT id, firstName, lastName, password, pretest, teacher FROM users WHERE username=?";
	$statement = $connection->prepare($sql);
	$statement->bind_param("s", $username);
	$statement->execute();
	$result = $statement->get_result();
	if($result->num_rows == 0){
		return false;
	}
	$row = $result->fetch_assoc();
	if(password_verify($password, $row['password'])){
		return $row;
	}
	return false;
}


