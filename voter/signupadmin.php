<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
extract($_POST);
include("database1.php");
$rs=mysqli_query($conn,"select * from admin where login='$admin_id'");
if (mysqli_num_rows($rs)>0)
{
echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
exit;
}
$query="insert into admin(admin_id,pass) values('$admin_id','$pass')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID $admin_id Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to enter potal</div>";
echo "<br><div class=head1><a href=voterlogin.php>Login</a></div>";
?>
</body>
</html>