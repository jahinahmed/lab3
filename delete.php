<?php

	include_once('functions.php');

	if(isset($_GET['id'])){

		$status = deleteUser($_GET['id']);
		if($status){
			header('location:userlist.php');
		}else{
			echo "Error: try again";
		}
	}else{
		echo "invalid request";
	}

?>