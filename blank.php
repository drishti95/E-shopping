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
<form name="blank.php">
<br />
<br />
<table border="0" width="100%" height="100%"  >
<tr>
<td>
<table border="0" width="100%" height="100%" >
<tr>
<td width="20%">

<table border="0" style="margin-bottom: 10;">
<tr>
       <td style="font-family: serif; font-size: 18; color: #004080;"><b><i>Home and Kitchen :</i></b></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <td style="font-family: serif; font-size: 18; color: #004080;"><b><i>Bed :</i></b></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="sheet.php" style="font-family: cursive;">Bedsheets</a> </tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td style="font-family: cursive;">Blankets</a></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="pillow.php" style="font-family: cursive;">Pillows</a></td></tr>
       
       
</tr> 
</table>


<img src="img/adp.jpg" height="70%" width="65%" style="margin-bottom: 150;"/>

</td>
<td width="70%" align="center">

<table border="0" style="margin-right: 288px;" width="100%" height="100%">

</td>
<td  div id="gobutton">
<img src="img/bed3.jpg" height="245" width="65%"/>
<br />
<br />
    <h6>Pink Comforters Blanket</h6>
    <h6>Rs.2659</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" style="margin-right:;">Machine Wash</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
    </ul>
    </h6>
    <input type="submit" name="b1" value="BUY"/>
</td>
</td>
<?php
if(isset($_GET['b1']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bl1'";
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
<td div id="gobutton">
<img src="img/bla.jpg" height="280" width="75%"/>
<br />
<br />
    <h6>Sonata Jazz Maroon Blanket</h6>
    <h6>Rs.2799</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" style="margin-right:;">Cotton</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square">Double Bed</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
    </h6>
    <input type="submit" name="b2" value="BUY" />
</td>
<tr>
</td>
<?php
if(isset($_GET['b2']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bl2'";
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
<td div id="gobutton">
<img src="img/bla3.jpg" height="210" width="65%"/>
<br />
<br />
    <h6>Shades Of Paradise Blanket</h6>
    <h6>Rs.1099</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Double bed</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square">Cotton</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
    </h6>
    <input type="submit" name="b3" value="BUY"/>
</td>
<?php
if(isset($_GET['b3']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bl3'";
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
<td div id="gobutton">
<img src="img/bed7.jpg" height="201px" width="280"/>
<br />
<br />
    <h6>Sonata Classic Pink Comforter</h6>
    <h6>Rs.2659</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Double Bed</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Machine wash</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
    <input type="submit" name="b4" value="BUY" />
</td>
</tr>
<?php
if(isset($_GET['b4']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bl4'";
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
<tr>
<td div id="gobutton">
<img src="img/blan.jpg" height="209px" width="300"/>
<br />
<br />
    <h6>House This! Polka Double Comforter</h6>
    <h6>Rs.1999</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Polycotton</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Double Bed</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </ul>
    </h6>
    <input type="submit" name="b5" value="BUY" />
</td>
<?php
if(isset($_GET['b5']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bl5'";
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
<td  div id="gobutton">
<img src="img/blan1.jpg" height="209px" width="267"/>
<br />
<br />
    <h6>House This! Spiral Flower Comforter</h6>
    <h6>Rs.2599</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Double Bed</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
    <input type="submit" name="b6" value="BUY" />
</td>
<?php
if(isset($_GET['b6']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bl6'";
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
       <tr><td><a href="payments.php">Payments</a> </tr>
       
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