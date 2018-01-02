
<?php
$template_url = get_template_directory_uri();
?>
 <!--Footer sec start-->
    <footer id="footer" class="footer_sec">
      <div class="container">
        <div class="col-sm-6">
          <div class="footer_left">
            <h4><?php echo ot_get_option('address_title'); ?></h4>
            <ul class="address_bar">
              <li>Office Hours<br> <?php echo ot_get_option('office_hours'); ?></li>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo ot_get_option('footer_contact_address'); ?></li>
              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo ot_get_option('contact_mobile_number'); ?>"><?php echo ot_get_option('contact_mobile_number'); ?></a></li>
              <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo ot_get_option('contact_email'); ?>"><?php echo ot_get_option('contact_email'); ?></a></li>
            </ul>
            <?php if(ot_get_option('show_social_links') == 'on'){
              ?>
            <ul class="footer_social">
              <?php if(ot_get_option('facebook_link')){
                          ?>
                            <li><a href="<?php echo ot_get_option('facebook_link'); ?>"><i class="fa fa-facebook" target="_blank" ></i></a></li>
                          <?php
                        } ?>
              <?php if(ot_get_option('twitter_link')){
                          ?>
                            <li><a href="<?php echo ot_get_option('twitter_link'); ?>"><i class="fa fa-twitter" target="_blank"></i></a></li>
                          <?php
                        } ?>
                <?php if(ot_get_option('linkedin_link')){
                  ?>
                    <li><a href="<?php echo ot_get_option('linkedin_link'); ?>"><i class="fa fa-linkedin" aria-hidden="true" target="_blank"></i></a></li>
                  <?php
                } ?>
              
            </ul>
            <?php } ?>
            <div class="extra_logo">
              <ul>
                <?php $footer_logo_list = ot_get_option('footer_logo_list'); 
                
                    if(is_array($footer_logo_list)){
                      foreach ($footer_logo_list as  $footer_logo) {
                        ?>
                        <li><img src="<?php echo $footer_logo['image']; ?>" class="img-responsive" alt="<?php echo $footer_logo['title']; ?>"> <li>
                        <?php
                      }
                    }
                ?>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="footer_right">
            <h4><?php echo ot_get_option('enquiry_form_title'); ?></h4>
            <?php echo do_shortcode(ot_get_option('enquiry_form_code')); ?>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="bottom_footer_left">
                <ul>
                  <li><a href="<?php echo site_url(); ?>">© www.itmicroscope.com </a></li>
                  <li><a href="#"> Privacy Policy, <?php echo date('Y'); ?></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <?php
    $header_menu_arr = array(  
          'container_class' => 'bottom_footer_left text-right',
           'container_id' => '',
            'menu_class' => '', 
            'menu_id' => '',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
         'theme_location' => 'footer_menu' 
         );
    wp_nav_menu($header_menu_arr);
              ?>
            </div>
          </div>
          </div>
        </div>
    </footer>
    <!--Footer sec end-->
  </main>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo $template_url; ?>/assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo $template_url; ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo $template_url; ?>/assets/js/plugin.js"></script>
  <script src="<?php echo $template_url; ?>/assets/js/slick.js"></script>
  <script src="<?php echo $template_url; ?>/assets/js/custom.js"></script>
  <?php wp_footer(); ?>
  <script type="text/javascript">
  $('#hide').hide();
  $("#show").on('click',function(){
      $('#hide').show();
      });
  </script>
</body>

</html>