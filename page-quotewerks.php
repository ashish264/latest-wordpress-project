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
            <section class="glob_sec work_blog_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                                <?php if(have_posts()):
                            while(have_posts()):the_post(); ?>
                            <div class="head_glob">
                                <h1><?php the_title();  ?></h1>

                            </div>
                            <div class="quotewerks_free_trail">
                                <a href="http://www.quotewerks.com/reqdemo.asp?src=header" class="btn btn--download-trial btn--tight2">
                                    Start Free Trial
                                   <!-- Download Free Trial-->
                                </a>
                            </div>
                            <div class="banner-quote-work">
                                <img src=" <?php echo CFS()->get('quotewerks_top_images'); ?>">
                            </div>

                            
                            <div class="werks_para">
                                <p> <?php the_content(); ?></p>
                            </div>
                            <div class="glob_contnent werks_globe">

                            <?php $werks_plans  = CFS()->get('quotewerks_plan_loop'); 
                                foreach ($werks_plans as $werks_plan) {
                                    $amount = $werks_plan['quotewerks_plan_amount'];
                                    $product_title = $werks_plan['quotewerks_plan_information'];
                                    ?>
                                <div class="glob_box">
                                    <span><?php echo $werks_plan['quotewerks_plan_heading'];  ?></span>

                                    <?php 
                                    echo do_shortcode( '[buy_now price="'. $amount.'" product_title="'. $product_title.'"]'); 
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
                           <?php endwhile; endif; ?>
                            <br/><br/>
                            <div class="glob_contnent werks_globe">

                           
                                <div class="glob_box">
                                    <span>QuoteWerks Product Updates</span>
                                    <a href="http://support.quotewerks.com/updates/UpdateAgent.asp"  class="btn btn-default">Click Here
                                    </a>
                                </div>
                                <div class="glob_box">
                                    <span>QuoteWerks Knowledgebase</span>
                                    <a href="http://support.quotewerks.com/kbase/index.asp"  class="btn btn-default">Click Here
                                    </a>
                                </div>
                                <div class="glob_box">
                                    <span>What's New?</span>
                                    <a href="http://www.quotewerks.com/whatsnew.asp"  class="btn btn-default">Click Here
                                    </a>
                                </div>

                              <div class="glob_box">
                                <a href="http://www.quotewerks.com/reqdemo.asp?src=header" class="btn btn--download-trial btn--tight2">
                                    Start Free Trial
                                   <!-- Download Free Trial-->
                                </a>
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