<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!--
        *Uncomment to make webpage responsive but some elements would show unexpected behaviour in small screens.
        <meta name="viewport" content="width=device-width, initial-scale=1">
    -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="skeleton.css" />
    <link rel="stylesheet" href="personal.css" />
    <title>College Forum</title>
</head>
<?php include_once('fix_mysql.inc.php');
      require_once("sql_con.php");?>
<body>
    <div class="section hero">
        <div class="container">
            <div class="value-props row">
                <div class="four columns value-prop u-pull-left" id="headerFour">
                    <div class="row">
                            <div class="one-half column">
                                <a href="index.php"><img class="value-img" id="icon" src="icon.png"></a>
                            </div>
                            <div class="one-half column">
                                <h5 class="value-heading" id="brandText">clg-forum</h5>
                            </div>
                    </div>
                </div>
                <div class="eight columns value-prop u-pull-right" id="headerEight">
                    <div class="container">
                    
                        <div class="row">
                            <div class="three columns" id="threeCol">
                                <label for="username">Username</label>
                            </div>
                            <div class="three columns" id="threeCol">
                                <label for="password">Password</label>
                            </div>
                            <div class="five columns" id="twoCol"></div>
                        </div>
                        <form action="loginH.php" method="POST" onsubmit="return 'true'">
                        <div class="row">
                            <div class="three columns">
                                <input class="u-full-width" type="text"  name="uid">
                            </div>
                            <div class="three columns">
                                <input class="u-full-width" type="password"  name="pwd">
                            </div>
                            <div class="two columns">
                                <input class="button-primary" type="submit" value="Log In">            
                            </div></form>
                            <?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
				  echo "<script>alert('Enter valid user ID or password')</script>";
				
?></form>
<?php 
session_start();

ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");

session_destroy();
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1>Logged out</h1>
