<html>
<body>
<title>Welcome to Website: Sign in</title>
<hr color ="blue" />
<form name="login.php" method="POST" >
<table width="100%" style="background-color: aqua;">
<tr align="center">
<td><a href="home21.php">Home Page</a></td>
<td><a href="about us.php">About Us</a></td>
<td><a href="category.php">Categories</a></td>
<td><a href="p_login.php">Sign In</a></td>
<td><a href="contact us.php">Contact Us</a></td>
</tr>
</table>
<table width="100%" height="100%" >
<tr>
<td>
<table style="background-color: white;background-image: url(8.jpg);" width="100%" height="100%" >
<tr>
<td width="40%">
<marquee>
<img src="5.jpg" height="40%" width="40%" /> <img src="11.jpg" height="45%" width="45%" />
</marquee>
</td>
<td width="70%" align="center">
<table style="background-color: aqua;background-image: url(desert.jpg);" width="50%" height="30%">
<tr align="center">
<h2>Welcome to Website</h2>
<td colspan="2"><b>Sign In</b></td>
</tr>
<center>
<tr>
<td align="center">Username:<input type="text" name="txt_name"/></td><br />
</tr>
</center>
<tr>
<td align="center">Password:<input type="password" name="txt_pass"/></td>
</tr>
<br />
<tr>
<td align="center"><input type="submit" name="btn" value="Login"/>
 <a href="p_registration.php">New User</a></td>
</tr>
</table>
<?php
if(isset($_POST['btn']))
{
    
$l=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select * from p_regi where user_id='".$_POST['txt_name']."'and password='".$_POST['txt_pass']."'";
$rec=mysql_query($q);
$r=mysql_fetch_row($rec);
if(mysql_affected_rows($l) >0)
{
if($r[0]=="")
{
    echo "Error";
}
else
{
    header("location:home21.php");
    session_start();
     $_SESSION['n']=$_POST['txt_name'];
     header("location:home21.php");
}
}
}
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</form>
</body>
</html>