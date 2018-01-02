<?php get_header(); ?>
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
                            <div class="quatevalet">
                            <?php if(have_posts()):while(have_posts()):
                            the_post();?>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                             <?php endwhile; endif;?>
                                <h4>Overview</h4>
                                <ul class="quatevalet-listing">
                                    <?php echo CFS()->get('overview');?>
                                </ul>
                                <div class="accordian_menu">
                                    <h2>Frequently Asked Questions</h2>
                                    <?php $faqs = CFS()->get('faq');
                                    $i = 1; 
                                    foreach($faqs AS $faq){ ?>
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i;?>" aria-expanded="false">
                                                            <?php echo $faq['faq_question'];?>
                                                        </a>
                                                </h4>
                                            </div>
                                            <div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body help_accr">
                                                   <?php echo $faq['faq_answer'];?>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <?php $i++; } ?>
                            </div>


                        </div>
                    </div>
                </div>
        </div>
        </div>
        </section>
        </div>
        <!--Main container sec end-->
        <?php get_footer(); ?>