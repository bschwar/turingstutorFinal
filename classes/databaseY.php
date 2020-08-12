    <?php
    include("configY.php");
	require_once("modelY.php");
	require("headerY.php");
	$class=$_SESSION['Yclass'];
	$id=$_SESSION['Yid'];

    if(isset($_POST['but_upload'])){
		$type=$_POST['type'];
        $image=$_POST['t'];
		$name=$_POST['name'];

            // Insert record
            $query = "insert into teacher(class_id,type,file,filename) values('".$class."','".$type."','".$image."','".$name."')";
			
            mysqli_query($con,$query) or die(mysqli_error($con));
            
            

        }
    
    
	echo'<h1 id="center3">Database</h1>';
	$pages=listData($_SESSION['Yclass']);
		$type=-1;
		while($row = $pages->fetch_assoc()){
			if($row['type'] != $type){
				$type=$row['type'];
				echo"<h2>UNIT: $type<h2/>";
			}
				$name=$row['filename'];
				$url=$row['file'];
				echo "<div id='admin'><a href='$url'>$name</a></div>";
		}
	
	if(!(isset($_SESSION['Yteacher']))|| $_SESSION['Yteacher'] == NULL){
		
	}else{
?>
    <form method="post" action="" enctype='multipart/form-data' style='text-align:center'>
		<input type='text' name='type' placeholder='Unit' />
		<input type='text' name='name' placeholder='Name' />
        <input type='text' name='t' placeholder='Share Link'/><br/>
        <input type='submit' value='Upload file' name='but_upload'>
        
    </form>
<?php
	}
	require("footerY.php");
