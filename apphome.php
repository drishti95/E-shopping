
<body>
<script language="JavaScript1.2">

var howOften = 3; //number often in seconds to rotate
var current = 0; //start the counter at 0
var ns6 = document.getElementById&&!document.all; //detect netscape 6

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<a href='link.htm' ><img src='img/home.jpg' height='350' width='900' border='0' /></a>"; //a linked image
    items[1]="<a href='link.htm'><img src='img/homer.jpg' height='350' width='900' border='0' /></a>"; //a linked image
    items[2]="<a href='link.htm'><img src='img/homet.jpg' height='350' width='900' border='0' /></a>"; //a linked image
    items[3]="<a href='link.htm'><img src='img/bed74.jpg' height='350' width='900' border='0' /></a>"; //a linked image
    items[4]="<a href='link.htm'><img src='img/kok.jpg' height='350' width='900' border='0' /></a>"; //a linked image
          
    
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
<form name="apphome.php">
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
       <td style="font-family: serif; font-size: 18; color: #004080;"><b><i>Home Appliances :</i></b></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="air.php" style="font-family: cursive;">Air Conditioner</a> </tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="water.php" style="font-family: cursive;">Water Purifier</a></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="vac.php" style="font-family: cursive;">Vacuum Cleaners</a></td></tr>
       <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td> </tr>
       <tr><td><a href="iron.php" style="font-family: cursive;">Irons</a></td></tr>
       
       
</tr> 
</table>


<img src="img/logo.gif" height="70%" width="65%" style="margin-bottom: 150;"/>

</td>
<td width="70%" align="center">

<table border="0"  width="100%" height="100%">
<tr style="margin-left: 400px;">
<layer id="placeholderlayer"></layer><div id="placeholderdiv"></div>
</tr>
</td>
<td div id="gobutton">
<img src="img/clean.jpg" height="245" width="65%"/>
<br />
<br />
    <h6>Eureka Forbes Vacuum Cleaner</h6>
    <h6>Rs.3299</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" style="margin-right:;">Powerful power plus motor</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" style="margin-right:;">Thermal overload cut out</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
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
$q="select status,price,pro_id from products where pro_id='vc1'";
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
<img src="img/iron.jpg" height="230" width="65%"/>
<br />
<br />
    <h6>Usha Steam iron techne</h6>
    <h6>Rs.2995</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" style="margin-right:;">Anti drip function</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square">Inbuilt overheat protection</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
$q="select status,price,pro_id from products where pro_id='iron2'";
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
<img src="img/iro.jpeg" height="210" width="65%"/>
<br />
<br />
    <h6>Bajaj Majesty Iron</h6>
    <h6>Rs.894</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Non-stick coated</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square">Dry,steam,spray iron</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
    
    </h6><input type="submit" name="b3" value="BUY"/>
</td>
<?php
if(isset($_GET['b3']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='iron1'";
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
<img src="img/ac.jpg" height="250px" width="350"/>
<br />
<br />
    <h6>Godrej split AC</h6>
    <h6>Rs.34990</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >1.5 tonnage</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Air purifier</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    
    </h6>
     <input type="submit" name="b4" value="BUY"/>
</td>
</tr>
<?php
if(isset($_GET['b4']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='ac2'";
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
<img src="img/ac1.jpg" height="299px" width="288"/>
    <h6>Voltas Window Air conditioner</h6>
    <h6>Rs.25290</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >1.5 tonnage</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Auto restart</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </ul>
         <input type="submit" name="b5" value="BUY"/>
    </h6>
</td>
<?php
if(isset($_GET['b5']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='ac3'";
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
<img src="img/kent.jpeg" height="230px" width="250"/>

    <h6>Kent Gold water purifier</h6>
    <h6>Rs.2159</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Non-electrical</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >20 L capacity</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
      <input type="submit" name="b6" value="BUY"/>
    </h6>
</td>
</tr>
<?php
if(isset($_GET['b6']))
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
<tr>
<td div id="gobutton">
<img src="img/ac3.jpg" height="209px" width="300"/>
<br />
<br />
    <h6>Hitachi Split Air conditioner</h6>
    <h6>Rs.42829</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Silent cooling</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >1 tonnage</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Filter clean indicator</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
         </h6>
          <input type="submit" name="b7" value="BUY"/>
</td>
<?php
if(isset($_GET['b7']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='ac1'";
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
<img src="img/vac.jpg" height="209px" width="267"/>
<br />
<br />
    <h6>Karcher Steam cleaner</h6>
    <h6>Rs.19199</h6>
    <br />
    <h6>
    <ul width="40%">
        <li type="square" >Steam cleaning</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li type="square" >Effective on hard surfaces</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </ul>
    </h6>
     <input type="submit" name="b8" value="BUY"/>
</td>
<?php
if(isset($_GET['b8']))
{
    $link=mysql_connect("localhost","root","");
mysql_select_db("stp_2014");
$q="select status,price,pro_id from products where pro_id='vc2'";
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
       
       <tr><td><a href="payments.php">Payments</a> </tr>
       
     </table>
     </td>
     
<td bgcolor="silver">

<table width="80" bgcolor="silver" border="0">
<tr>
       
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