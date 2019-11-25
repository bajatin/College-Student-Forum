<?php 
	if(!isset($_SESSION["fn"]))
		header("location:./login.php");
?>

<span style="text-align:right ; display:block; margin-bottom:5px;">
welcome<a href="aedit.php"><img src="../res/images/useri.jpg" class="imagedel" style="width:30px;height:30px;"><?php echo $_SESSION["fn"];?></a>, [ <a href="logout.php">log-out</a> ] 
</span>
<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>
<br/><br/><br/>