<?php get_header(); ?>
     <!--Main container sec start-->
        <div class="main_container">

        <?php get_template_part( 'page-templates-part/content','banner'); ?>

          <?php get_template_part( 'page-templates-part/content','tab');
          ?>

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
             <section class="partner_sec comn_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="link_box">
                            	<?php $args = array(
                                'post_type' => 'cus_links' ,
                                'posts_per_page' => -1,
                                  'order' => 'ASC'
                            );
                            $query = new wp_query($args);
                                if($query->have_posts()):
                                    while($query->have_posts()):$query->the_post();
                            ?>
                                <div class="feature_slide">
                                    <div class="feature_slide_img">
                                        <?php the_post_thumbnail('medium', array('class' => 'img-responsive' ) );  ?>
                                    </div>
                                    <div class="feature_slide_cont">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_content(); ?></p>

                                        <a href="<?php echo CFS()->get('web_link');?>" class="btn btn-default" target="_blank">Link</a>
                                    </div>
                                </div>
                                  <?php endwhile; wp_reset_query(); endif;?>
                                     
                             
                            </div>
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
            <?php get_template_part( 'page-templates-part/content', 'testimonial' ); ?>

        </div>
        <!--Main container sec end-->

<?php get_footer();?>