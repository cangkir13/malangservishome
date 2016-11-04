<!DOCTYPE html>
<html>
<head>
<title>Jasa Kami</title>
<meta charset="utf-8">
<meta name="viewport" ct="width=deivice-width,initial=1" />
<meta http-equiv="X-UA-Compatible" ct="IE=Edge,Chrome=1" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/style.css">



</head>

<body>
<!--navigation-->
<?php $this->load->view('menu');?>
<!--end popup-->

<!--foto-->
<div id="jasa">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<img src="<?php echo base_url()."assets/";?>img/kontruksi/kontraktor.jpg" class="img-responsive img-full" />	
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
				<h4 style="margin-bottom:-12px;">Welcome To Our Serve</h4><hr>
				<h2 style="margin-top:-12px;">Can I help you?</h2>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

<!--end foto-->

<!--ct-->

	<div class="container">
<?php foreach($data as $c) {;?>	
		<div class="row">
			<div class="col-md-6">
				<?php echo img(array('src'=>$c['gmb'], 'class'=>'img-responsive img-full'));?><br />
			</div>
			<div class="col-md-6">
				<div >
					<h2><?php echo $c['judul'];?></h2>
					<p class="text-left" style="color:white;">
						<?php echo date('d', strtotime($c['tgl']));?> <span><?php echo date('M Y', strtotime($c['tgl']));?></span>
					</p>
					<hr/>
					<h4 style="margin-top:5px;" class="text-justify">
						<?php echo $c['isi'];?>
					</h4>	
					<hr/>
				</div>
			</div>
		</div>
		<?php };?>
	</div>


<!--end contain smart home-->

<!--footer-->
<?php $this->load->view('footer_2');?>

<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#video").on("hidden.bs.modal", function () {
		var _this = this, youtubeSrc = $(_this).find("iframe").attr("src");

		if($(_this).find("iframe").length > 0) {
			$(_this).find("iframe").attr("src", "");
			$(_this).find("iframe").attr("src", youtubeSrc);
		}
	});
});

$(document).ready(function(){
	$("#pilih").click(function(){
		$("#item").toggle("slow");
	});
})
</script>
</body>
</html>