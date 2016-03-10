<style>
body
#rotate
{
    top: 20%;
    height:200;
    margin-left: 70px;
}
#rotate_img
{
position: absolute; 
   
}



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
        
        var img1=new Image();
        img1.src="kkk.jpg";
        var img2=new Image();
        img2.src="89.jpg";
        var img3=new Image();
        img3.src="ppoo.jpg";
        var img4=new Image();
        img4.src="ooo.jpg";
         var img5=new Image();
        img5.src="aap.jpg";
        var img6=new Image();
        img6.src="131.jpg";
        
            </script>
<style>
a
{
    color:black;
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
 <td align="center"><a href="home21.php">BACK</a></td>
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
</td>-
<td align="center"><a href="p_login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="p_registration.php">Sign Up</a></td>
</tr>
</table>
</td>
</tr>
</table><br /><br />
<link rel="stylesheet" href="design.css" type="text/css" />
    <script type="text/javascript" src="drop.js"></script>
<table align="center" border="0" width="100%" bgcolor="#0000A0" >
<tr ><td align="center" width="60" height="20"></td>
<td width="80"></td>
<td width="20" height="20">

<table border="0"><tr>

<td bgcolor="#6464FF" height="20">

<dl class="dropdown" style="background-position: center;" style="border-spacing: inherit;">
    <dt id="one-ddheader" onmouseover="ddMenu('one',1)" onmouseout="ddMenu('one',-1)">Mobiles</dt>
    <dd id="one-ddcontent" onmouseover="cancelHide('one')" onmouseout="ddMenu('one',-1)">
    <ul>
    <li><a href="headphone.php" class="separator">Headphones</a></li>
    <li><a href="batteries.php" class="separator">Memory Cards</a></li>
    </ul>   
    </dd>
    </dl></td>
    
     
<td bgcolor="#6464FF" style="background-position: center;" style="border-spacing: inherit;">
    <dl class="dropdown">
    <dt id="two-ddheader" onmouseover="ddMenu('two',1)" onmouseout="ddMenu('two',-1)">Computers</dt>
    <dd id="two-ddcontent" onmouseover="cancelHide('two')" onmouseout="ddMenu('two',-1)">
    <ul>
    <li><a href="externalhd.php" class="separator">External Hard Disk</a></li>
    <li><a href="pendrive.php" class="separator">Pendrive</a></li>
    <li><a href="printer.php" class="separator">Printer</a></li>
    <li><a href="mouse.php" class="separator">Mouse</a></li>
    </ul>
    </dd>
    </dl></td>
    
    
    <td bgcolor="#6464FF">

 <dl class="dropdown" style="background-position: center;" style="border-spacing: inherit;">
    <dt id="three-ddheader" onmouseover="ddMenu('three',1)" onmouseout="ddMenu('three',-1)">Cameras </dt>
    <dd id="three-ddcontent" onmouseover="cancelHide('three')" onmouseout="ddMenu('three',-1)">
    <ul>
  <li><a href="lenses.php" class="separator">Lenses</a></li>
    <li><a href="camerabags.php" class="separator">Camera Bags</a></li>
    <li><a href="tripods.php" class="separator">Tripods</a></li>
   
     
    </ul>
    </dd>
    </dl>
    </td>
    <td bgcolor="#6464FF">
    
 <dl class="dropdown" style="background-position: center;" style="border-spacing: inherit;">
    <dt id="four-ddheader" onmouseover="ddMenu('four',1)" onmouseout="ddMenu('four',-1)">Audio</dt>
    <dd id="four-ddcontent" onmouseover="cancelHide('four')" onmouseout="ddMenu('four',-1)">
    <ul>
   <li><a href="mp3.php" class="separator">MP3 Players</a></li>
    <li><a href="ipods.php" class="separator">Ipods</a></li>
    <li><a href="speaker.php" class="separator">Speakers</a></li>
    <li><a href="video.php" class="separator">Video Players</a></li>
     
    </ul>
    </dd>
    </dl></td>
    </tr></table></td></tr> </table>
<table border="0">
<tr>
<td><img src="adp.jpg"  width="200" height="800"/></td>
<td align="center">
  <table border="0" cellspacing="25" align="center">
  <tr> 
  <td>
      <div id="rotate" class="rotate" style="height:350px; width:700px;" >
     <img src="kkk.jpg" name="slide" width="700px" height="350px" style=" border-radius:20px" align="center"/>
      <script type="text/javascript">
         var step=1;
         function slideit()
         {
             document.slide.src=eval("img"+step+".src");
             if(step<5)
                 step++;
             else
                 step=1;
             setTimeout("slideit()",3000);
         }
         slideit(); 
            </script>
            
              </td></tr>
<br />
<tr>
              
<td width="70%" height="50" align="center" >
<table align="center" border="0" width="600" cellspacing="2" bgcolor="#400040"><tr><td align="center">
<input id="gobutton"  type="submit" name="btn1" value="ELECTRONICS" />
</td>
</tr>
</table><br />
<table>
<tr>
<td><marquee><img src="cam.jpg" width="300" height="200"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="lapi.jpg" width="300" height="200"/>&nbsp;&nbsp;<img src="des.jpg" height="200"  width="300"/></marquee></td>
</tr> </table>

              </td></tr>
              </table></td>
<td >
<table border="0" align="right" width="250" height="200">
            <tr  ><td ><img  src="14.jpg" width="280" height="400"/></td>
            </tr>
            </table>
<table border="0" align="right" width="250" height="400" >
            <tr>
            <td><img  src="piv.PNG"/></td>
            </tr>
            <tr>
            <td><img  src="81.jpg"/></td>
            </tr>
            </table>
            
</td>
</tr> </table>
<hr style="background-color: black;" />
<table border="0" align="center" width="100%" bgcolor="silver">
<tr><td>
<table border="0" align="center"  bgcolor="silver">
<tr>

<td>
<table width="30%"  border="0">
     <tr>
       <td>Help</td></tr>
       <tr><td><a href="Payments.php">Payments</a> </tr>
       <tr><td><a href="Savecards.php">Savecards</a></td></tr>
       <tr><td><a href="cancel.php">Cancellation and Returns</a></td>
      
     </table>
     </td>
     
<td bgcolor="silver">

<table width="80" bgcolor="silver" border="0">
<tr>
       <td>Policies</td></tr>
       <tr><td><a href="home1.php">Home</a></td> </tr>
       <tr><td><a href="private.php">Private Policies</a></td></tr>
        <tr><td><a href="contact.php">Contact Us</a></td></tr>
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