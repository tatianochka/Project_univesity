<?php 
	$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
	$query = "SELECT ID_User as `id`, Name as `name` FROM Users WHERE Email = '".$_REQUEST['email']."' AND PhoneNumber = ".$_REQUEST['phone'];
	$ID_User = $dbConnector->query($query)->fetch_object()->id;
	if($ID_User && !$_SESSION['ID_User']) {
		session_start();
		$_SESSION['ID_User'] = $ID_User;
		$_SESSION['email'] = $_REQUEST['email'];
		$_SESSION['phone'] = $_REQUEST['phone'];
		$_SESSION['name'] = $dbConnector->query($query)->fetch_object()->name;
	} elseif(!$ID_User) {
		# вывести какое то сообщение что пользователя нет
	} elseif($_SESSION['ID_User']) {
		# вывести сообщение что пользователь залогинен(какой то пользователь не обьязательно тот чьи данные вводились)
	} 
	require_once('/personal_area.php');
?>