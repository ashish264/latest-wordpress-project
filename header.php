<?php
$template_url = get_template_directory_uri();
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php 

  $title = get_bloginfo( 'name' ); 

  if(!is_home() && !is_front_page()){
    $title .= " | ". get_the_title();
  }

  echo $title;

  ?></title>
  <!-- Bootstrap -->
  <link href="<?php echo $template_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $template_url; ?>/assets/css/plugin.css" rel="stylesheet">
  <link href="<?php echo $template_url; ?>/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link href="<?php echo $template_url; ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo $template_url; ?>/assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo $template_url; ?>/assets/css/responsive.css" rel="stylesheet">
  <script src="<?php echo $template_url; ?>/assets/js/modernizr-custom.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
  <main class="animsition">
    <!--Header sec start-->
    <header class="header_sec" id="header">
      <?php 
      if(ot_get_option('enable_top_menu') == 'on'){
        ?>
      <div class="top_header">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="top_left">
                      <ul>
                        <li><a href="tel:<?php echo ot_get_option('contact_mobile_number'); ?>"><?php echo ot_get_option('contact_mobile_number'); ?></a></li>
                        <li><a href="mailto:<?php echo ot_get_option('contact_email'); ?>"><?php echo ot_get_option('contact_email'); ?></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6 text-right">
                    <div class="top_social">
                      <ul class="">
                        <?php if(ot_get_option('facebook_link')){
                          ?>
                            <li><a href="<?php echo ot_get_option('facebook_link'); ?>"><i class="fa fa-facebook"></i></a></li>
                          <?php
                        } ?>
                        <?php if(ot_get_option('twitter_link')){
                          ?>
                            <li><a href="<?php echo ot_get_option('twitter_link'); ?>"><i class="fa fa-twitter"></i></a></li>
                          <?php
                        } ?>
                        <?php if(ot_get_option('linkedin_link')){
                          ?>
                            <li><a href="<?php echo ot_get_option('linkedin_link'); ?>"><i class="fa fa-linkedin"></i></a></li>
                          <?php
                        } ?>
                        <!-- <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i>  </a></li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php
      }
      ?>
      
      <div class="main_nav">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
              <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , array(260,0));
                    if ( has_custom_logo() ) {
                            echo '<img src="'. esc_url( $logo[0] ) .'" class="img-responsive" alt="'. get_bloginfo( 'name' ) .'">';
                    } else {
                            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                    }
                ?>
                  </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
    $header_menu_arr = array(  
      'container_class' => 'collapse navbar-collapse',
       'container_id' => 'bs-example-navbar-collapse-1',
        'menu_class' => 'nav navbar-nav navbar-right', 
        'menu_id' => '',
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
     'theme_location' => 'main_menu' 
     );
    wp_nav_menu($header_menu_arr);
            ?>
            
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </div>
    </header>
    <!--Header sec end-->	
