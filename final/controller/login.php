<?php
@session_start ();
include_once 'Connection.php';
include_once '../dao/LoginDao.php';

$Connection = new Connection ();
$db = $Connection->getConnection ();
$loginDao = new LoginDao ( $db );

$actionType = $_REQUEST ['actionType'];
if (isset ( $actionType ) && $actionType == "sitelogin") {
	$email_id = $_REQUEST ['email_id'];
	$password = $_REQUEST ['password'];			
		$_SESSION ['LoggedId'] = $isValidUser->id;
}
?>