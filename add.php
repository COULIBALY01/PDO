<?php

$n=$_GET['nom'];
$e=$_GET['email'];

$db=new PDO("mysql:host=localhost;dbname=dwm;cahset=uf8","root","");

$sql="INSERT INTO users VALUES ('','$n','$e')";

//$stmt=$db->prepare($sql);
////$stmt->bindValue(1,$n,PDO::PARAM_STR);
//$stmt->bindValue(2,$e,PDO::PARAM_STR);

//$stmt->execute($sql);
$db->exec($sql);

header('location:index.php');
?>