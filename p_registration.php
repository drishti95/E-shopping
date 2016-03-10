<html>
<body>
<title>Welcome to Website: Sign in</title>
<hr color ="blue" />
<form name="Registration_page.php" method ="POST" style="background-image: url(5.jpg);" >
<table bgcolor="aqua" width="100%">
<tr align="center">
<td><a href="home21.php">Home Page</a></td>
<td><a href="about us.php">About Us</a></td>
<td><a href="category.php">Categories</a></td>
<td><a href="p_login.php">Sign In</a></td>
<td><a href="contact us.php">Contact Us</a></td>
</tr>
</table>
<br />
<br />
<table align="center" width="40%" height="90%" bgcolor="aqua" >
<tr align="center">
<td align="center" bgcolor="white">Registration</td>
</tr>
<br />
<tr><td><center>Name<input type="text" name="txt_name"/></td></tr></center>

<tr>
<td><center>City:
 <select name="ddl_city">
<option>Select</option>
<option>Agartala</option>
<option>Agra</option>
<option>Ahmedabad</option>
<option>Aizwal</option>
<option>Aligarh</option>
<option>Allahabad</option>
<option>Amritsar</option>
<option>Aurangabad</option>
<option>Bangalore</option>
<option>Baroda</option>
<option>Bhopal</option>
<option>Bhubaneshwar</option>
<option>Bokaro</option>
<option>Chandigarh</option>
<option>Chennai</option>
<option>Cochin</option>
<option>Coimbatore</option>
<option>Cuttack</option>
<option>Dehradun</option>
<option>Delhi</option>
<option>Dimapur</option>
<option>Durgapur</option>
<option>Faridabad</option>
<option>Gandhinagar</option>
<option>Ghaziabad</option>
<option>Goa</option>
<option>Gurgaon</option>
<option>Guwahati</option>
<option>Gwalior</option>
<option>Hyderabad</option>
<option>Imphal</option>
<option>Indore</option>
<option>Jabalpur</option>
<option>Jaipur</option>
<option>Jammu</option>
<option>Jamnagar</option>
<option>Jamshedpur</option>
<option>Jodhpur</option>
<option>Kanpur</option>
<option>Kolhapur</option>
<option>Kolkata</option>
<option>Lucknow</option>
<option>Ludhiana</option>
<option>Madurai</option>
<option>Mangalore</option>
<option>Margaon</option>
<option>Mumbai</option>
<option>Mysore</option>
<option>Nagpur</option>
<option>Nasik</option>
<option>NOIDA</option>
<option>Patna</option>
<option>Pondicherry</option>
<option>Pune</option>
<option>Raipur</option>
<option>Ranchi</option>
<option>Rourkela</option>
<option>Rajkot</option>
<option>Salem</option>
<option>Secunderabad</option>
<option>Shillong</option>
<option>Siliguri</option>
<option>Srinagar</option>
<option>Surat</option>
<option>Thane</option>
<option>Thiruvananthapuram</option>
<option>Tiruchirapalli</option>
<option>Udaipur</option>
<option>Varanasi</option>
<option>Vellore</option>
<option>Vijaywada</option>
<option>Vishakapatnam</option>
<option>Other</option>
</select></center>
</td>
</tr>
<tr><td><center>Age:<select name="ddl_age">
<?php
for($i=15;$i<=50;$i++)
{
    echo "<option>".$i."</option>";
}
?>
</select>
</center>
<tr>
<td><center>Mobile No:<input type="text" name="txt_num"/></center></td>
</tr>
<tr>
<td><center>Email ID: <input type="text" name="txt_email"/></center></td>
</tr>
</td></tr>
<tr><td><center>Password:<input type="password" name="txt_pass" /></center></td></tr>
<tr><td><center>Gender:<input type="radio" name="rdo_gender" value="Male"/>Male <input type="radio" name="rdo_gender" value="Female"/>Female </center> </td></tr> 
<tr><td align="center"><input type="submit" name="btn_submit" value="Sign Up" /></td></tr>
 <?php
 if(isset($_POST['btn_submit']))
 {
$link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q1="select Max(userno) from p_regi";
$reco=mysql_query($q1);
if($r=mysql_fetch_row($reco))
{
    if($r[0]=="")
    $sn=1;
    else
    $sn=$r[0]+1;
}
$u=$_POST['txt_name']."/".$_POST['ddl_age']."/".$sn."@GoDaddy.com";
$q="insert into p_regi values(".$sn.",'".$_POST['txt_name']."','".$_POST['rdo_gender']."',".$_POST['ddl_age'].",'".$_POST['txt_email']."',".$_POST['txt_num'].",'".$u."','".$_POST['txt_pass']."','".$_POST['ddl_city']."')";                        
$r=mysql_query($q);
if (mysql_affected_rows($link)> 0)
{
    session_start();
    $_SESSION['x']=$u;
    header("location:welcome.php");
} 
else
{
    echo "<font size='80' color='red'>Error !!!</font>";
   header ("location:p_registration.php");
}
 } 
?>
</table>
 </font> 
 </form>
 </center>
 </body>
 </html>