<!DOCTYPE html>
<html>
<head>
<title>Galeri</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/style.css">
<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>
<!--<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url()."assets/";?>js/jssor.slider-21.1.5.mini.js" type="text/javascript"></script>
<script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 810);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        
    </script>
    <style>
        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
        /* jssor slider thumbnail navigator skin 11 css *//*.jssort11 .p            (normal).jssort11 .p:hover      (normal mouseover).jssort11 .pav          (active).jssort11 .pav:hover    (active mouseover).jssort11 .pdn          (mousedown)*/.jssort11 .p {    position: absolute;    top: 0;    left: 0;    width: 200px;    height: 69px;    background: #181818;}.jssort11 .tp {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort11 .i, .jssort11 .pav:hover .i {    position: absolute;    top: 3px;    left: 3px;    width: 60px;    height: 30px;    border: white 1px dashed;}* html .jssort11 .i {    width /**/: 62px;    height /**/: 32px;}.jssort11 .pav .i {    border: white 1px solid;}.jssort11 .t, .jssort11 .pav:hover .t {    position: absolute;    top: 3px;    left: 68px;    width: 129px;    height: 32px;    line-height: 32px;    text-align: center;    color: #fc9835;    font-size: 13px;    font-weight: 700;}.jssort11 .pav .t, .jssort11 .p:hover .t {    color: #fff;}.jssort11 .c, .jssort11 .pav:hover .c {    position: absolute;    top: 38px;    left: 3px;    width: 194px;    height: 32px;    line-height: 32px;    color: #fff;    font-size: 11px;    font-weight: 400;    overflow: hidden;}.jssort11 .pav .c, .jssort11 .p:hover .c {    color: #fc9835;}.jssort11 .t, .jssort11 .c {    transition: color 2s;    -moz-transition: color 2s;    -webkit-transition: color 2s;    -o-transition: color 2s;}.jssort11 .p:hover .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .pav:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}.jssort11 .p:hover, .jssort11 .pav:hover {    background: #333;}.jssort11 .pav, .jssort11 .p.pdn {    background: #462300;}
        
    </style>
</head>
<body>
<!--navigasi -->
<?php $this->load->view('menu');?>
		<!--end popup-->
		<!--end nav-->


		<!--foto and brand-->

<!--<div class="container" style="margin-top:120px;">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#kat_1" aria-controls="kat_1" role="tab" data-toggle="tab">Kategori 1</a></li>
		<li role="presentation"><a href="#kat_2" aria-controls="kat_2" role="tab" data-toggle="tab">Kategori 2</a></li>
		<li role="presentation"><a href="#kat_3" aria-controls="kat_3" role="tab" data-toggle="tab">Kategori 3</a></li>
		<li role="presentation"><a href="#kat_4" aria-controls="kat_4" role="tab" data-toggle="tab">Kategori 4</a></li>
	</ul>

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="kat_1">
			<div class="row text-center" style="margin-bottom:15px;margin-top:10px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>

			<div class="row text-center" style="margin-bottom:15px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>

			<div class="row text-center" style="margin-bottom:15px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>
		</div>

		<div role="tabpanel" class="tab-pane" id="kat_2">
			<div class="row text-center" style="margin-bottom:15px;margin-top:10px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>
		</div>

		<div role="tabpanel" class="tab-pane" id="kat_3">
			<div class="row text-center" style="margin-bottom:15px;margin-top:10px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>

			<div class="row text-center" style="margin-bottom:15px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>
		</div>

		<div role="tabpanel" class="tab-pane" id="kat_4">
			<div class="row text-center" style="margin-bottom:15px;margin-top:10px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>

			<div class="row text-center" style="margin-bottom:15px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>

			<div class="row text-center" style="margin-bottom:15px;">
				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>

				<div class="col-md-3 col-xs-6">
					<img src="<?php echo base_url()."assets/";?>img/icon_ground.png" class="img-thumbnail" />
				</div>
			</div>
		</div>
	</div>
</div>-->

<br>
<br>

<br>
<br>

<div class="container">
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 810px; height: 300px; overflow: hidden; visibility: hidden; background-color: #000000;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('..img/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php echo base_url()."assets/img/";?>img/002.jpg" />
                <div data-u="thumb">
                    <img class="i" src="<?php echo base_url()."assets/img/";?>img/thumb-002.jpg" />
                    <div class="t">Banner Rotator</div>
                    <div class="c">360+ touch swipe slideshow effects</div>
                </div>
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">List Slider</a>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php echo base_url()."assets/img/";?>img/003.jpg" />
                <div data-u="thumb">
                    <img class="i" src="<?php echo base_url()."assets/img/";?>img/thumb-003.jpg" />
                    <div class="t">Image Gallery</div>
                    <div class="c">Image gallery with thumbnail navigation</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php echo base_url()."assets/img/";?>img/004.jpg" />
                <div data-u="thumb">
                    <img class="i" src="<?php echo base_url()."assets/img/";?>img/thumb-004.jpg" />
                    <div class="t">Carousel</div>
                    <div class="c">Touch swipe, mobile device optimized</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php echo base_url()."assets/img/";?>img/005.jpg" />
                <div data-u="thumb">
                    <img class="i" src="<?php echo base_url()."assets/img/";?>img/thumb-005.jpg" />
                    <div class="t">Themes</div>
                    <div class="c">30+ professional themems + growing</div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="<?php echo base_url()."assets/img/";?>img/006.jpg" />
                <div data-u="thumb">
                    <img class="i" src="<?php echo base_url()."assets/img/";?>img/thumb-006.jpg" />
                    <div class="t">Tab Slider</div>
                    <div class="c">Tab slider with auto play options</div>
                </div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="tp"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>

</div>
<br>
<br>

<br>
<br>
<!--footer-->
<?php $this->load->view('footer_2');?>
	<!--end footer-->

<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#kat_1 a").click(function (e) {
		e.preventDefault();

		$(this).tab("show");
	});

	$("#kat_2 a").click(function (e) {
		e.preventDefault();

		$(this).tab("show");
	});

	$("#kat_3 a").click(function (e) {
		e.preventDefault();

		$(this).tab("show");
	});

	$("#kat_4 a").click(function (e) {
		e.preventDefault();

		$(this).tab("show");
	});
});
</script>
</body>
</html>