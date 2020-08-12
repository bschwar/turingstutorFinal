
<style>
body{
	background-color: #474350;
}
.container {
	display: float;
	float:right;
  position: relative;
  width: 49%;

overflow: hidden;
background: rgba(0, 0, 0, 0.8);
border: solid white 5px;
	
}

	.logo{
		margin-right: auto;
		margin-left:auto;
		text-align:center;
		
		
	}	
	.logo2{
		width: 35%;
		
	}	
	
	
.image {
  opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
	
	overflow: hidden;
opacity: 0.3;

}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
	opacity: 1;
	transform: scale(1.1);
	
}


.container:hover{
background: rgba(0, 0, 0, 0.8);
}

</style>

<body>
	<div class="logo">
<img class="logo2" src="classes/ttlogo6fin3.png">
</div>
<div class="container">
  <a href="classes/indexY.php"><img  src="classes/logologo.png"  class="image" style="width:100%"><a/>
</div>
<div class="container">
  <a href="tutors/da.php"><img src="classes/logologo.png"  class="image" style="width:100%"><a/>
</div>

  
</body>
</html>