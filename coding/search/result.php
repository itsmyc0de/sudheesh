<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../Ghss ambalamoola/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body><center>
  <h2>User Identification System<br />
</h2>
  <h4>User Details....</h4>
<h4>&nbsp;</h4></center>
<?php
$id = $_REQUEST['id'];
$link=mysql_connect('mysql6.000webhost.com','a8726938_uid','sudheesh123456789') or die("Cannot connect to the database");
mysql_select_db("a8726938_uid", $link) or die ("cannot cnt to db");
$query = "SELECT * FROM create_acc WHERE id='".$id."'";
$resource=mysql_query($query , $link) or die ("error occured");
$result = mysql_fetch_array($resource);


?>

<center>

<table width="803" border="1" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="2">Name :<center><h4><?php echo $result['name'] ?></h4></center></td>
  </tr>
  <tr>
    <td colspan="2" align="center">SCHOOL DETAILS : </td>
  </tr>
  <tr>
    <td width="364">E mail :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['email'] ?></td>
    <td width="398">User Name:&nbsp;&nbsp;&nbsp;<?php echo $result['uname']?></td>
  </tr>
  <tr>
    <td>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['ph']?></td>
    <td>Department :&nbsp;<?php echo $result['dept']?></td>
  </tr>
  <tr>
    <td>Salary:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['salary']?></td>
    <td>&nbsp;</td>
  </tr>
</table>
<button class="btn-success"><a href="index.php">Go back</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-danger"><a href="http://sudheesh.comli.com">Back to main</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-small"  onclick="window.print() ">Print the current document</button>
</center>
</body>
</html>