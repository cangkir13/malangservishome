<!DOCTYPE html>
<html>
<head>
<title>Contact-Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=deivice-width,initial=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/style.css">
<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>


</head>
<body>
<!--navigation-->
<?php $this->load->view('menu');?>
<!--end popup-->

<!--peta-->

<div class="container-fluid">
	<div class="row" style="margin-top:70px;">
		<div id="peta" class="embed-responsive embed-responsive-16by9">
			<iframe style="pointer-events: none;" class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31614.499766503304!2d112.64965029999995!3d-7.914648699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62822063dc2fb%3A0x78879446481a4da2!2sMalang%2C+Malang+City%2C+East+Java!5e0!3m2!1sen!2sid!4v1473094208451" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div><hr>
</div>
<!--end peta-->

<!--coment-->
<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Contact Us</h1><br>
			</div>
			<div class="col-md-5 col-sm-1">
				<img src="<?php echo base_url()."assets/";?>img/rumah/1.jpg" class="img-responsive img-full img-thumbnail"><br><br>
			</div>
			
			<div class="col-md-7 col-sm-9">
				<h4 align="justify" class="text-center">Ini perusahaan Kami yang berdiri di atas tanah seluas 10 H</h4>
				<h4 align="justify"></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label><strong>iki diisi bor</strong></label>
				<input type="text" class="form-control" name="" placeholder="Isi Jeneng"><br>
			</div>
			<div class="col-md-6">
				<label><strong>iki jeneng bro</strong></label>
				<input type="text" class="form-control" name="" placeholder="Isi Email"><br>
			</div>
			<div class="col-md-12">
				<label><strong>Coment disini bor</strong></label>
				<textarea class="form-control" placeholder="Komene bro" rows="2"></textarea><br>
			</div>
			<div class="col-md-12">
			<button class="btn btn-primary">send</button>
			</div>
		</div><br>
	</div>
</div>	
<!--end coment-->

<!--footer-->
<?php $this->load->view('footer_2');?>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$("#peta").click(function () {
				$("#peta iframe").css("pointer-events", "auto");
			});
		});
	</script>
</body>
</html>