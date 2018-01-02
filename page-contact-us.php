<?php
$template_url = get_template_directory_uri();
get_header(); ?>

<!--Main container sec start-->
        <div class="main_container">
           
        <?php get_template_part( 'page-templates-part/content','banner'); ?>

          <?php get_template_part( 'page-templates-part/content','tab');
          ?>
            <!-- <div class="breadcrum_wrap">
              <?php //bcn_display(); ?>
            </div> -->
            
            <div class="breadcrum_wrap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo site_url(); ?>">Home</a>
                                </li>
                                <?php 
                                global $post;
                                $post_slug=$post->post_name;
                                ?>
                                <li class="active">
                                    <a href="<?php echo site_url($post_slug); ?>"><?php wp_title("",true); ?></a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="partner_sec comn_sec contact_sec">
                <div class="container">
                    <div class="row">
                    <div class="col-sm-12">
                            <div class="con_logo">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h3>Contact us</h3>
                            <div class="call-info">
                                <label>Address</label>
                                <?php echo CFS()->get( 'address' ); ?>
                               
                            </div>
                            <div class="call-info">
                                <label>Telephone</label>
                             <a href="tel:<?php echo CFS()->get( 'telephone' ); ?>">  <?php echo CFS()->get( 'telephone' ); ?> </a>
                            </div>
                            <div class="call-info">
                                <label>QuoteWerks Dedicated Phone Line</label>
                              <a href="tel:<?php echo CFS()->get( 'phone_number' ); ?>">  <?php echo CFS()->get( 'phone_number' ); ?></a>
                            </div>
                            <?php if(CFS()->get( 'fax' )): ?>
                            <div class="call-info">
                                <label>Fax</label>
                             <?php echo CFS()->get( 'fax' ); ?>
                            </div>
                            <?php endif; ?>
                            <div class="call-info">
                                <label>website</label>
                               <?php echo CFS()->get('website'); ?>
                            </div>
                        </div>
                        <?php 
                        $fields = CFS()->get('add_mail_detail');
                   
                        ?>
                        <div class="col-sm-4">
                                <h3>Email us</h3>
                                <?php 
                                 foreach ( $fields as $field ) {
                                    ?>
                                <div class="call-info">
                                    <label><?php echo $field['mail_label_heading']; ?></label>
                                    <?php echo $field['mail_info']; ?>
                                </div>
                                <?php } ?>
                            </div>
                        <div class="col-sm-4">
                            <div class="contact_partener">
                             <?php if(ot_get_option('partner_ship_heading')){
                          ?>
                                <h4><?php echo ot_get_option('partner_ship_heading'); ?></h4>

                                <?php } if(ot_get_option('phone')){?>
                                <div class="call-info">
                                    <label>Please call</label>
                                   <a href="tel:<?php echo ot_get_option('phone'); ?>"> <?php echo ot_get_option('phone'); ?></a>
                                </div>
                                <?php } if(ot_get_option('email')){?>
                                <div class="call-info">
                                    <label>Email</label>
                                   <a href="mailto:<?php echo ot_get_option('email'); ?>"> <?php echo ot_get_option('email'); ?> </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--Main container sec end-->

<?php get_footer();
