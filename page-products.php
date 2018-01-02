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
                        <div class="col-sm-12">
                            <div class="link_box product_list">
                            <?php 
                            	$args = array(
                            			'post_type' => 'cus_product',
                            			'posts_per_page' => -1
								);
								$query = new wp_query($args); 
							if($query->have_posts()):
							while($query->have_posts()): $query->the_post();		
                             ?>
                                <div class="feature_slide">
                                    <div class="feature_slide_img">
                                    <?php the_post_thumbnail('medium', array('class' => 'img-responsive' ) );  ?>
                                    </div>
                                    <div class="feature_slide_cont">
                                        <h4><b><?php the_title(); ?></b></h4>
                                        <?php
                                         $link = CFS()->get('page_link');
                                         ?>
                                        <a href="<?php echo ($link ? $link : the_permalink()); ?>" class="btn btn-default">More Info</a>

                                    </div>
                                </div>
                            <?php endwhile; wp_reset_query(); endif;?>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <?php get_template_part( 'page-templates-part/content', 'testimonial' ); ?>

        </div>
        <!--Main container sec end-->

<?php get_footer();?>