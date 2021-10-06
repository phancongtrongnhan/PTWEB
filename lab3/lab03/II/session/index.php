<html>
<head>
<title>Session</title>
</head>
<body>
<?php
session_start();
$_SESSION["name"]="Anil";
$_SESSION["Password"]="nil";
echo "set session";
?>
<br/>
<a href="getsession.php">Go to getsession</a>
</body>
</html>
