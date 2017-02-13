<?php 
include('db.php');
session_start();
{
    $user=mysql_real_escape_string($_POST['uname']);
    $pass=mysql_real_escape_string($_POST['pswd']);
    $fetch=mysql_query("SELECT uname FROM `login` WHERE uname='$user' and pswd='$pass'");
    $count=mysql_num_rows($fetch);
	$result = mysql_fetch_array($fetch);
    if($count!="")
    {
    
   $_SESSION['login_uname']=$user;
   // echo "Found";
	// echo $result['uname'];
    }
    else
    {
      echo "Not Found";
    }

}
?>



<html>
<head></head>
<body>
<div align="center">Welcome User.....
  <table width="396" border="0">
  <tr>
    <td width="168" height="61">User Name:<?php echo $result['uname'] ?></td>
    <td width="94"><a href="logout.php">LogOut</a></td>
    <td width="120">Main Page</td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      
      <p>SucessFully Loged In</p></td>
    </tr>
  
  </table>
</div>

</body>
</html>