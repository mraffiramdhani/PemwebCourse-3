
<?php 
include 'controller.php'; 
$ctrl = new DatabaseController();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemweb Course 3 | Edit Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="jumbotron col-md-6 offset-md-3" style="margin-top: 50px;">
		<h1 class="display-3">Edit This Person</h1>
		<form method="post" action="">
			<fieldset>
				<?php foreach($ctrl->EditData($_GET['id']) as $data){ ?>
					<input type="text" name="idholder" value="<?php echo $data['id']; ?>" hidden>
				<div class="form-group">
					<label for="exampleInputName1">Full Name</label>
					<input type="text" class="form-control" id="exampleInputName1" value="<?php echo $data['nama']; ?>" name="nameInput" placeholder="Enter email" required>
				</div>
				<div class="form-group">
					<label for="exampleInputAge1">Age</label>
					<input type="number" class="form-control" id="exampleInputAge1" value="<?php echo $data['umur']; ?>" name="ageInput"  required>
				</div>
				<div class="form-group">
					<label for="exampleInputAddress1">Address</label>
					<textarea class="form-control" id="exampleInputAddress1" name="addressInput" required><?php echo $data['alamat']; ?></textarea>
				</div>
				</fieldset>
				<button type="submit" name="update" class="btn btn-primary">Submit</button>
				<button type="button" name="cancel" class="btn btn-default" onclick="homePage()">Cancel</button>
			<?php } ?>
			</fieldset>
		</form>
	</div>
</div>
<script type="text/javascript" src="js/control.js"></script>
</body>
</html>