<?php
include('db.php');
session_start();
$check=$_SESSION['login_uname'];
$session=mysql_query("SELECT uname FROM `login` WHERE uname='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['uname'];
if(!isset($login_session))
{
header("Location:index.php");
}
?>