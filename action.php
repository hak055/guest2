<?php
	include ("dbconnect.php");

	// получаем переменные из формы
	$username=htmlspecialchars($_REQUEST['username']);
	$msg=htmlspecialchars($_REQUEST['msg']);
	$action=$_REQUEST['action'];
	
	if ($action=="add")
	{
		// добавление данных в БД 
		$sql="INSERT INTO gk1(username, dt, msg) VALUES ('$username', NOW(), '$msg')";
		$r=mysql_query ($sql);
	}
	
	if ($action=="delete")
	{
		// удаление базы гостевой
		$sql="DELETE FROM gb";
		$r=mysql_query($sql);
	}
	
	header("Location: index.php");
?>
