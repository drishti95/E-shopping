<style>
input#gobutton
{

cursor:pointer; 
padding: 5px 25px;
background-color:#6b6dbb;
font-family:Andika, Arial, sans-serif; 
color:#fff;
font-size:0.9em;
}
input#gobutton:hover, input#gobutton:focus
{
background-color :#B36666; 
}
a{
   color: black;
    
}
</style>

 <script type="text/javascript">
            function clear_text()
            {
                document.getElementById('searchbar').value=" ";
            }
            
            </script>
<form>
<table  width="100%" bgcolor="#3E20CC" height="30">
  <tr>
   <td></td>
   <td>
   <table  width="50%" align="right"><tr>

   <td  align="right">SEARCH<input type="text" id="searchbar"  size="30" value="Search for books,stationery or other stuff.." onmouseover="clear_text()"/></td>&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp; <td align="center"><a href="morestore.php">BACK</a></td>
</tr>
</table>
</td>

</tr>
</table>

<table height="20" border="0" width="100%">
  <tr>
    <td bgcolor="blue">
     </td>
 </tr>
 <tr>
     <td bgcolor="blue">
<table align="right" border="0" cellspacing="1" width="100%" bgcolor="blue" style="background-image: url(header.jpg);">
 <tr>
<td><img src="temp.jpg" height="120" width="200"/></td>
<td align="right"><marquee><img src="add.jpg" height="100"/>&nbsp;&nbsp;&nbsp;&nbsp;<img  src="ad.jpg" height="100"/>&nbsp;&nbsp;&nbsp;&nbsp;<img  src="addd.jpg" height="100"/>&nbsp;&nbsp;&nbsp;&nbsp;<img  src="adddd.jpg" height="100"/></marquee>
</td>
<td align="center"><a href="p_login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="p_registration.php">Sign Up</a></td>
</tr>
</table>
</td>
</tr>
</table>
<br />
<table align="center" border="0" width="70%" cellspacing="2" bgcolor="#400040"><tr><td align="center">
<input id="gobutton"  type="submit" name="btn1" value="SKATING" />
</tr>
</table>
<br /><br />

<table border="0" width="100%" >
<tr>

<td width="20%" bgcolor="silver"></td>

<td width="60%">
<table border="1" cellspacing="6" width="100%">
<tr>

