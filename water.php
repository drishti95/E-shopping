<?php
include("inc.php");
?>
<style>

#gobutton
{

cursor:pointer; 
padding: 2px 2px;
font-family:Andika, Arial, sans-serif; 

font-size:0.9em;

}
#gobutton:hover, #gobutton:focus
{
background-color: #BFBDC4
}
</style>
<form name="water.php">
<br />
<br />
<table border="0" width="100%" height="100%"  >
<tr>
<td>
<table border="0" width="100%" height="100%" >
<tr>
<td width="20%">

<table border="0">
<tr>
       <td style="font-family: serif; font-size: 18; color: #004080;"><b><i>Home and Kitchen :</i></b></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <td style="font-family: serif; font-size: 18; color: #004080;"><b><i>Home Appliances :</i></b></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="air.php" style="font-family: cursive;">Air Conditioner</a> </tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td style="font-family: cursive;">Water Purifier</a></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="vac.php" style="font-family: cursive;">Vacuum Cleaners</a></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="iron.php" style="font-family: cursive;">Irons</a></td></tr>
       
       
</tr> 
</table>


<img src="img/adp.jpg" height="40%" width="40%" style="margin-bottom: 100;"/>

</td>
<td width="70%" align="center">

<table border="0"  width="100%" height="100%">

</td>
<td  div id="gobutton">
<img src="img/kent.jpeg" height="400px" width="250" style="margin-bottom: 200;"/>

    <h6>Kent Gold water purifier</h6>
    <h6>Rs.2159</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Non-electrical</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >20 L capacity</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
    <input type="submit" name="b1" value="BUY" />
</td>
<?php
if(isset($_GET['b1']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='wp1'";
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
      echo '<script type ="text/javascript">alert(\'The product is already sold out!!! Please choose something else.\')</script>';;
    }
}

}

?>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<hr style="background-color: black;" />

<table border="0" align="center" width="100%"  height="20%" bgcolor="silver">
<tr><td>
<table border="0" align="center"  style="margin-left: 230;"bgcolor="silver">
<tr>

<td>
<table width="30%"  border="0">
     <tr>
       <td>Help</td></tr>
       <tr><td><a href="Payments.php">payments</a> </tr>
       
      
     </table>
     </td>
     
<td bgcolor="silver">

<table width="80" bgcolor="silver" border="0">
<tr>
       <td>Policies</td></tr>
       <tr><td><a href="home21.php">Home</a></td> </tr>
       
        <tr><td><a href="contact us.php">Contact Us</a></td></tr>
     </tr>
     </table>
</td>
<td>
     <table width="80">
     <tr>
     <td>
     JoinUs
     </td></tr>
     <tr><td>Facebook</td></tr>
    <tr><td>Google+</td></tr>
    <tr><td>Pinterest</td></tr>
    <tr><td>Twitter</td></tr>
     </table>
   </td>  
    
</tr>

<tr>
<td>
<table border="0">
<tr ><td colspan="4">TOP BRANDS</td></tr>

<tr><td>Adidas</td></tr>
<tr><td>American</td></tr>
<tr><td>Asics</td></tr>
<tr><td>
Aurellia</td></tr>
</table>
</td>
<td>
<table>
<tr><td></td></tr>
<tr><td>
Being Human</td></tr>
<tr><td>
Fastrack</td></tr>
<tr><td>
Allen Solly</td></tr>
</table>

</td>

</tr>

   </table>
  </td> </tr>
   </table>

</form>


</form>
</body>