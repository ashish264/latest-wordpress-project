<?php
$template_url = get_template_directory_uri();
get_header(); ?>

<!--Main container sec start-->
        <div class="main_container">
           
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
             <section class="glob_sec product_form_sec">
                <div class="container">
                    <div class="row">
                        <?php if(have_posts()):
                        while(have_posts()):the_post();?>
                        <div class="col-sm-12">
                            <div class="quatevalet">
                                <h2>QuoteValet V1.3 Product Trial
</h2>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="product_form">
                                <div class="product_form_head">
                                    Please fill in your contact information in the form below to request a trial
                                </div>
                                <div class="product_form_content">
                                    <h5>Your Contact Details</h5>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                    </div>
                </div>
        </div>
        </div>
        </section>
        </div>
        <!--Main container sec end-->

<?php get_footer();
