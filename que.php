<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
	echo "<h4>My Questions<img src='res/images/askq.jpg'  style='widht:30px;height:30px' class='imagedel'/></h4>";
?>
<?php

$sql="SELECT * from question where user_id=$_SESSION[uid]";
$result=ExecuteQuery($sql);
	
		while($row = mysql_fetch_array($result))
		{
		
		echo "<table>";
		// echo "<span class='box2'>";
		echo "<tr><td>";
		echo "<span class='head'><a href='questionview.php?qid=$row[question_id]'><h4>$row[heading]</h4></a></span>";
		// echo "</span>";
		echo  "<br/>";
		
		echo $row['question_detail'];
		echo  "<br/>";
		
				echo $row['datetime'];
		echo "</tr></td>";
		echo "<div class='line'></div>";
				

		}

?>
