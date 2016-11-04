<!DOCTYPE html>
<html>
<head>
<title>Informasi Perumahan</title>
<meta charset="utf-8">
<meta name="viewport" content="width=deivice-width,initial=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/lightbox.min.css">

<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>



</head>
<body>
<!--navigation-->
<?php $this->load->view('menu');?>
<!--end popup-->

<!--foto-->
<div class="container">
	<div class="row">
		<img src="<?php echo base_url()."assets/";?>img/rumah/1.jpg" class="img-responsive img-thumbnail" style="margin-bottom:25px; margin-top:100px; width: 1200px; height: 450px;"/>	
	</div><hr>
</div>

<!--conten-->

  <div class="container text-center">    
    <div class="row">
      <!--<div class="col-sm-3 well">
        <div class="well">
          <p><a href="#">My Profile</a></p>
          <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
      </div>-->
      <div class="col-sm-9">
        <div id="rmh" class="row">
          <div class="col-sm-3 col-xs-4">
            <div class="well">
             <p>Rumah_1</p>
             <a href="<?php echo base_url()."assets/";?>img/ronaldo.jpg" data-lightbox="rumah_1">
                <img src="<?php echo base_url()."assets/";?>img/ronaldo.jpg" class="img-circle img-responsive img-full" alt="Norway">
             </a>   
            </div>
          </div>
          <div class="col-sm-9 col-xs-8">
            <div class="well">
              <p>Rumah ini seluas 45 H dengan jlksda jflsjadflkjsdlfjaslkf lsdajflkasj</p>
            </div>
          </div>
        </div>
        <div id="rmh" class="row">
          <div class="col-sm-3 col-xs-4">
            <div class="well">
             <p>Rumah_2</p>
             <a href="<?php echo base_url()."assets/";?>img/messi.jpg" data-lightbox="rumah_2">
                <img src="<?php echo base_url()."assets/";?>img/messi.jpg" class="img-circle img-responsive img-full"  alt="Avatar">
             </a>
            </div>
          </div>
          <div class="col-sm-9 col-xs-8">
            <div class="well">
              <p>Rumah ini seluas 45 H dengan jlksda jflsjadflkjsdlfjaslkf lsdajflkasj</p>
            </div>
          </div>
        </div>
        <div id="rmh" class="row">
          <div class="col-sm-3 col-xs-4">
            <div class="well">
             <p>Rumah_3</p>
             <a href="<?php echo base_url()."assets/";?>img/rumah/rumah_1.jpg" data-lightbox="rumah_3">
                <img src="<?php echo base_url()."assets/";?>img/rumah/rumah_1.jpg" class="img-circle img-responsive img-full"  alt="Avatar">
             </a>
            </div>
          </div>
          <div class="col-sm-9 col-xs-8">
            <div class="well">
              <p>Rumah ini seluas 45 H dengan jlksda jflsjadflkjsdlfjaslkf lsdajflkasj</p>
            </div>
          </div>
        </div>
        <div id="rmh" class="row">
          <div class="col-sm-3 col-xs-4">
            <div class="well">
             <p>Rumah_4</p>
             <a href="<?php echo base_url()."assets/";?>img/rumah/1.jpg" data-lightbox="rumah_4">
                <img src="<?php echo base_url()."assets/";?>img/rumah/1.jpg" class="img-circle img-responsive img-full"  alt="Avatar">
             </a>
            </div>
          </div>
          <div class="col-sm-9 col-xs-8">
            <div class="well">
              <p>Rumah ini seluas 45 H dengan jlksda jflsjadflkjsdlfjaslkf lsdajflkasj</p>
            </div>
          </div>
        </div>     
      </div>
      <div class="col-sm-3 well">
        <div class="thumbnail">
          <p>Upcoming Events:</p>
          <img src="<?php echo base_url()."assets/";?>img/smart_home/smarthome.png" alt="Paris" width="400" height="300">
          <p>SmartHome</p>
          
          <a href="#" class="btn btn-primary">Info</a>
        </div>      
        <div class="well">
          <p>ADS</p>
        </div>
        <div class="well">
          <p>ADS</p>
        </div>
      </div>
    </div>
  </div>

<?php $this->load->view('footer_2');?>

<script src="<?php echo base_url()."assets/";?>js/lightbox-plus-jquery.min.js"></script>


</body>
</html>