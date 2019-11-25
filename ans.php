<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<?php
$sql="SELECT * from  answer,question where answer.user_id=$_SESSION[uid] and answer.question_id=question.question_id order by answer.datetime desc";
$result=ExecuteQuery($sql);
           echo "<br><br>";
		while($row = mysql_fetch_array($result))
		{
			echo "<table class='u-full-width'>";
			echo "<tr><td>";
		echo "<span class='box2'>";	
		echo "<span class='head'><a href='questionview.php?qid=$row[question_id]'><h4>$row[heading]</h4></a></span>";
		echo "</span>";
		echo  "<br/>";
		
		
		
		echo $row['answer_detail'];
		echo  "<br/>";
		
		
		echo $row['datetime'];
		echo  "<br/>";
		echo "<div class=line></div>";
		echo "</td></tr>";
		}
	

?>
