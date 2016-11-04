<!DOCTYPE html>
<html>
<head>
<title>Smart Homes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=deivice-width,initial=1" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/lightbox.min.css">


</head>
<body>
<!--navigation-->
<?php $this->load->view('menu');?>
<!--end popup-->

<!--foto-->
<div id="smart_home">
	<div class="container">
		<div class="row">
			<!--<img src="<?php echo base_url()."assets/";?>img/smart-home-article.jpg" class="img-responsive img-full" />	-->
			<div class="col-md-5"></div>
			<div class="col-md-7 text-left">
				<h3>Smart HOmes</h3>
				<h1>Welcome to Our Home</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3><strong>NIKMATI KEMUDAHAN DAN KENYAMANAN DALAM HIDUP ANDA<hr></strong> </h3>
			</div>
		</div>
	</div>
</div>


<div id="smart_home_well">
	<div class="container well" style="margin-top: -5%;">
	<?php foreach($data as $c){;?>	
		<div class="row">
			
			<div class="col-md-3" >	
				<h1 class="text-center" > Gallery<hr></h1>
				<a href="#" data-target="#img-1" data-toggle="modal">
					<div id="cok" class="carousel slide" data-ride="carousel">
					    <div class="carousel-inner" role="listbox">
					      <div class="item active">
					        <?php echo img(array('src'=>$c['gmb'], 'class'=>'img-responsive img-full'));?>
					      </div>

					      <div class="item">
					        <?php echo img(array('src'=>$c['gmb1'], 'class'=>'img-responsive img-full'));?>
					      </div>

					      <div class="item">
					        <?php echo img(array('src'=>$c['gmb2'], 'class'=>'img-responsive img-full'));?>
					      </div>
					    </div>
					</div>
				</a>
			</div>	

			<div class="col-md-7">
				<h2 class="text-justify">
					<strong><?php echo $c['judul'];?></strong>
				</h2>
				<p class="text-right">
					<?php echo date('d', strtotime($c['tgl']));?> <span><?php echo date('M Y', strtotime($c['tgl']));?></span>
				</p><hr />
				<p class="text-justify">
					<?php echo $c['isi'];?>
				</p>		
			</div>	
				
			<div class="col-md-2">
				<h1 class="text-center"> Video</h1><hr>
				<a href="" data-target="#video" data-toggle="modal">
					<?php echo img(array('src'=>$c['gmb'], 'class'=>'img-responsive img-full'));?>
				</a>
			</div>
		</div><hr /> <?php };?> 
	</div>
</div>

					
<!--video_1 modal-->
<div class="container">
	<div class="modal fade" id="video">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="embed-responsive embed-responsive-16by9">
							<?php foreach($data as $d){;?>
								<?php echo $d['yt'];?>
							<?php };?>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end modal video-->

<!--modal images-->
<div class="container">
	<div class="modal fade" id="img-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12" id="smart_home_1">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
							    <ol class="carousel-indicators">
							      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							      <li data-target="#myCarousel" data-slide-to="1"></li>
							      <li data-target="#myCarousel" data-slide-to="2"></li>
							    </ol>

							    <!-- Wrapper for slides -->
							    <div class="carousel-inner" role="listbox">
							      <div class="item active">
							        <?php echo img(array('src'=>$c['gmb'], 'class'=>'img-responsive img-full'));?>
							      </div>

							      <div class="item">
							        <?php echo img(array('src'=>$c['gmb1'], 'class'=>'img-responsive img-full'));?>
							      </div>

							       <div class="item">
							        <?php echo img(array('src'=>$c['gmb2'], 'class'=>'img-responsive img-full'));?>
							      </div>

							    </div>

							    <!-- Left and right controls -->
							    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							      <span class="sr-only">Next</span>
							    </a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer_2');?>

<script src="<?php echo base_url()."assets/";?>js/lightbox-plus-jquery.min.js"></script>
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
});
	

	$('#cok').carousel({
	  interval: 3000
	});

</script>
</body>
</html>