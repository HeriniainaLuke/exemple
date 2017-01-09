<?php 
include('connexion.php');
$result = mysql_query("select Numero,Nom,Ville_Origine from etudiant"); 
//$result2 = mysql_query("select article,dealer,price from shop"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Document sans nom</title>
</head>

<body>
	<h1>Liste des etudiants</h1>
	<ul>
		<?php while ($row = mysql_fetch_array($result)){ ?>
		<li><?php echo $row["Numero"]?> - <?php echo $row["Nom"]?> - <?php echo $row["Ville_Origine"]?> </li>
		<?php } ?>
	</ul>
</body>
</html>
<?php
mysql_close(); 
?>