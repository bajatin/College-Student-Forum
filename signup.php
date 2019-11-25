<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="skeleton.css" />
    <link rel="stylesheet" href="personal.css" />
    <title>College Forum</title>
</head>
<body>
    <div class="section hero">
        <div class="container">
            <div class="value-props row">
                <div class="three columns value-prop u-pull-left" id="headerThree">
                    <img class="value-img" id="icon" src="icon2.png">
                </div></div>
                         
                <div class="twelve columns value-prop u-pull-right" id="headerEight"><h4>clg-forum</h4></div>
<br>
<br>
<br>
<br>
<script type="text/javascript">
	function check(sign_up)
	{
		if(
		sign_up.u_name.value == "" ||
		sign_up.f_name.value == "" ||
		sign_up.pwd.value == "" ||
		sign_up.e_mail.value == ""||
		sign_up.gender.value == ""||
		 )
		{
		
			if (sign_up.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
				//alert("Please, Enter The Username");
			sign_up.u_name.sign_up.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				//alert("Please, Enter The Username");
			   sign_up.u_name.focus();
				
			}
			 if    sign_up.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				//alert ("Please,Please Enter The Fullname");
			   sign_up.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
			   sign_up.f_name.focus();
			}
			 if    sign_up.pwd.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter password.";
				//alert ("Please,Please Enter The Password");
			   sign_up.pwd.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				//alert ("Please,Please Enter The Password");
			   sign_up.pwd.focus();

			}
			
			 if    sign_up.e_mail.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
				//alert ("Please,Please Enter The E-mail Address");
			   sign_up.e_mail.focus();
				
			}
			else
			{
				document.getElementById("d").innerHTML = "";
				//alert ("Please,Please Enter The E-mail Address");
			   sign_up.e_mail.focus();
			}
			 if    sign_up.gender.value == "")
			{
				document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
				//alert("Please,Please Enter The Gender");
			   sign_up.gender.focus();
				
			}
      else
			{
				document.getElementById("spuid").innerHTML = "";
				//alert("Please,Please Enter The Gender");
			   sign_up.gender.focus();
			}
			
			return false;
		}
		else
			  return true;
	}
</script>

    <h2>Sign Up!</h2>            <!--<div class="nine columns value-prop u-pull-right" id="headerNine">-->
<form action="signup_insert.php" method="post" onsubmit="return check(this)" name="sign_up">
  <div class="row">
    <div class="six columns">
      <label for="Email">Your email</label>
      <input class="u-full-width" type="email" placeholder="test@mailbox.com" name="e_mail"><span id='d' style="color: red;"></span>
    </div>
  </div>
  <div class="row">
    <div class="six columns">
      <label for="fname">Full Name</label>
      <input class="u-full-width" type="text"  name="f_name"><span id='b' style="color: red;"></span>
    </div>
</div>
  <div class="row">
    <div class="six columns">
      <label for="uname">Username</label>
      <span id='a' style="color: red;"><input class="u-full-width" type="text"  name="u_name" ></span>
    </div>
    <div class="six columns">
      <label for="uname">Password</label>
      <input class="u-full-width" type="password"  name="pwd"><span id='c' style="color: red;"></span>
    </div>
  </div>
  <div class="row">
      <div class="three columns">
          <label for="image">Profile Picture</label>
          <input type="file" name="ima">
</div>
</div>    
    <div class="row">  
    <div class="six columns">
      <label for="username">Gender</label>
      <select class="u-full-width" name="gender">
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Other</option><span id='spuid' style="color: red;"></span>
      </select>
    </div>
  </div>
  <div class="row">
      <div class="three columns">
  <input class="button-primary" type="submit" value="Submit">
</div><div class="three columns">  <input type="reset" value="Reset">
</div></div>
</form>