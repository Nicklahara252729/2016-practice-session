<?php
$user='';
$pass='';
session_start();
if(isset($_SESSION['username'])==$user && isset ($_SESSION['password'])== $pass){
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Admin Page</title>
</head>
<body>
<font color=blue><h3>Welcome User : <?php echo $_SESSION['username'];?></font><br>
<a href="menu1.php">Menu 1</a> <a href="menu2.php">Menu 2</a><a href="menu3.php">Menu 3</a>
<p><a href="logout.php">Logout</a></p>
</body>
</html>
<?php
}else{
?><p><font color=blue><h3>Anda tidak berhak</h3></font></p>
<?php
}
?>