<td width="25%">
<table border="0">
<tr>
<td>
<img src="sk1s.jpeg"/>
</td>
</tr>
<tr>
<td><input type="submit" name="b1" value="View"/></td>
</tr>
</table>
</td>
<?php
if(isset($_GET['b1']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='sk1s'";
$rec=mysql_query($q);
if($res=mysql_fetch_row($rec))
{
    if ($res[0]=='on' || $res[0]=='On'|| $res[0]=='ON')
    {
         session_start();
        $_SESSION['pr_id']=$res[2];
        $_SESSION['p']=$res[1];
        $q="update products set status='off' where pro_id='".$res[2]."'";
        mysql_query($q);
        header("location:cash.php");
    }
    else
    {
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';
    }
}
}
?>
<td width="25%">
<table border="0">
<tr>
<td><img src="sk2s.jpeg"/></td>
</tr>
<tr>
<td><input type="submit"  name="b2" value="view"/></td>
</tr>
</table>
</td>
<?php
if(isset($_GET['b2']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='sk2s'";
$rec=mysql_query($q);
if($res=mysql_fetch_row($rec))
{
    if ($res[0]=='on' || $res[0]=='On'|| $res[0]=='ON')
    {
        session_start();
        $_SESSION['pr_id']=$res[2];
        $_SESSION['p']=$res[1];
        $q="update products set status='off' where pro_id='".$res[2]."'";
        mysql_query($q);
        header("location:cash.php");
    }
    else
    {
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';
    }
}
}
?>
<td width="25%">
<table border="0">
<tr>
<td><img src="sk3s.jpeg"/></td>
</tr>
<tr>
<td><input type="submit"  name="b3" value="view"/></td>
</tr>
</table>
</td>
<?php
if(isset($_GET['b3']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='sk3s'";
$rec=mysql_query($q);
if($res=mysql_fetch_row($rec))
{
    if ($res[0]=='on' || $res[0]=='On'|| $res[0]=='ON')
    {
        session_start();
        $_SESSION['pr_id']=$res[2];
        $_SESSION['p']=$res[1];
        $q="update products set status='off' where pro_id='".$res[2]."'";
        mysql_query($q);
        header("location:cash.php");
    }
    else
    {
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';
    }
}
}
?>
<td width="25%">
<table border="0">
<tr>
<td><img src="sk4s.jpeg"/></td>
</tr>
<tr>
<td><input type="submit"  name="b4" value="view"/></td>
</tr>
</table>
</td>

</tr>
<tr>
<?php
if(isset($_GET['b4']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='sk4s'";
$rec=mysql_query($q);
if($res=mysql_fetch_row($rec))
{
    if ($res[0]=='on' || $res[0]=='On'|| $res[0]=='ON')
    {
         session_start();
        $_SESSION['pr_id']=$res[2];
        $_SESSION['p']=$res[1];
        $q="update products set status='off' where pro_id='".$res[2]."'";
        mysql_query($q);
        header("location:cash.php");
    }
    else
    {
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';
    }
}
}
?>
<td width="25%">
<table border="0">
<tr>
<td>
<img src="sk5s.jpeg"/>
</td>
</tr>
<tr>
<td><input type="submit" name="b5" value="View"/></td>
</tr>
</table> 
</td>
<?php
if(isset($_GET['b5']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='sk5s'";
$rec=mysql_query($q);
if($res=mysql_fetch_row($rec))
{
    if ($res[0]=='on' || $res[0]=='On'|| $res[0]=='ON')
    {
         session_start();
        $_SESSION['pr_id']=$res[2];
        $_SESSION['p']=$res[1];
        $q="update products set status='off' where pro_id='".$res[2]."'";
        mysql_query($q);
        header("location:cash.php");
    }
    else
    {
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';
    }
}
}
?>
<td width="25%">
<table border="0">
<tr>
<td>
<img src="sk6s.jpeg"/>
</td>
</tr>
<tr>
<td><input type="submit" name="b6" value="View"/></td>
</tr>
</table> 
</td>
<?php
if(isset($_GET['b6']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='sk6s'";
$rec=mysql_query($q);
if($res=mysql_fetch_row($rec))
{
    if ($res[0]=='on' || $res[0]=='On'|| $res[0]=='ON')
    {
        session_start();
        $_SESSION['pr_id']=$res[2];
        $_SESSION['p']=$res[1];
        $q="update products set status='off' where pro_id='".$res[2]."'";
        mysql_query($q);
        header("location:cash.php");
    }
    else
    {
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';
    }
}
}
?>
<td width="25%">
<table border="0">
<tr>
<td>
<img src="sk7s.jpeg"/>
</td>
</tr>
<tr>
<td><input type="submit" name="b7" value="View"/></td>
</tr>
</table> 
</td>
<?php
if(isset($_GET['b7']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='sk7s'";
$rec=mysql_query($q);
if($res=mysql_fetch_row($rec))
{
    if ($res[0]=='on' || $res[0]=='On'|| $res[0]=='ON')
    {
         session_start();
        $_SESSION['pr_id']=$res[2];
        $_SESSION['p']=$res[1];
        $q="update products set status='off' where pro_id='".$res[2]."'";
        mysql_query($q);
        header("location:cash.php");
    }
    else
    {
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';
    }
}
}
?>
<td width="25%">
<table border="0">
<tr>
<td>
<img src="sk8s.jpeg"/>
</td>
</tr>
<tr>
<td><input type="submit" name="b8" value="View"/></td>
</tr>
</table> 
</td>
<?php
if(isset($_GET['b8']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='sk8s'";
$rec=mysql_query($q);
if($res=mysql_fetch_row($rec))
{
    if ($res[0]=='on' || $res[0]=='On'|| $res[0]=='ON')
    {
         session_start();
        $_SESSION['pr_id']=$res[2];
        $_SESSION['p']=$res[1];
        $q="update products set status='off' where pro_id='".$res[2]."'";
        mysql_query($q);
        header("location:cash.php");
    }
    else
    {
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';
    }
}
}
?>
</tr>
</table>
</td>

<td  bgcolor="silver" width="20%"></td>

</tr>

</table>

</form>