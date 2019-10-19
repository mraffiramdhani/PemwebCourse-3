
<?php 
include 'controller.php'; 
$ctrl = new DatabaseController();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemweb Course 3 | Show Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="jumbotron col-md-6 offset-md-3" style="margin-top: 50px;">
		<h1 class="display-3">Person List</h1>
		<table class="table table-strip">
			<tr>
				<th>No.</th>
				<th>Full Name</th>
				<th>Age</th>
				<th>Address</th>
				<th>Option</th>
			</tr>
			<?php 

			if($ctrl->ShowData() == false){
			?>
			<tr>
				<td colspan="5" style="text-align: center;">No Data Found</td>
			</tr>
			<?php
			}else{

			$no = 1;
			foreach($ctrl->ShowData() as $data){ 
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['umur']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><a href="editdata.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a> | <a href="function.php?id=<?php echo $data['id']; ?>&aksi=delete" class="btn btn-danger">Delete</a></td>
			</tr>
		<?php }} ?>
		</table>
		<a href="insertdata.php" class="btn btn-primary">Insert New Person</a>
	</div>
</div>

</body>
</html>