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
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($students); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/Users/update/<?php echo $id; ?>">
				<div class="form-group">
					<label>name:</label>
					<input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
				</div>
				<div class="form-group">
					<label>email:</label>
					<input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
				</div>
				<div class="form-group">
					<label>school:</label>
					<input type="text" class="form-control" value="<?php echo $school; ?>" name="school">
				</div>
				<div class="form-group">
					<label>grade:</label>
					<input type="text" class="form-control" value="<?php echo $grade; ?>" name="grade">
				</div>
				<div class="form-group">
					<label>p_name:</label>
					<input type="text" class="form-control" value="<?php echo $p_name; ?>" name="p_name">
				</div>
				<div class="form-group">
					<label>p_no:</label>
					<input type="text" class="form-control" value="<?php echo $p_no; ?>" name="p_no">
				</div>
				
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>