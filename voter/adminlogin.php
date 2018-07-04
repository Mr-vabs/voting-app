	
<?php
include("database.php");
extract($_POST);
if(isset($submit))
{
$rs=mysqli_query($conn,"select * from admin where user_id='$admin_id' and pass='$pass'");
if(mysqli_num_rows($rs)<1)
{
$found="N";
}
else
{
$_SESSION["login"]=$admin_id;
}
}
if (isset($_SESSION["login"]))
{
echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
exit;
}
?>
		
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="login.css" />
			
    </head>
    <body>
        <div class="container">
           
            <header>
                <h1>Login and Registration Form</h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form name="form1" method="post"> 
                                <h1>Admin Login</h1> 
                                <p> 
                                    <label for="username" class="uname" > Your email or username </label>
                                    <input id="loginid2" name="admin_id" required="required" type="text" placeholder="username"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="pass2" name="pass" required="required" type="password" placeholder="password" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                   
								   <input name="submit" type="submit" id="submit" value="Login"><br>
								</p>
								
								

								
                             <!--   <p class="change_link">
									Back to user login
									<a href="#toregister" class="to_register">Admin Login</a>
								</p> -->
								

								
								
                            </form>
                        </div>
<?php if(isset($found))
{
echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="adminlogin.php.php">Please try again</p>';
}
?>


<script language="javascript">
function check()
{
if(document.form1.lid.value=="")
{
alert("Plese Enter Login Id");
document.form1.lid.focus();
return false;
}
if(document.form1.pass.value=="")
{
alert("Plese Enter Your Password");
document.form1.pass.focus();
return false;
} 
if(document.form1.cpass.value=="")
{
alert("Plese Enter Confirm Password");
document.form1.cpass.focus();
return false;
}
if(document.form1.pass.value!=document.form1.cpass.value)
{
alert("Confirm Password does not matched");
document.form1.cpass.focus();
return false;
}





e=document.form1.email.value;
f1=e.indexOf('@');
f2=e.indexOf('@',f1+1);
e1=e.indexOf('.');
e2=e.indexOf('.',e1+1);
n=e.length;
if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
{
alert("Please Enter valid Email");
document.form1.email.focus();
return false;
}
return true;
}
</script>






                       
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>