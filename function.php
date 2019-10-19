<?php

include 'controller.php';

$aksi = $_GET['aksi'];
$proc = new DatabaseController();
	if($aksi = "delete"){
		$proc->DeleteData($_GET['id']);
		header("Location:showdata.php");
	}

?>