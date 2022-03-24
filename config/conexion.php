<?php
function conectar(){
	$user="root";
	$pass="";
	$server="";
	$db="panaderia";
	$con=mysql_connect($server,$user,$pass) or die("Error al conectar a la base de datod".mysql_error());
	mysql_select_db($db,$con);
	return $con;
}