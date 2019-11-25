<?php
include_once('fix_mysql.inc.php');

require_once("sql_con.php"); 
ob_start(); 
?>
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
<body>
    <div class="section hero">
        <div class="container">
        <div class="u-full-width">
            <div class="value-props row">
                <div class="three columns value-prop u-pull-left" id="headerFour">
                    <div class="row">
                            <div class="one columns">
                                <img class="value-img" id="icon" src="icon.png">
                            </div></div>
                            <div class="row">
                            <div class="two columns">
                                <h6 class="value-heading" id="brandText">clg-forum</h6>
                            </div>
                    </div>
                    
                </div>
                                        <hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>
                           <div class="one column"><a href="home.php" >Home</a></div>
                            <div class="one columns"><a href="topic.php">Manage topic</a></div>
                            <div class="one columns"><a href="subtopic.php">Manage Subtopic</a></div>
                            <div class="one columns"><a href="allusers.php">Manage Users</a></div>
                            <div class="one columns"><a href="messages.php">Message</a></div>
                        
