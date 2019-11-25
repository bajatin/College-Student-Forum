<?php session_start();
 require("header.php");
 
 if ($_SESSION["fn"] == null){
 	header("location:unreg.php");
	exit();
 }
 
 require("checkUser.php");
 ?>
 
 <script type="text/javascript">
	document.getElementById("aforum").className="active";
</script>

<?php
	$topic = ExecuteQuery ("SELECT * FROM topic");
	echo "<br><br><br><br>";
	echo "<h2><b>Forum</b></h2>";
	while ($r1 = mysql_fetch_array($topic))
	{    echo "<table class='u-full-width'>";
		
			echo "<tr><td><h5><b>$r1[topic_name]</b></h5><br>";
		
			$stopic = ExecuteQuery ("SELECT * FROM subtopic WHERE topic_id=$r1[topic_id]");	
			
			while ($r2 = mysql_fetch_array ($stopic) )
			{
				
				echo "
						<a href='questions.php?id=$r2[subtopic_id]'> $r2[subtopic_name]</a>
						
					";
				echo "<br/>$r2[subtopic_description]<br/>";
				
			}
			echo "</td></tr>";}
	
	
?>

