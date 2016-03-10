<body>
<script language="JavaScript1.2">

var howOften = 3; //number often in seconds to rotate
var current = 0; //start the counter at 0
var ns6 = document.getElementById&&!document.all; //detect netscape 6

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<a href='link.htm' ><img src='img/bed78.jpg' height='350' width='1000' border='0' /></a>"; //a linked image
    items[1]="<a href='link.htm'><img src='img/befg.jpg' height='350' width='1000' border='0' /></a>"; //a linked image
    items[2]="<a href='link.htm'><img src='img/car.jpg' height='350' width='1000' border='0' /></a>"; //a linked image
    items[3]="<a href='link.htm'><img src='img/cud.jpg' height='350' width='1000' border='0' /></a>"; //a linked image
    items[4]="<a href='link.htm'><img src='img/bedty.jpg' height='350' width='1000' border='0' /></a>"; //a linked image
    items[5]="<a href='link.htm'><img src='img/fur.jpg' height='350' width='1000' border='0' /></a>"; //a linked image
          
    
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
<style>
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
<form name="bed.php">
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
       <td style="font-family: serif; font-size: 18; color: #004080;"><b><i>Bed :</i></b></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="sheet.php" style="font-family: cursive;">Bedsheets</a> </tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="blank.php" style="font-family: cursive;">Blankets</a></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="pillow.php" style="font-family: cursive;">Pillows</a></td></tr>
       
       
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
    <input type="submit" name="b1" value="BUY" />
    
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
<img src="img/bed4.jpg" height="210" width="65%"/>
<br />
<br />
    <h6>Hermoso Double Bed Cover with pillow covers</h6>
    <h6>Rs.3499</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" style="margin-right:;">Multi-color</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square">Machine wash</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
    </h6>
    <input  type="submit" name="b2" value="BUY"/>
</td>
<tr>
</td>
<?php
if(isset($_GET['b2']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bs2'";
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
<img src="img/bed5.jpg" height="210" width="65%"/>
<br />
<br />
    <h6>Hermosa Bed-cover </h6>
    <h6>Rs.1057</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Double bed</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square">Machine wash</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
    </h6>
    <input type="submit" name="b3" value="BUY" />
</td>
<?php
if(isset($_GET['b3']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bs3'";
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
$q="select status,price,pro_id from products where pro_id='bL1'";
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
<img src="img/pill.jpg" height="299px" width="288"/>
    <h6>Shades of Paradise Pillow Cover</h6>
    <h6>Rs.495</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Cotton</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
     </ul>
    </h6>
    <input type="submit" name="b5" value="BUY" />
</td>
<?php
if(isset($_GET['b5']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='pil1'";
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
<img src="img/pill2.jpg" height="250px" width="250"/>

    <h6>Sayam Printed pillow cover</h6>
    <h6>Rs.497</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Cotton</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Meenakari Work</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
    <input type="submit" name="b6" value="BUY" />
</td>
</tr>
<?php
if(isset($_GET['b6']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='pil2'";
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
<img src="img/bed6.jpg" height="209px" width="300"/>
<br />
<br />
    <h6>Portico New York Bedsheet</h6>
    <h6>Rs.1699</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" ></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Microwave Safe</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Dishwasher Safe</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
    <input type="submit" name="b7" value="BUY"/>
</td>
<?php
if(isset($_GET['b7']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='bs4'";
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
<img src="img/pill4.jpg" height="209px" width="267"/>
<br />
<br />
    <h6>Featherlite Ultima Pillow</h6>
    <h6>Rs.699</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Satin</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
    <input type="submit" name="b8" value="BUY" />
</td>
<?php
if(isset($_GET['b8']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='pil3'";
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