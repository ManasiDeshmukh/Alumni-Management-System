<!DOCTYPE html>
<html>
<head>
	<title>Chat application</title>
	<link rel="stylesheet"   href="css/style6.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="text-center" style="margin-top: 150px; padding-top: 0;">Welcome to Chatroom</h2>
		<hr>
		<?php
			{
				session_start();
				require("db/users.php");
				$objUser = new users;
				$objUser->setName($_SESSION['uname']);
				$objUser->setLoginStatus(1);
			 	$objUser->setLastLogin(date('Y-m-d h:i:s'));
			 	$userData = $objUser->getUserByEmail();
			 	if(is_array($userData) && count($userData)>0) {
			 		$objUser->setId($userData['id']);
			 		if($objUser->updateLoginStatus()) {
			 			echo "User login..";
			 			$_SESSION['user'][$userData['id']] = $userData;
			 			header("location: chatroom.php");
			 		} else {
			 			echo "Failed to login.";
			 		}
			 	} else {
				 	if($objUser->save()) {
				 		$lastId = $objUser->dbConn->lastInsertId();
				 		$objUser->setId($lastId);
						$_SESSION['user'][$lastId] = [
							'id' => $objUser->getId(),
							'name' => $objUser->getName(),
							'email'=> $objUser->getEmail(),
							'status'=>$objUser->getLoginStatus(),
							'last_login'=> $objUser->getLastLogin()
						];

				 		echo "User Registred..";
				 		header("location: chatroom.php");
				 	} else {
				 		echo "Failed..";
				 	}
				 }
			}
		 ?>
		 <center>

</body>
</html>
