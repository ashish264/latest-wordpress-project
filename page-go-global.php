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
                                    <a href="<?php echo site_url($post_slug); ?>">Go Global</a>
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
                            <div class="head_glob">
                                <img src="<?php echo CFS()->get('global_logo');?>">
                                <h1><?php echo CFS()->get('global_heading'); ?></h1>
                            </div>
                            <div class="video_content">
                               <object codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,32,18" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" height="278" width="700">
                                  <param name="quality" value="high">
                                  <param name="autoplay" value="true">
                                  <param name="wmode" value="transparent">
                                  <param name="src" value="<?php echo get_template_directory_uri();?>/assets/images/intro_700.swf">

                                  <embed height="278" width="700" src="<?php echo get_template_directory_uri();?>/assets/images/intro_700.swf" wmode="transparent" quality="high"  play="false" flashvars="autoplay=false&play=false" menu="false" type="application/x-shockwave-flash" >
                               </object>
                            </div>
                            <div class="glob_contnent">
                            <div class="glob_box right_box">
                                    <span>30 days free trial version</span>
                                    <a href="http://www.graphon.com/content/view/306" class="btn btn-default" target="_blank">Download</a>
                                </div>
                            </div>
                        </div>

                        <?php if(have_posts()):
                        while(have_posts()):the_post(); ?>
                        <div class="col-sm-8">
                            <div class="glob_network">
                                <h4><?php the_title(); ?></h4>

                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="network_img">
                            <?php the_post_thumbnail('medium'); ?>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                        <div class="col-sm-12">

                        <div class="glob_contnent">
                            <?php $plans = CFS()->get('global_windows_plan'); 
                                foreach($plans AS $plan){
                                    
                                    $amount = $plan['windows_plan_amount'];
                                    $product_title = $plan['windows_plan_product_information'];
                                    
                            ?>
                             <div class="glob_box">
                                    <span><?php echo $plan['windows_plan_heading']; ?></span>
                                   <?php 
                                    echo do_shortcode( '[buy_now price="'. $amount.'" product_title="'.$product_title.'"]'); 
                                    ?>
                                </div>
                                <?php } ?>
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
