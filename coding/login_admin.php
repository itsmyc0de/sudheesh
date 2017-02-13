<?php 
include('db.php');
session_start();
{
    $user=mysql_real_escape_string($_POST['uname']);
    $pass=mysql_real_escape_string($_POST['pswd']);
    $fetch=mysql_query("SELECT uname FROM `admin` WHERE uname='$user' and pswd='$pass'");
	 $fetch1=mysql_query("SELECT * FROM create_acc");
      $result1 = mysql_fetch_array($fetch1);
    $count=mysql_num_rows($fetch);
	$result = mysql_fetch_array($fetch);
	$fetch1=mysql_query("SELECT * FROM create_acc");$result1 = mysql_fetch_array($fetch1);
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
  <table width="602" border="0">
  <tr>
    <td height="61" colspan="3">User Name:<?php echo $result['uname'] ?></td>
    <td width="122"><a href="logout.php">LogOut</a></td>
    <td width="132">Main Page</td>
  </tr>
  <tr>
    <td height="58" align="center" valign="middle">Name</td>
    <td align="center" valign="middle">E-mail</td>
    <td align="center" valign="middle">Phone</td>
    <td height="58" align="center" valign="middle">Department</td>
    <td height="58" align="center" valign="middle">Salary</td>
  </tr>
  <tr>
    <td width="105" height="58" align="center" valign="middle"><?php echo $result1['name'] ?></td>
    <td width="104" align="center" valign="middle"><?php echo $result1['email'] ?></td>
    <td width="117" align="center" valign="middle"><?php echo $result1['ph'] ?></td>
    <td height="58" align="center" valign="middle"><?php echo $result1['dept'] ?></td>
    <td height="58" align="center" valign="middle"><?php echo $result1['salary'] ?></td>
    </tr>
  
  </table>
</div>

</body>
</html>