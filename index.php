<?php

$db=new PDO("mysql:host=localhost;dbname=dwm;cahset=uf8","root","");
$sql="select* from users";
$stmt=$db->query($sql);
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($rows);
//die();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Document</title>
	</head>
	<body>
	<center><h1>Users</h1></center>
	</body>
	<form action="add.php">
		<input type="text" name="fnom">
		<input type="text" name="email">
		<button>envoyer</button>
	</form>
	<table border="1" width="100%">
	
		<tr><th>ID</th><th>NOM</th><th>EMAIL</th><th>SUPPRIMER</th><th>MODIFIER</th></tr>
		<?php foreach($rows as $row):?>
			<tr> 
				<td align="right"><?=$row['id']?></td>
				<td><?=$row['nom']?></td>
				<td><?=$row['email']?></td>
				<td ><a href="del.php?idd=<?=$row['id']?>">supprimer</a></td>
				<td><a href="update.php?idd=<?=$row['id']?>">modifier</a></td>
			</tr>
		
		<?php endforeach; ?>
	</table>
	</body>
</html>