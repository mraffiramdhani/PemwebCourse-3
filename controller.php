<?php

	class DatabaseController
	{

		var $server = "localhost";
		var $user = "root";
		var $pass = "";
		var $db_name = "pemweb";


		
		function InsertData($nama, $umur, $alamat)
		{
			$kon = mysqli_connect($this->server, $this->user, $this->pass, $this->db_name);
			mysqli_query($kon,"insert into person(nama,umur,alamat) values('$nama', '$umur', '$alamat')");
		}

		function DeleteData($id)
		{
			$kon = mysqli_connect($this->server, $this->user, $this->pass, $this->db_name);
			mysqli_query($kon,"delete from person where id = '$id'");
		}

		function EditData($id)
		{
			$kon = mysqli_connect($this->server, $this->user, $this->pass, $this->db_name);
			$preData = mysqli_query($kon,"select * from person where id = '$id'");
			while($data = mysqli_fetch_array($preData)){
				$postData[] = $data;
			}
			return $postData;
		}

		function UpdateData($id,$nama,$umur,$alamat)
		{
			$kon = mysqli_connect($this->server, $this->user, $this->pass, $this->db_name);
			mysqli_query($kon,"update person set nama='$nama', umur = '$umur', alamat = '$alamat' where id = '$id'");
		}

		function ShowData()
		{
			$kon = mysqli_connect($this->server, $this->user, $this->pass, $this->db_name);
			$preData = mysqli_query($kon,"select * from person");
			while($data = mysqli_fetch_array($preData)){
				$postData[] = $data;
			}
			return $postData;
		}

	}


$proc = new DatabaseController();
	if(isset($_POST['add'])){
		$proc->InsertData($_POST['nameInput'], $_POST['ageInput'], $_POST['addressInput']);
		header("Location:showdata.php");
	}
	elseif(isset($_POST['update'])){
		$proc->UpdateData($_POST['idholder'],$_POST['nameInput'], $_POST['ageInput'], $_POST['addressInput']);
		header("Location:showdata.php");
	}

?>