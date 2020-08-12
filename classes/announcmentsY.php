<?php
require_once("modelY.php");
	require("headerY.php");
	if(isset($_POST['action']) && $_POST['action'] == "chat"){
	addAnow($_SESSION['Yname'], $_POST['chat'], $_SESSION['Yclass']);
	}
	
?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>	
<script type="text/javascript">
    window.onload = setupRefresh;
    function setupRefresh()
    {
        setInterval("refreshChat();",10);
    }
    
    function refreshChat()
    {
       $('#yea2').load("announcmentsY.php #yea2");
    }
  </script>
<h1 id="center3">Announcments</h1>
<div id="yea">
<div id="yea2">
<?php
$pages=listAnow($_SESSION['Yclass']);
		while($row = $pages->fetch_assoc()){
			if($_SESSION['Yname']==$row['name']){
				echo "<div id='chat2'><a>{$row['contents']}<br/><span style='float: right'>{$row['time']}</span></a></div>";
			}else{
				echo "<div id='chat'><a>{$row['contents']}<br/><span style='float: right'>{$row['time']}</span></a></div>";
			}
		}
?>
</div>
</div>
<?php
if(!(isset($_SESSION['Yteacher']))|| $_SESSION['Yteacher'] == NULL){

}else{
echo'<form id="login3" method="post" action="">
		<input type="text" name="chat" placeholder="What are you thinking?"/>
		<div>
			<input type="submit" name="action" value="chat"/>
		</div>
	</form>'; 
}
	require("footerY.php");
