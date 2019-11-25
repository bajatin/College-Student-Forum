<?php session_start();
	require("header.php");
	require("checkUser.php");
	
	$id=$_GET["id"];
?>
<br/>
<a href="question.php?stid=<?php echo $id ?>"><h5>Ask Question<img src="res/images/askq.jpg"  style='width:25px;height:25px;' class='imagedel'/></a></h5>
<hr />
<?php 
	
	$str="SELECT * FROM question, user WHERE question.user_id=user.user_id and subtopic_id=$id";
	$result=ExecuteQuery($str);
	
	$no_rows = mysql_num_rows($result);
	
	if ($no_rows > 0)
	{
		while($row = mysql_fetch_array($result))
		{
			$rowsc=ExecuteQuery("SELECT count(*) as counter from answer where question_id=$row[question_id]");
			$rowc = mysql_fetch_array($rowsc);
			$count = $rowc['counter'];
			echo "<table class='u-full-width'><tr><td>";
			echo "<h4>";
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a> </span>";
			
			echo "</span>";
			echo "</h4>";
			
			echo "$row[question_detail] <div class='u-pull-right'>Views : $row[views], Replies :$count</div>";
			echo "<br/><br/>";
			
			echo "Asked by<br/>$row[fullname]";
		
			echo "<br/><div class='line'></div>";
			echo  "<div class='u-pull-right'><a href='answer.php?qid=$row[question_id]' class='reply'>REPLY</a></div>";
			echo "</td></tr>";
		}
	
		
	}
	
			

	else
	{
		echo "No questions at the moment";
	}
	
 

?>
