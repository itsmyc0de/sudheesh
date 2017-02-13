<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$uname=$_REQUEST['uname'];
$pswd=$_REQUEST['pswd'];
$ph=$_REQUEST['ph'];
$dept=$_REQUEST['dept'];
$native=$_REQUEST['native'];
$salary=$_REQUEST['salary'];



$link=mysql_connect('mysql6.000webhost.com','a8726938_uid','sudheesh123456789') or die("Cannot connect to the database");
mysql_select_db("a8726938_uid" , $link) or die ("cannot cnt to db");

$query = "INSERT INTO  `create_acc` (name,email,uname , pswd ,ph ,dept,native,salary) values('".$name."','".$email."','".$uname."' , '".$pswd."' , '".$ph."' ,'".$dept."','".$native."','".$salary."')";

if (!mysql_query($query, $link))
{
	die ("error");
}
else
{
	echo "sucess";
}




?>

<html>
<head></head>
<body>
<div align="center">Welcome User.....
  <table width="562" border="0">
  <tr>
    <td width="238" height="61">Succesfully inserted Into Database</td>
    <td width="168" align="center" valign="middle"><a href="create.html">Back</a></td>
    <td width="142" align="center" valign="middle"><a href="../index.html">Main Page</a></td>
  </tr>
  
  </table>
</div>

</body>
</html>