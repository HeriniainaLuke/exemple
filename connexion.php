<?php
$connect = mysql_connect('localhost','root','root') or die ("erreur de connexion"); 
mysql_select_db('ScolariteItu',$connect) or die ("erreur de connexion base"); 
?>