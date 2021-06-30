<?php

$id=$_GET['idd'];
//$n=$_GET['nom'];
//$e=$_GET['email'];
$db=new PDO("mysql:host=localhost;dbname=dwm;cahset=uf8","root","");
$sql= "SELECT * FROM users WHERE id=?";

$stmt=$db->prepare($sql);
$stmt->bindValue(1,$id,PDO::PARAM_INT);
$stmt->execute();
$row =$stmt->fetch(PDO::FETCH_OBJ);

//if(!$row){
	//header('location:index.php');
//}

?>

<!doctype html>
<html lang="en">
  <head>
	<meta charset="uf8"/>
	<title>Document</title>
  </head>
 <body>
	<form action="save.php">
		<input type="hidden" name="idd" placeholder="Id" value="<?=$id?>">
		<input type="text" name="nom" placeholder="Nom" value="<?=$row->nom?>">
		<input type="text" name="email" placeholder="Email" value="<?=$row->email?>">
		<button>enregistrer</button>
	</form>

	
 </body>
</html>

