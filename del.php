<?php
$id=$_GET['idd'];
$db=new PDO("mysql:host=localhost;dbname=dwm;cahset=uf8","root","");
$sql="delete from users where id=$id";
$db->exec($sql);

header('location:index.php');
?>
