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
   <td></td>&nbsp;&nbsp;
    <td align="center"></td>
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
<td align="center" width="20%"></td>
</tr>
</table>
</td>
</tr>
</table>
<br />
<?php

session_start();
if(!isset($_SESSION['n']))
header("location:p_login.php");
if(isset($_SESSION['p']))
{
$name=$_SESSION['n'];
$price=$_SESSION['p'];
$pid=$_SESSION['pr_id'];
}
else
header("location:home21.php");
?>
<table border="0" cellspacing="90" width="100%" bgcolor="#FFB693">
<tr><td>
<table border="0" width="50%" align="center" bgcolor="#FF8951">
<tr><td align="center"><h2>COST SHEET</h2></td></tr>
<tr>
<td align="center">
Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name;?>
</td>
</tr>
<tr>
<td align="center">
Address&nbsp;&nbsp;<input  type="text" name="txt1" />
</td>

</tr>
<tr>
<td align="center">
Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $price;?>
</td>

</tr>
<tr>
<td align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" name="btn" value="Confirm"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input  type="submit" name="btn1" value="Cancel"/>
</td>
</tr>
<tr><td></td></tr>
<tr><td></td></tr>
</table>
<tr><td>
</tr></td>
</td>
</tr>

<?php
if(isset($_GET['btn']))
{

        echo '<script type ="text/javascript">alert(\'Your order has been placed successfully..Thanks for shopping with us !1 :)\')</script>'; 
}
else if (isset($_GET['btn1']))
{
     $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="update products set status='on' where pro_id='".$pid."'";
mysql_query($q);
header("location:home21.php");
}
?>
</table>

</form>