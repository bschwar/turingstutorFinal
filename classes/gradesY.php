<?php
require_once("modelY.php");
	require("headerY.php");
?>

<h1 id="center3">Graded Work</h1>
<?php
$pages=listAss($_SESSION['Yclass'], $_SESSION['Yid']);
echo'<table cellpadding="0"; cellspacing="0">
        <tr>
            <td width=300><div id="table2">Assignment</td>
            <td width=250><div id="table2">Score</td>
        </tr>';
		while($row = $pages->fetch_assoc()){
			$name=$row['name'];
			$date=$row['Date'];
			$des=$row['Description'];
		
			$score=$row['score'];
			if($score == -1){
		
			}else{
				echo"<tr>
            <td><div id='table2'>$name</td>
            <td><div id='table2'>$score%</td>
        </tr>";
			}
	
		}
		echo"</table>";
