<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Student logging</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Student logging</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/Users/insert">
				 <div class="form-group">
					<label>name:</label>
					<input type="text" class="form-control" name="name"> 
				</div> 
				<div class="form-group">
					<label>email:</label>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>school:</label>
					<input type="text" class="form-control" name="school">
				</div>
				<div class="form-group">
					<label>grade:</label>
					<input type="text" class="form-control" name="grade">
				</div>
				<div class="form-group">
					<label>p_name:</label>
					<input type="text" class="form-control" name="p_name">
				</div>
				<div class="form-group">
					<label>p_no:</label>
					<input type="text" class="form-control" name="p_no">
				</div>
				
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>