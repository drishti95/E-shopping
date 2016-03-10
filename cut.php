<body>
<script language="JavaScript1.2">

var howOften = 3; //number often in seconds to rotate
var current = 0; //start the counter at 0
var ns6 = document.getElementById&&!document.all; //detect netscape 6

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<a href='link.htm' ><img src='img/cro.jpg' height='300' width='900' border='0' /></a>"; //a linked image
    items[1]="<a href='link.htm'><img src='img/cooking.jpg' height='300' width='900' border='0' /></a>"; //a linked image
    items[2]="<a href='link.htm'><img src='img/homet.jpg' height='300' width='900' border='0' /></a>"; //a linked image
    items[3]="<a href='link.htm'><img src='img/bed74.jpg' height='300' width='900' border='0' /></a>"; //a linked image
             
    
function rotater() {
    document.getElementById("placeholder").innerHTML = items[current];
    current = (current==items.length-1) ? 0 : current + 1;
    setTimeout("rotater()",howOften*1000);
}

function rotater() {
    if(document.layers) {
        document.placeholderlayer.document.write(items[current]);
        document.placeholderlayer.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
        if(document.all)
            placeholderdiv.innerHTML=items[current];

    current = (current==items.length-1) ? 0 : current + 1; //increment or reset
    setTimeout("rotater()",howOften*1000);
}
window.onload=rotater;
//-->
</script>
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
<form name="cut.php">
<br />
<br />
<table border="0" width="100%" height="100%"  >
<tr>
<td>
<table border="0" width="100%" height="100%" >
<tr>
<td width="20%">

<table border="0" style="margin-bottom: 100;">
<tr>
       <td style="font-family: serif; font-size: 18; color: #004080;"><b><i>Home and Kitchen :</i></b></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <td style="font-family: serif; font-size: 18; color: #004080;"><b><i>Cutlery & Tableware :</i></b></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="cutr.php" style="font-family: cursive;">Cutlery & Crokery</a> </tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="condiment.php" style="font-family: cursive;">Condiment Sets</a></td></tr>
       
</tr> 
</table>


<img src="img/adp.jpg" height="70%" width="65%" style="margin-bottom: 150;"/>

</td>
<td width="70%" align="center">

<table border="0" style="margin-right: 288px;" width="100%" height="100%">
<tr>

<layer id="placeholderlayer"></layer><div id="placeholderdiv"></div>

</tr>
</td>
<td div id="gobutton">
<img src="img/dinner.jpg" height="201" width="65%"/>
<br />
<br />
    <h6>Corelle 21 Pcs Dinner Set</h6>
    <h6>Rs.3515</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" style="margin-right:;">Break Resistant</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" style="margin-right:;">Microwave & Dishwasher safe</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
    </ul>
    </h6>
    <input type="submit" name="b1" value="BUY" />
</td>
</td>
<?php
if(isset($_GET['b1']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='cnc1'";
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
<img src="img/fork.jpeg" height="210" width="65%"/>
<br />
<br />
    <h6>Trinity Omega Dessert Fork Set</h6>
    <h6>Rs.556</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" style="margin-right:;">Stainless Steel</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square">Dishwasher Safe</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
    </h6>
    <input type="submit" name="b2" value="BUY" />
</td>
<?php
if(isset($_GET['b2']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='cnc2'";
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
<img src="img/salt.jpeg" height="200px" width="60%"/>

    <h6>Tricon Salt & Pepper Set</h6>
    <h6>Rs.343</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Stainless Steel</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </ul>
    </h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="b3" value="BUY" />
</td>
</tr>
<?php
if(isset($_GET['b3']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='cnd4'";
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
<img src="img/chip.jpg" height="280px" width="288"/>
    <h6>Borosil Chip & Dip Bowl</h6>
    <h6>Rs.1395</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Glass</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
     </ul>
    </h6>
    <input type="submit" name="b4" value="BUY" />
</td>
<?php
if(isset($_GET['b4']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='cnc3'";
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
<img src="img/royal.jpg" height="209px" width="350"/>

    <h6>White Metal Royal Tea Set by Little India</h6>
    <h6>Rs.4091</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >White Metal</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Meenakari Work</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
    <input type="submit" name="b5" value="BUY" />
</td>
</tr>
<?php
if(isset($_GET['b5']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='cnc4'";
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
<img src="img/set.jpg" height="209px" width="300"/>
<br />
<br />
    <h6>Corelle Vitrelle Glass Dinner Set</h6>
    <h6>Rs.6788</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Vitrelle Glass</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Microwave Safe</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Dishwasher Safe</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
    <input type="submit" name="b6" value="BUY" />
</td>
<?php
if(isset($_GET['b6']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='cnc5'";
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
