<?php

$i=$_GET['idd'];
$n=$_GET['nom'];
$e=$_GET['email'];
$db=new PDO("mysql:host=localhost;dbname=dwm;cahset=uf8","root","");
$sql= "UPDATE users SET nom=:n, email=:e WHERE id=:i";

$stmt=$db->prepare($sql);
$stmt->bindValue('n',$n,PDO::PARAM_STR);
$stmt->bindValue('e',$e,PDO::PARAM_STR);
$stmt->bindValue('i',$i,PDO::PARAM_INT);
$stmt->execute();


//if(!$row){
header('location:index.php');
//}

?>