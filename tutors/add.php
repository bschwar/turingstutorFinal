<?php
	require_once("model.php");
	
	
	
	if(isset($_POST['action']) && $_POST['action'] == "Add Page"){
		#get post data
		$test=rand(0,5);
		$q1 = $_POST['q1'];
		$q1a = $_POST['q1a'];
		$q1w1 = $_POST['q1w1'];
		$q1w2 = $_POST['q1w2'];
		$q2 = $_POST['q2'];
		$q2a = $_POST['q2a'];
		$q2w1 = $_POST['q2w1'];
		$q2w2 = $_POST['q2w2'];
		$q3 = $_POST['q3'];
		$q3a = $_POST['q3a'];
		$q3w1 = $_POST['q3w1'];
		$q3w2 = $_POST['q3w2'];
		$q4 = $_POST['q4'];
		$q4a = $_POST['q4a'];
		$q4w1 = $_POST['q4w1'];
		$q4w2 = $_POST['q4w2'];
		$q5 = $_POST['q5'];
		$q5a = $_POST['q5a'];
		$q5w1 = $_POST['q5w1'];
		$q5w2 = $_POST['q5w2'];
		$q1p = $_POST['q1p'];
		$q1ap = $_POST['q1ap'];
		$q1w1p = $_POST['q1w1p'];
		$q1w2p = $_POST['q1w2p'];
		$q2p = $_POST['q2p'];
		$q2ap = $_POST['q2ap'];
		$q2w1p = $_POST['q2w1p'];
		$q2w2p = $_POST['q2w2p'];
		$q3p = $_POST['q3p'];
		$q3ap = $_POST['q3ap'];
		$q3w1p = $_POST['q3w1p'];
		$q3w2p = $_POST['q3w2p'];
		$q4p = $_POST['q4p'];
		$q4ap = $_POST['q4ap'];
		$q4w1p = $_POST['q4w1p'];
		$q4w2p = $_POST['q4w2p'];
		$q5p = $_POST['q5p'];
		$q5ap = $_POST['q5ap'];
		$q5w1p = $_POST['q5w1p'];
		$q5w2p = $_POST['q5w2p'];
		$q1p2 = $_POST['q1p2'];
		$q1ap2 = $_POST['q1ap2'];
		$q1w1p2 = $_POST['q1w1p2'];
		$q1w2p2 = $_POST['q1w2p2'];
		$q2p2 = $_POST['q2p2'];
		$q2ap2 = $_POST['q2ap2'];
		$q2w1p2 = $_POST['q2w1p2'];
		$q2w2p2 = $_POST['q2w2p2'];
		$q3p2 = $_POST['q3p2'];
		$q3ap2 = $_POST['q3ap2'];
		$q3w1p2 = $_POST['q3w1p2'];
		$q3w2p2 = $_POST['q3w2p2'];
		$q4p2 = $_POST['q4p2'];
		$q4ap2 = $_POST['q4ap2'];
		$q4w1p2 = $_POST['q4w1p2'];
		$q4w2p2 = $_POST['q4w2p2'];
		$q5p2 = $_POST['q5p2'];
		$q5ap2 = $_POST['q5ap2'];
		$q5w1p2 = $_POST['q5w1p2'];
		$q5w2p2 = $_POST['q5w2p2'];
		$q1p3 = $_POST['q1p3'];
		$q1ap3 = $_POST['q1ap3'];
		$q1w1p3 = $_POST['q1w1p3'];
		$q1w2p3 = $_POST['q1w2p3'];
		$q2p3 = $_POST['q2p3'];
		$q2ap3 = $_POST['q2ap3'];
		$q2w1p3 = $_POST['q2w1p3'];
		$q2w2p3 = $_POST['q2w2p3'];
		$q3p3 = $_POST['q3p3'];
		$q3ap3 = $_POST['q3ap3'];
		$q3w1p3 = $_POST['q3w1p3'];
		$q3w2p3 = $_POST['q3w2p3'];
		$q4p3 = $_POST['q4p3'];
		$q4ap3 = $_POST['q4ap3'];
		$q4w1p3 = $_POST['q4w1p3'];
		$q4w2p3 = $_POST['q4w2p3'];
		$q5p3 = $_POST['q5p3'];
		$q5ap3 = $_POST['q5ap3'];
		$q5w1p3 = $_POST['q5w1p3'];
		$q5w2p3 = $_POST['q5w2p3'];
		#To make the answers different for the different tests, make them randomly selected
		$num=rand(0,5);
		if($num=0){
			$pretest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1 </p>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1a</label><br>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2a</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3a</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4 </p>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4a</label><br>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5a</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=1){
			$pretest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1 </p>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1a</label><br>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2 </p>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2a</label><br>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3a</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4a</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5a</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=2){
			$pretest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1a</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2a</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3 </p>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3a</label><br>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4 </p>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4a</label><br>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5a</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=3){
			$pretest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1a</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2a</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3a</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4a</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5 </p>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5a</label><br>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=4){
			$pretest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1a</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2a</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3 </p>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3a</label><br>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4a</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5 </p>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5a</label><br>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else{
			$pretest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1a</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2 </p>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2a</label><br>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3a</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4a</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5a</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}
		if($num=0){
			$posttest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p </p>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap</label><br>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=1){
			$posttest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p </p>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap</label><br>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=2){
		$posttest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p </p>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap</label><br>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p </p>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap</label><br>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
		}else if($num=3){
			$posttest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p </p>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap</label><br>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p </p>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap</label><br>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
		}else if($num=4){
			$posttest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p </p>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap</label><br>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p </p>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap</label><br>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else{
			$posttest= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p </p>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap</label><br>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p </p>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap</label><br>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
		}
$num=rand(0,5);
if($num=0){
			$posttest2= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p2 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p2</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p2</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p2 </p>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap2</label><br>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p2</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p2 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p2</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p2</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p2 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p2</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p2</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p2 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p2</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap2</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=4){
			$posttest2= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p2 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p2</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p2</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p2 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p2</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap2</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p2 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p2</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap2</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p2 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p2</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap2</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p2 </p>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap2</label><br>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p2</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=3){
		$posttest2= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p2 </p>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap2</label><br>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p2</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p2 </p>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap2</label><br>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p2</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p2 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p2</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap2</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p2 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p2</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap2</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p2 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p2</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p2</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
		}else if($num=2){
			$posttest2= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p2 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p2</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap2</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p2 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p2</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p2</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p2 </p>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap2</label><br>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p2</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p2 </p>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap2</label><br>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p2</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p2 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p2</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap2</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
		}else if($num=1){
			$posttest2= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p2 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p2</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap2</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p2 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p2</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p2</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p2 </p>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap2</label><br>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p2</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p2 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p2</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p2</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p2 </p>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap2</label><br>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p2</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else{
			$posttest2= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p2 </p>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap2</label><br>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p2</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p2</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p2 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p2</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap2</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p2</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p2 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p2</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p2</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap2</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p2 </p>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap2</label><br>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p2</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p2</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p2 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p2</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p2</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap2</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
}
$num=rand(0,5);
if($num=5){
			$posttest3= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p3 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p3</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p3</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap3</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p3 </p>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap3</label><br>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p3</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p3</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p3 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p3</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p3</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap3</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p3 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p3</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap3</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p3</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p3 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p3</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap3</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p3</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=4){
			$posttest3= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p3 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p3</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p3</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap3</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p3 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p3</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap3</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p3</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p3 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p3</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap3</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p3</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p3 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p3</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p3</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap3</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p3 </p>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap3</label><br>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p3</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p3</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else if($num=3){
		$posttest3= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p3 </p>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap3</label><br>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p3</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p3</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p3 </p>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap3</label><br>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p3</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p3</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p3 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p3</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap3</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p3</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p3 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p3</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p3</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap3</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p3 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p3</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p3</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap3</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
		}else if($num=2){
			$posttest3= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p3 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p3</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap3</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p3</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p3 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p3</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p3</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap3</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p3 </p>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap3</label><br>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p3</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p3</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p3 </p>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap3</label><br>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p3</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p3</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p3 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p3</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap3</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p3</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
		}else if($num=1){
			$posttest3= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p3 </p>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p3</label><br>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap3</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p3</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p3 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p3</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p3</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap3</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p3 </p>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap3</label><br>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p3</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p3</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p3 </p>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p3</label><br>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap3</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p3</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p3 </p>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap3</label><br>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p3</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p3</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>";
		}else{
			$posttest3= "<form method='post' action=''>
	<fieldset id='q1'>
	<p> $q1p3 </p>
	<input type='radio' id='4' name='q1' value='1'>
	<label for='4'>$q1ap3</label><br>
	<input type='radio' id='6' name='q1' value='2'>
	<label for='6'>$q1w1p3</label><br>
	<input type='radio' id='5'name='q1' value='3'>
	<label for='5'>$q1w2p3</label><br>
	</fieldset>
	<fieldset id='q2'>
	<p> $q2p3 </p>
	<input type='radio' id='14' name='q2' value='2'>
	<label for='14'>$q2w1p3</label><br>
	<input type='radio' id='18' name='q2' value='1'>
	<label for='18'>$q2ap3</label><br>
	<input type='radio' id='20' name='q2' value='3'>
	<label for='20'>$q2w2p3</label><br>
	</fieldset>
	<fieldset id='q3'>
	<p> $q3p3 </p>
	<input type='radio' id='14' name='q3' value='3'>
	<label for='14'>$q3w1p3</label><br>
	<input type='radio' id='18' name='q3' value='2'>
	<label for='18'>$q3w2p3</label><br>
	<input type='radio' id='20' name='q3' value='1'>
	<label for='20'>$q3ap3</label><br>
	</fieldset>
	<fieldset id='q4'>
	<p> $q4p3 </p>
	<input type='radio' id='14' name='q4' value='1'>
	<label for='14'>$q4ap3</label><br>
	<input type='radio' id='18' name='q4' value='2'>
	<label for='18'>$q4w2p3</label><br>
	<input type='radio' id='20' name='q4' value='3'>
	<label for='20'>$q4w1p3</label><br>
	</fieldset>
	<fieldset id='q5'>
	<p> $q5p3 </p>
	<input type='radio' id='14' name='q5' value='3'>
	<label for='14'>$q5w1p3</label><br>
	<input type='radio' id='18' name='q5' value='2'>
	<label for='18'>$q5w2p3</label><br>
	<input type='radio' id='20' name='q5' value='1'>
	<label for='20'>$q5ap3</label><br>
	</fieldset>
	<div>
		<input type='submit' name='action' value='submit'/>
	</div>
</form>"
			;
	}	#create the new page in the directory
		$video = $_POST['video'];
		$flash= $_POST['flash'];
		$article= $_POST['article'];
		$article2= "<iframe width='100%' height='800px' src='$article'></iframe>";
		$result=addPage($_POST['name'],$pretest, $flash, $article2, $video, $posttest, $posttest2, $posttest3, $_SESSION['teacher']);
		setup( $_SESSION['id'] ,$result);
		$msg= "<div class='msg'>Page {$_POST['name']} was added. <a href='da.php'>Home</a></div>";
	}
	require("header.php");
?>
	<h1>Add Page</h1>
	<?php
	if(isset($msg)){
		echo $msg;
	}
	?>
	<form method="post" action="">
		<div>Name:</div>
		<input type="text" name="name"/><br/>
		<h2>Pre-test</h2>
		<div>Question 1</div>
		<input type="text" name="q1"/><br/>
		<div>Question 1 Answer</div>
		<input type="text" name="q1a"/><br/>
		<div>Question 1 Wrong</div>
		<input type="text" name="q1w1"/><br/>
		<div>Question 1 Wrong</div>
		<input type="text" name="q1w2"/><br/>
		<div>Question 2</div>
		<input type="text" name="q2"/><br/>
		<div>Question 2 Answer</div>
		<input type="text" name="q2a"/><br/>
		<div>Question 2 Wrong</div>
		<input type="text" name="q2w1"/><br/>
		<div>Question 2 Wrong</div>
		<input type="text" name="q2w2"/><br/>
		<div>Question 3</div>
		<input type="text" name="q3"/><br/>
		<div>Question 3 Answer</div>
		<input type="text" name="q3a"/><br/>
		<div>Question 3 Wrong</div>
		<input type="text" name="q3w1"/><br/>
		<div>Question 3 Wrong</div>
		<input type="text" name="q3w2"/><br/>
		<div>Question 4</div>
		<input type="text" name="q4"/><br/>
		<div>Question 4 Answer</div>
		<input type="text" name="q4a"/><br/>
		<div>Question 4 Wrong</div>
		<input type="text" name="q4w1"/><br/>
		<div>Question 4 Wrong</div>
		<input type="text" name="q4w2"/><br/>
		<div>Question 5</div>
		<input type="text" name="q5"/><br/>
		<div>Question 5 Answer</div>
		<input type="text" name="q5a"/><br/>
		<div>Question 5 Wrong</div>
		<input type="text" name="q5w1"/><br/>
		<div>Question 5 Wrong</div>
		<input type="text" name="q5w2"/><br/>
		<h2>Tutor</h2>
		<div>Embed Code for Flashcards</div>
		<input type="text" name="flash"/><br/>
		<div>Embed Code for Video</div>
		<input type="text" name="video"/><br/>
		<div>URL for Article</div>
		<input type="text" name="article"/><br/>
		<h2>Post-test</h2>
		<div>Question 1 </div>
		<input type="text" name="q1p"/><br/>
		<div>Question 1 Answer</div>
		<input type="text" name="q1ap"/><br/>
		<div>Question 1 Wrong</div>
		<input type="text" name="q1w1p"/><br/>
		<div>Question 1 Wrong</div>
		<input type="text" name="q1w2p"/><br/>
		<div>Question 2</div>
		<input type="text" name="q2p"/><br/>
		<div>Question 2 Answer</div>
		<input type="text" name="q2ap"/><br/>
		<div>Question 2 Wrong</div>
		<input type="text" name="q2w1p"/><br/>
		<div>Question 2 Wrong</div>
		<input type="text" name="q2w2p"/><br/>
		<div>Question 3</div>
		<input type="text" name="q3p"/><br/>
		<div>Question 3 Answer</div>
		<input type="text" name="q3ap"/><br/>
		<div>Question 3 Wrong</div>
		<input type="text" name="q3w1p"/><br/>
		<div>Question 3 Wrong</div>
		<input type="text" name="q3w2p"/><br/>
		<div>Question 4</div>
		<input type="text" name="q4p"/><br/>
		<div>Question 4 Answer</div>
		<input type="text" name="q4ap"/><br/>
		<div>Question 4 Wrong</div>
		<input type="text" name="q4w1p"/><br/>
		<div>Question 4 Wrong</div>
		<input type="text" name="q4w2p"/><br/>
		<div>Question 5</div>
		<input type="text" name="q5p"/><br/>
		<div>Question 5 Answer</div>
		<input type="text" name="q5ap"/><br/>
		<div>Question 5 Wrong</div>
		<input type="text" name="q5w1p"/><br/>
		<div>Question 5 Wrong</div>
		<input type="text" name="q5w2p"/><br/>
		<h2>Post-test 2</h2>
		<div>Question 1 </div>
		<input type="text" name="q1p2"/><br/>
		<div>Question 1 Answer</div>
		<input type="text" name="q1ap2"/><br/>
		<div>Question 1 Wrong</div>
		<input type="text" name="q1w1p2"/><br/>
		<div>Question 1 Wrong</div>
		<input type="text" name="q1w2p2"/><br/>
		<div>Question 2</div>
		<input type="text" name="q2p2"/><br/>
		<div>Question 2 Answer</div>
		<input type="text" name="q2ap2"/><br/>
		<div>Question 2 Wrong</div>
		<input type="text" name="q2w1p2"/><br/>
		<div>Question 2 Wrong</div>
		<input type="text" name="q2w2p2"/><br/>
		<div>Question 3</div>
		<input type="text" name="q3p2"/><br/>
		<div>Question 3 Answer</div>
		<input type="text" name="q3ap2"/><br/>
		<div>Question 3 Wrong</div>
		<input type="text" name="q3w1p2"/><br/>
		<div>Question 3 Wrong</div>
		<input type="text" name="q3w2p2"/><br/>
		<div>Question 4</div>
		<input type="text" name="q4p2"/><br/>
		<div>Question 4 Answer</div>
		<input type="text" name="q4ap2"/><br/>
		<div>Question 4 Wrong</div>
		<input type="text" name="q4w1p2"/><br/>
		<div>Question 4 Wrong</div>
		<input type="text" name="q4w2p2"/><br/>
		<div>Question 5</div>
		<input type="text" name="q5p2"/><br/>
		<div>Question 5 Answer</div>
		<input type="text" name="q5ap2"/><br/>
		<div>Question 5 Wrong</div>
		<input type="text" name="q5w1p2"/><br/>
		<div>Question 5 Wrong</div>
		<input type="text" name="q5w2p2"/><br/>
		<h2>Post-test 3</h2>
		<div>Question 1 </div>
		<input type="text" name="q1p3"/><br/>
		<div>Question 1 Answer</div>
		<input type="text" name="q1ap3"/><br/>
		<div>Question 1 Wrong</div>
		<input type="text" name="q1w1p3"/><br/>
		<div>Question 1 Wrong</div>
		<input type="text" name="q1w2p3"/><br/>
		<div>Question 2</div>
		<input type="text" name="q2p3"/><br/>
		<div>Question 2 Answer</div>
		<input type="text" name="q2ap3"/><br/>
		<div>Question 2 Wrong</div>
		<input type="text" name="q2w1p3"/><br/>
		<div>Question 2 Wrong</div>
		<input type="text" name="q2w2p3"/><br/>
		<div>Question 3</div>
		<input type="text" name="q3p3"/><br/>
		<div>Question 3 Answer</div>
		<input type="text" name="q3ap3"/><br/>
		<div>Question 3 Wrong</div>
		<input type="text" name="q3w1p3"/><br/>
		<div>Question 3 Wrong</div>
		<input type="text" name="q3w2p3"/><br/>
		<div>Question 4</div>
		<input type="text" name="q4p3"/><br/>
		<div>Question 4 Answer</div>
		<input type="text" name="q4ap3"/><br/>
		<div>Question 4 Wrong</div>
		<input type="text" name="q4w1p3"/><br/>
		<div>Question 4 Wrong</div>
		<input type="text" name="q4w2p3"/><br/>
		<div>Question 5</div>
		<input type="text" name="q5p3"/><br/>
		<div>Question 5 Answer</div>
		<input type="text" name="q5ap3"/><br/>
		<div>Question 5 Wrong</div>
		<input type="text" name="q5w1p3"/><br/>
		<div>Question 5 Wrong</div>
		<input type="text" name="q5w2p3"/><br/>
		<input type="submit" name="action" value="Add Page"/>
	</form>
<?php
require("footer.php");