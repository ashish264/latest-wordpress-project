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
            <section class="glob_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="quatevalet training_QuoteWerks">
                            <?php if(have_posts()):
                            while(have_posts()):the_post(); ?>
                                <h2><?php the_title();  ?></h2>
                            <?php endwhile; endif; ?>
                                <div class="wb_feature">
                                <?php $web_feature_boxs = CFS()->get('quotewerks'); 
                                foreach ($web_feature_boxs as $web_feature_box) {
                                 	?>
                                    <div class="web_feature_box clearfix">
                                        <div class="left_wfb">
                                            <h4><?php echo $web_feature_box['quotewerks_heading'];  ?></h4>
                                            <ul>
                                                <?php echo $web_feature_box['quotewerks_description'];  ?>
                                            </ul>
                                        </div>
                                        <div class="rightt_wfb">
                                            <img src="<?php echo $web_feature_box['quotewerks_images'];  ?>" class="img-responsive">
                                        </div>
                                    </div>
                                    <?php } ?>
                                   
                                </div>
                            </div>

                        </div>
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