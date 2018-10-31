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
				<a href="<?php echo site_url('admin/tugasakhir')?>"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
				<h4 class="modal-title"> Update Data Dosen</h4>
			</div>
			<form action="<?php echo site_url('admin/<?php echo $a; ?>/'.$b->id_ta)?>" method="post" enctype="multipart/form-data">
				<fieldset>
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label" for="judul_ta">Judul TA</label>
							<input type="text" name="judul_ta" class="form-control" id="judul_ta" value="<?php echo $b->judul_ta; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("judul_ta"); ?></span>
						</div>
						<div class="form-group">
							<label class="control-label" for="latarbelakang">Latar Belakang</label>
							<input type="Message" name="latarbelakang" class="form-control" id="latarbelakang" value="<?php echo $b->latarbelakang; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("latarbelakang"); ?></span>
						</div>
						<div class="form-group">
							<label class="control-label" for="abstract">Abstract</label>
							<input type="Message" name="abstract" class="form-control" id="abstract" value="<?php echo $b->abstract; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("abstract"); ?></span>
						</div>
						<div class="form-group">
							<label class="control-label" for="tujuan">Tujuan</label>
							<input type="message" name="tujuan" class="form-control" id="tujuan" value="<?php echo $b->tujuan; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("tujuan"); ?></span>
						</div>
						<div class="form-group">
							<label class="control-label" for="penulis1">Penulis1</label>
							<input type="text" name="penulis1" class="form-control" id="penulis1" value="<?php echo $b->penulis1; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("penulis1"); ?></span>
						</div>
						<div class="form-group">
							<label class="control-label" for="penulis2">Penulis2</label>
							<input type="text" name="penulis2" class="form-control" id="penulis2" value="<?php echo $b->penulis2; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("penulis2"); ?></span>
						</div>
						<div class="form-group">
							<label class="control-label" for="pembimbing1">Pembimbing1</label>
							<input type="text" name="pembimbing1" class="form-control" id="pembimbing1" value="<?php echo $b->pembimbing1; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("pembimbing1"); ?></span>
						</div>
						<div class="form-group">
							<label class="control-label" for="pembimbing2">Pembimbing2</label>
							<input type="text" name="pembimbing2" class="form-control" id="pembimbing2" value="<?php echo $b->pembimbing2; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("pembimbing2"); ?></span>
						</div>
						<div class="form-group">
							<label class="control-label" for="gambar_ta">Gambar TA</label>
							<input type="file" name="gambar_ta" class="form-control" id="gambar_ta" value="<?php echo $b->gambar_ta; ?>" required=""></input>
							<span class="text-danger"><?php echo form_error("gambar_ta"); ?></span>
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-danger">Reset</button>
							<input type="hidden" name="hidden_id" value="<?php echo $b->id_ta; ?>"></input>
							<input type="submit" class="btn btn-success" name="updateData" value="Update"></input>
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
