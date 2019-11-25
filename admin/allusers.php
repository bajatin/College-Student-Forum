<?php session_start();
 require("header.php");
require("checkUser.php");?>
<script type="text/javascript">
	document.getElementById("amanage").className="active";
</script>

<?php 
		$sql="SELECT user_id, username,user_type, fullname from user ";
		$rows=ExecuteQuery($sql);
		
		echo "<table border='1'>";
		echo "<strong><tr><th>User ID</th><th>Username</th><th>Full name</th><th>User Type</th><th>Delete User</th></tr> </strong>";
		
		while($name_row=mysql_fetch_array($rows))
		{
			echo "<tr>";
			echo "<td>$name_row[user_id]</td><td>$name_row[username]</td><td>$name_row[fullname]</td><td>$name_row[user_type]</td><td><a href='udelete.php?id=".$name_row[user_id]."'><img src='../res/images/edit.jpg' style='width:25px;height:25px;' class='imagedel'/></a></td>";
			}
		
		echo "</table>";
?>