<!DOCTYPE html>
<html>
<head>
<title>
	New Posting
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/style.css">
<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>



</head>
<body>

<!--navigasi -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#a">
				<span class="sr-only">Menu Toggle</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a href="#" class="navbar-brand" style="margin-top:-10px;float: left;">
				<img src="<?php echo base_url()."assets/";?>img/logo.png" class="img-thumbnail" width="150px"/>
			</a>
		</div>

		<div class="collapse navbar-collapse" id="a">
			<ul class="nav navbar-nav navbar-right">
				<li><?php echo anchor('home/index',' Log Out','class="glyphicon glyphicon-log-out"');?>
			</ul>
		</div>
	</div>
</nav>


<!--end nav-->
<div class="container ">
	<div class="row">
		<div class="col-md-12 text-center" style="margin-top:100px;">
			<img src="<?php echo base_url()."assets/";?>img/selamat-datang.jpg" class="img-responsive img-full" />	
		</div>
	</div><hr>
</div>

<!--input jasa-->
<div class="container">
	<div class="row well">
		<div class="col-md-2 ">
				<h4><strong> Artikel Jasa <hr/></h4>
				<h4><strong>	
					<?php echo anchor('Jasa/f_add', '<i data-toggle="tooltip" class="fa fa-plus-square" data-placement="top" title="New"> Tambah</i>');?>
					</strong>
				</h4>

				<h4><strong><?php echo anchor('jasa/index', '<i class="fa fa-folder-open" data-toggle="tooltip" data-placement="top" title="Lihat"> Lihat</i>');?>
				</strong>
				</h4>
		</div>
		<div class="col-md-10">
			<table class="table table-condensed">
				<tr class="active"> 
					<td>No</td>
					<td >Tgl</td>
					<td >Judul</td>
					<td >Isi</td>
					<td width="70">Gambar</td>
					<td class="text-center" width="100">Aksi</td>
				</tr>
				<?php $i=1;?>
				<?php foreach($data as $c) {;?>
				<tr class="info"> 
					<td><?php echo $i;?></td>
					<td><?php echo date('d', strtotime($c['tgl']));?> <span><?php echo date('M Y', strtotime($c['tgl']));?></span></td>
					<td><?php echo $c['judul'];?></td>
					<td><?php echo word_limiter( $c['isi'], 5);?></td>
					<td><?php echo img(array('src'=>$c['gmb'], 'class'=>'img-responsive'));?></td>
					<td class="text-center">
						<?php echo anchor('jasa/f_edit/'. $c['id'], '<i data-toggle="tooltip" data-placement="bottom" title="Edit" class="fa fa-edit" >&nbsp;</i>', '');?>
						<?php echo anchor('jasa/proses_delete/'. $c['id'], '<i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> </i>')?>
						
					</td>
				</tr>
				<?php $i++; ?>
				<?php }	;?>

			</table>
		</div>
	</div>
</div>


<!--tambah data smart Home-->
<div class="container">
	<div class="row well">
		<div class="col-md-2 ">
			<div class="">
				<h4><strong> Info Smart Home <hr/>
				<h4><strong>	
					<?php echo anchor('smart/f_add', '<i data-toggle="tooltip" class="fa fa-plus-square" data-placement="top" title="New"> Tambah</i>');?>
				</h4>

				<h4><strong>
					<?php echo anchor('smart', '<i class="fa fa-folder-open" data-toggle="tooltip" data-placement="top" title="Lihat"> Lihat</i>')?>
				</h4>
			</div>
		</div>
		<div class="col-md-10">
			<table class="table table-condensed">
				<tr class="active"> 
					<td>No</td>
					<td >Tgl</td>
					<td >Judul</td>
					<td >Isi</td>
					<td width="70">Gambar</td>
					<td class="text-center" width="100">Aksi</td>
				</tr>
				<?php $a=1;?>
				<?php foreach($data1 as $d) {;?>
				<tr class="info"> 
					<td><?php echo $a;?></td>
					<td><?php echo date('d', strtotime($d['tgl']));?> <span><?php echo date('M Y', strtotime($d['tgl']));?></span></td>
					<td><?php echo $d['judul'];?></td>
					<td><?php echo word_limiter( $d['isi'], 5);?></td>
					<td><?php echo img(array('src'=>$d['gmb'], 'class'=>'img-responsive'));?></td>
					<td class="text-center">
						<?php echo anchor('smart/f_edit/'. $d['id'], '<i data-toggle="tooltip" data-placement="bottom" title="Edit" class="fa fa-edit" >&nbsp;</i>', '');?>
						<?php echo anchor('smart/proses_delete/'. $d['id'], '<i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> </i>')?>
						
					</td>
				</tr>
				<?php $a++; ?>
				<?php }	;?>

			</table>
		</div>
	</div>
</div>

<!--popup tambah data-->
<div class="modal fade" id="tmodal_i_smh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Smart Homes</h4>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
        	<div class="form-group">
	        	<label class="col-md-2">Judul</label>
	        	<div class="col-md-10">
	        		<input type="text" name="" class="form-control" placeholder="Judul content" / >
	        	</div>
        	</div>
        	<div class="form-group">
	        	<label class="col-md-2">isi</label>
	        	<div class="col-md-10">
	        		<textarea class="form-control"></textarea>
	        	</div>
        	</div>
        	<div class="form-group">
	        	<label class="col-md-2">gambar</label>
	        	<div class="col-md-10">
	        		<input type="file" class="btn btn-primary" name="" placeholder="pilih">
	        	</div>
	        	<label class="col-md-2"></label>
	        	<div class="col-md-10">
	        		<input type="file" class="btn btn-primary" name="" placeholder="pilih">
	        	</div>
	        	<label class="col-md-2"></label>
	        	<div class="col-md-10">
	        		<input type="file" class="btn btn-primary" name="" placeholder="pilih">
	        	</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!--edit modal info rumah-->
<div class="modal fade" id="emodal_i_smh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Info Smart Homes</h4>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
        	<div class="form-group">
	        	<label class="col-md-2">Judul</label>
	        	<div class="col-md-10">
	        		<input type="text" name="" class="form-control" placeholder="Judul content" / >
	        	</div>
        	</div>
        	<div class="form-group">
	        	<label class="col-md-2">isi</label>
	        	<div class="col-md-10">
	        		<textarea class="form-control"></textarea>
	        	</div>
        	</div>
        	<div class="form-group">
	        	<label class="col-md-2">gambar</label>
	        	<div class="col-md-10">
	        		<input type="file" class="btn btn-primary" name="" placeholder="pilih">
	        	</div>
	        	<label class="col-md-2"></label>
	        	<div class="col-md-10">
	        		<input type="file" class="btn btn-primary" name="" placeholder="pilih">
	        	</div>
	        	<label class="col-md-2"></label>
	        	<div class="col-md-10">
	        		<input type="file" class="btn btn-primary" name="" placeholder="pilih">
	        	</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
	});
</script>
<!--end footer-->
</body>
</html>