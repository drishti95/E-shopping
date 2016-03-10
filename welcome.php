<body bgcolor="#C8FDC9">

<h1>
<font size="100" color="blue"> "CONGRATUATIONS!! </font>
</h1>
<?php
  session_start();
if(isset($_SESSION['x']))
{
    $u=$_SESSION['x'];

} 
 echo "<font color='maroon'>You have successfully signed up . Ur User Id is:"  .$u;
 echo "Please take note of this for future reference.. You will login using this henceforth. </font>"
   
?> 
<form>
<input type="submit" name="btn_nav" value="Login"/>
<?php
if(isset($_GET['btn_nav']))
{
    header("location:p_login.php");
}
?>

</form>
 </body>