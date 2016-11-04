<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.7.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.7.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url().'assets/';?>assets/images/logo-128x26-50.png" type="image/x-icon">
  <meta name="description" content="">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>css/bootstrap-datepicker.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/';?>assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="menu-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">

                <div class="navbar-brand">
                    <a class="navbar-caption" href="#top">Copyright &copy; cangkir13 2016.</a>
                </div>
            
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                      <li class="nav-item dropdown open">
                        <?php echo anchor('Home', 'HOME', 'class="nav-link link" aria-expanded="true"');?>
                      </li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">free bootstrap website creator software download</a></section><section class="mbr-section mbr-after-navbar" id="index-form1-0" style="background-color: rgb(255, 255, 255); padding-top: 160px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2"><?php echo isset($data)? 'Edit':'Tambah';?> Artikel</h3>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div>

                    <?php echo isset($data)? form_open_multipart('jasa/proses_edit/', '', array('id_jasa'=>$data[0]['id'])) : form_open_multipart('jasa/proses_add/');?>

                        <input type="hidden" value="xS6pYaUU2Mc1iSIsWqkKv1ZPYisymukcTc8M5vY/BXcWI91i/OnrrZseV2VJwUjpu4QWELxevi/QmCY0ZL62n0qIHXyIPI/icb2QDPv7pAWewpkxTNgRsq9QQEBhfo7N" data-form-email="true">

                        <div class="row row-sm-offset">

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="form-control-label" for="index-form1-0-name">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="<?php echo isset($data)? $data[0]['judul']:'';?>">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="index-form1-0-name">Date</label>
                                    <input type="text" id="datepicker" class="form-control" name="tgl" value="<?php echo isset($data)? $data[0]['tgl']:'';?>" placeholder="<?php echo date('d M Y h:i:s', time());?>" readonly >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="index-form1-0-phone">isi</label>
                                    <textarea class="form-control" name="isi" rows="13" ><?php echo isset($data)? $data[0]['isi']:'';?></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="index-form1-0-phone">Gambar</label>
                                    <input type="file" class="form-control" name="gmb" >
                                </div>
                            </div>
                        </div>

                        <div>
                          <button type="submit" class="btn btn-primary">Save</button>
                          
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

                  
  <script src="<?php echo base_url().'assets/';?>assets/web/assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url().'assets/';?>assets/tether/tether.min.js"></script>
  <script src="<?php echo base_url().'assets/';?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url().'assets/';?>assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="<?php echo base_url().'assets/';?>assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="<?php echo base_url().'assets/';?>assets/dropdown/js/script.min.js"></script>
  <script src="<?php echo base_url().'assets/';?>assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="<?php echo base_url().'assets/';?>assets/theme/js/script.js"></script>
  <script src="<?php echo base_url().'assets/';?>assets/formoid/formoid.min.js"></script>

  <script src="<?php echo base_url().'assets/';?>js/bootstrap-datepicker.min.js"></script>
    
    <script>
        $(function() {
          $( "#datepicker" ).datepicker();
        });
    </script>
  
  <input name="animation" type="hidden">
  </body>
</html>