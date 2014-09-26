<?php
$ttle = "mysql_connect_tst()";

function testcon(){
$con = mysqli_connect("127.0.0.1", "root", "meggiemoo12", "test");

echo 'function called: ';

if(mysqli_connect_errno($con)){
	echo "connection failed: " . mysqli_connect_error();
}else{
	echo 'connection succesfull';
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title> <?php echo $ttle; ?> </title>
<style type='text/css'>
#head{
	font-family: Arial;
	font-size: 18px;
	text-align: center;
}
</style>
</head>
<body>
<h1 id="head"> connection test running: </h1>

<form action="real.php" method="post">
<input name="uname" type="text" />
<input name="pword" type="password" />
<input type="submit" value="submit" name="subbed" />
</form>
</body>
</html>
