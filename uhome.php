<?php include_once('fix_mysql.inc.php');
	session_start();
	require("header.php");
 require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>
<br/><br/>
<h5><a href="que.php">My Questions</a> &nbsp&nbsp&nbsp&nbsp
<a href="ans.php">My Answers </a></h5>
    <br><br>
    <div class="section value u-max-full-width" id="threadsSection">
        <div class="container">
            <div class="row">
                <div class="three columns value">
                    <h1 class="value-heading" id="threadsHeading">Threads</h1> 
                </div>
            </div>
            <div class="row">
                <table class="u-full-width">
                    <thead>
                        <tr>
                            <th class="two columns">Started By</th>
                            <th class="six columns">Title</th>
                            <th class="two columns">Date Posted</th>
                            <th class="two columns">Replies</th>
                        </tr>
                    </thead>
                    <tbody id="tableContent">
                       <?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   
			
			// echo "<span class='box2'>";
			$rowsc=ExecuteQuery("SELECT count(*) as counter from answer where question_id=$row[question_id]");
			$rowc = mysql_fetch_array($rowsc);
			$count = $rowc['counter'];
			
            echo "<table class='u-full-width'>";
            
			echo "<tr><td class='two columns'>
            <img src='$row[uimg]' alt='' style='width:75px;height:75px;' class='uimg'/>
				
			$row[fullname]</td>
			<td class='six columns'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a><br/><br/><br/>
			$row[question_detail]</td>
			<td class='two columns'>$row[datetime]<br/><br/><br/>
            </td>
            <td class='two columns'><br/>$count<br/><br/><br/></td></tr>";
			
			
			echo "</table>";
		}
	
?>
                    
                    </tbody>
                </table>
            </div>
        </div>
		</div>
    