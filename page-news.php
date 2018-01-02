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
                     
                       <?php 
                            	$args = array(
                            			'post_type' => 'cus_news',
                            			'posts_per_page' => -1
								);
								$query = new wp_query($args); 
							if($query->have_posts()):
							while($query->have_posts()): $query->the_post();
							$image_url = get_template_directory_uri().'/assets/images/imgpsh_fullsize.png';
	                        $excerpt = get_the_excerpt();
	                        $news_link = CFS()->get('news_url');
	                        if(!empty($news_link['url']))
	                          $news_link = $news_link['url'];
	                        else
	                          $news_link = get_the_permalink();
	                     
	                        if(empty($excerpt))
	                          $excerpt = get_the_content();
	                     
	                        $excerpt = substr($excerpt, 0, 100);
	                        if(has_post_thumbnail())
	                          $image_url = get_the_post_thumbnail_url(get_the_ID(), array(187,139));
                       	?>
                        
                        <div class="col-sm-6">
                            <div class="partner_blog">
                                <div class="partner_blog_img">
                                   <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">
                        		<span><?php echo get_the_date('dS M'); ?></span>
                                </div>
                                <h4><?php the_title(); ?></h4>
                     <p><?php echo $excerpt; ?></p>
                                 <div class="read_more_box">
		                        <a href="<?php echo $news_link; ?>" target="_blank">
		                        <i class="flaticon-right-arrow" aria-hidden="true"></i>
		                        </a>
                     			</div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); endif; ?>
                    </div>
                </div>
            </section>
            <?php get_template_part( 'page-templates-part/content', 'testimonial' ); ?>

        </div>
        <!--Main container sec end-->

<?php get_footer();?>