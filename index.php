<!DOCTYPE html>
<html>
<head>
	<title>ALI ILHAM</title>
</head>
<body>
<?php
require_once 'coba.php';
$manusia = new manusia('budi','Bandung','11-RPL','Menikah');
 	echo "<center>Namanya : ".$manusia->get_nama();
 	echo "<br>Tempat Lahir : ".$manusia->get_ttl();
 	echo "<br>Kelas : ".$manusia->get_kelas();
 	echo "<br>Status : ".$manusia->get_status();
 	?>
</body>
</html>