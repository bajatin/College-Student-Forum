<?php session_start();
require("sql_con.php")?>
<?php require("header.php");
//require("checkUser.php");
?>
<?php
$uid = $_GET['id'];
$qry = "DELETE FROM user WHERE user_id='".$uid."'";
$result = ExecuteQuery($qry);
if($result)
{
	header ("location:allusers.php");
	}
	else
	{
		echo "Not Done";
		}

?>
 