<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Student logging</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>index.php/Users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>school</th>
						<th>grade</th>
						<th>p_name</th>
						<th>p_no</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($students as $user){
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->name; ?></td>
							<td><?php echo $user->email; ?></td>
							<td><?php echo $user->school; ?></td>
							<td><?php echo $user->grade; ?></td>
							<td><?php echo $user->p_name; ?></td>
							<td><?php echo $user->p_no; ?></td>
							<!-- <td><?php echo $user->course; ?></td> -->
							<td><a href="<?php echo base_url(); ?>index.php/Users/edit/<?php echo $user->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/Users/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>