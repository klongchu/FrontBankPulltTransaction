<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <?php
  $query = $this->db->get(TB_webconfig);
  $data = $query->row();
  $cache_version = "1.0";
  $newdata = array();
  $newdata[wc_webconfig] = 'webconfig';
  $newdata[wc_site_name] = $data->s_site_name;
  $newdata[wc_title] = $data->s_title;
  $newdata[wc_keyword] = $data->s_keyword;
  $newdata[wc_description] = $data->s_keyword;
  $newdata[wc_logo] = $data->s_logo;
  $newdata[wc_webstats] = $data->s_webstats;
  $newdata[wc_fav] = $data->s_fav;
  $newdata[wc_skins] = $data->s_kins;

  $uploads_dir = base_url('uploads/webconfig')."/";
  $link_img_top = base_url('uploads/webconfig')."/".$this->session->userdata('wc_logo');
  $this->session->set_userdata($newdata);

  $des_view = $data->s_description;
  $title_view = $data->s_title;
  ?>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $des_view; ?>">
  <meta name="keyword" content="<?php echo $des_view; ?>">
  <meta name="author" content="<?php echo $data->s_dev_by; ?>">
  <link href="<?=$uploads_dir;?><?php echo $this->session->userdata('wc_fav'); ?>" rel="shortcut icon" type="image/x-icon" />
  <title><?php echo $title_view; ?></title>
  <meta itemprop="name" content="<?php echo $title_view; ?>">
  <meta itemprop="description" content="<?php echo $des_view; ?>">
  <meta itemprop="image" content="<?=$link_img_top;?>">
  <meta property="og:title" content="<?php echo $title_view; ?>">
  <meta property="og:description" content="<?php echo $des_view; ?>">
  <meta property="og:image" content="<?=$link_img_top;?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!-- Bower -->
<?php echo link_tag('bower_components/slick-carousel/slick/slick.css?version='.$cache_version); ?>


<!-- Custom CSS -->

    <?php echo link_tag('assets/css/front/main.css?version='.$cache_version); ?>


</head>

 
<!-- Loading Start -->

<!-- ./Loading Start -->
   <body>
    <div class="all-wrapper">
      <div class="fade1"></div>
      <div class="desktop-menu menu-top-w menu-activated-on-hover">
        <div class="menu-top-i os-container">
          <div class="logo-w">
            <div class="logo-element"></div>
          </div>
          <ul class="main-menu">
            <li class="active"><a href="#sectionIntro">Home</a></li>
            <li><a href="#sectionDemos">Demos</a></li>
            <li><a href="#sectionFeatures">Features</a></li>
            <li><a href="#sectionTestimonials">Reviews</a></li>
          </ul>
          <ul class="small-menu">
            <li><a href="#"><i class="os-icon os-icon-email-forward"></i><span>Contact</span></a></li>
            <li class="separate"><a href="<?=base_url('login');?>">Login</a></li>
            <!--<li><a class="highlight" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin">Purchase</a></li>-->
          </ul>
        </div>
        <div class="mobile-menu-w">
          <div class="mobile-menu-holder color-scheme-dark" style="display: none;">
            <ul class="mobile-menu">
              <li class="active"><a href="#sectionIntro">Home</a></li>
              <li><a href="#sectionDemos">Demos</a></li>
              <li><a href="#sectionFeatures">Features</a></li>
              <li><a href="#sectionTestimonials">Reviews</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="<?=base_url('login');?>">Login</a></li>
              <!--<li><a href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin">Purchase</a></li>-->
            </ul>
          </div>
          <div class="mobile-menu-i">
            <div class="mobile-logo-w">
              <div class="logo-element"></div>
            </div>
            <div class="mobile-menu-trigger"><i class="os-icon os-icon-hamburger-menu-1"></i></div>
          </div>
        </div>
      </div>
      
      
        
      

