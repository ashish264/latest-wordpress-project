<?php 
get_header();
?>
  <!--Main container sec start-->
        <div class="main_container">
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

            <section class="glob_sec quotevalet">
                <div class="container">
                    <div class="row">
                     <?php if(have_posts()):
                            while(have_posts()):the_post(); ?>
                        <div class="col-sm-12">
                         <div class="head_glob">
                                <h1><?php the_title();  ?></h1>

                            </div>
                            <div class="glob_network">
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; endif;
                     $key_features = CFS()->get('services_plan'); 
                                foreach ($key_features as $key_feature) {
                ?>
                         <div class="col-sm-6">
                            <div class="key_feature">
                            <?php if($key_feature['services_plan_images']):?>
                                <img src="<?php echo $key_feature['services_plan_images'];?>" class="img-responsive" alt="">
                            <?php endif; ?>
                                <h5><?php echo  $key_feature['services_plan_heading']; ?></h5>
                                <p><?php echo  $key_feature['services_plan_description']; ?></p>
                            </div>
                        </div>
                        <?php } ?>
                      
                       </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="callaborate">
                                <h2>Real-time Licensing</h2>
                              
                            </div>
                            <div class="glob_network">
                                  <p>
                                  The real-time data module licensing and pricing is based on the "reserved concurrency" model. Whenever a user on the network uses the real-time data module, a license is reserved for that user and is not released until the user exits QuoteWerks. The number of real-time licenses does not need to match the total number of QuoteWerks licenses. So, for example, in a 2-user installation of QuoteWerks with a single Real-time license, if user 1 logs into QuoteWerks and uses the Real-time pricing first, user 2 will not be able to use Real-time pricing until user 1 logs out of QuoteWerks. 
                                  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--Main container sec end-->
<?php 
get_footer();
?>