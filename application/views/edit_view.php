<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Informasi LAB</title>

	
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="<?php echo base_url()?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- DataTables CSS -->
	<link href="<?php echo base_url()?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="<?php echo base_url()?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url()?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!--update data-->

		<div class="col-lg-6 col-lg-offset-3"> <br>
        <div class="well bs-component">
					<div class="modal-header">
						<a href="<?php echo site_url('admin/login')?>"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
						<h4 class="modal-title"> Update Data Admin</h4>
					</div>
					<form action="<?php echo site_url('admin/admin_update/'.$b->id)?>" method="post" enctype="multipart/form-data">
						<fieldset>
						<div class="modal-body" id="updateAdmin">
							<div class="form-group">
								<label class="control-label" for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" value="<?php echo $b->username; ?>" required=""></input>
								<span class="text-danger"><?php echo form_error("username"); ?></span>
							</div>
							<div class="form-group">
								<label class="control-label" for="password">Password</label>
								<input type="text" name="password" class="form-control" id="password" value="<?php echo $b->password; ?>" required=""></input>
								<span class="text-danger"><?php echo form_error("password"); ?></span>
							</div>
							<div class="form-group">
								<label class="control-label" for="level">Level</label>
								<input type="text" name="level" class="form-control" id="level" value="<?php echo $b->level; ?>" required=""></input>
								<span class="text-danger"><?php echo form_error("level"); ?></span>
							</div>

							<div class="modal-footer">
								<button type="reset" class="btn btn-danger">Reset</button>
								<input type="hidden" name="hidden_id" value="<?php echo $b->id; ?>"></input>
								<input type="submit" class="btn btn-success" name="updateAdmin" value="Update"></input>
							</div>
						</div>
						</fieldset>
					</form>
				</div>
			</div>
		

	

	<!-- jQuery -->
	<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url()?>vendor/metisMenu/metisMenu.min.js"></script>

	<!-- DataTables JavaScript -->
	<script src="<?php echo base_url()?>vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>vendor/datatables-responsive/dataTables.responsive.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->


</body>

</html>
