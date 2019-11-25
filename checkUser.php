<?php 
	if(!isset($_SESSION["fn"]))
		header("location:index.php");
?>

<span style="text-align:right ;width:90%; display:block; margin-bottom:5px;">
	welcome <?php echo $_SESSION["fn"];?>,
	 <br/> <a href="logout.php">log-out</a> 
</span>

<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white;'/><br/><br/>
