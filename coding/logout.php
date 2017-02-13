<?php
session_start();
if(session_destroy())
{
echo "Sucessfully Logged Out";
}
?>

<html>
<head></head>
<body><br><br><Br>
<div align="center">Sucessfully Loged Out <br> 
<a href="../index.html">Click Here TO Redirect</a></div>

</body>
</html>