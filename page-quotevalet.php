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
                    <div class="head_glob">   
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/QuoteValetLogo_RegisteredTM_308x103.jpg" class="img-responsive" alt="">
                </div>
                     <?php if(have_posts()):
                            while(have_posts()):the_post(); ?>
                        <div class="col-sm-12">
                            <div class="head_glob">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="glob_contnent">
                            <?php $glob_boxes = CFS()->get('quotevalet_plan'); 
                                foreach ($glob_boxes as $glob_box) {
                                    ?>
                                <div class="glob_box">
                                    <span><?php echo $glob_box['plan_heading']; ?></span>
                                    <?php
                                    	$amount = $glob_box['plan_amount'];
                                        $product_title = $glob_box['plan_heading']; 	
                                     if($amount): 
                                    echo do_shortcode( '[buy_now price="'. $amount.'" product_title="'.$product_title.'"]'); 
                                    else:
                                    ?>
									<a href="<?php echo $glob_box['plan_button_link']; ?>" class="btn btn-default"><?php echo $glob_box['plan_button_text']; ?></a>
								<?php endif; ?>
                                </div>
                               <?php } ?>
                                <div class="glob_box">
                                    <h5><?php echo CFS()->get('related_plan_heading'); ?></h5>
                                    <ul class="related_list">
                                        <?php echo CFS()->get('related_plan_description'); ?>
                                    </ul>
                                </div>
                                <div class="glob_box">
                                    <img src="<?php echo CFS()->get('related_plan_image'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
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
                           <?php if($key_feature['service_plan_image']):?>
                                <img src="<?php echo $key_feature['service_plan_image'];?>" class="img-responsive" alt="">
                            <?php endif; ?>
                        <p><?php echo $key_feature['services_plan_description'];?></p>
                                <?php if($key_feature['service_plan_link ']):?>
                                <a href="<?php echo $key_feature['service_plan_link '];?>"><i class="fa fa-long-arrow-right"></i></a>
                            <?php endif; ?>
                    </div>
                </div>
                        <?php } ?>
                       </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="callaborate">
                                <h2>DELIVER, COLLABORATE, CLOSE with QuoteValet!</h2>
                                <h4>QuoteValet - Modern Quote Delivery</h4>
                                <p>QuoteValet is a more robust way to deliver quotes to your customers and prospects. Ever wonder
                                    what happens to your quote after you sent it? With QuoteValet, instead of emailing a
                                    PDF of your quote, it creates an interactive web page where your customer can selection
                                    options, ask questions and even sign and pay electronically.</p>
                                <div class="technology_box">
                                    <div class="feature_slide">
                                        <div class="feature_slide_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping_screen.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="feature_list">
                                        <h5>Aspire Technologies</h5>
                                        <ul>
                                            <li>Know when your quotes are actually received and viewed</li>
                                            <li>Avoid spam filters stripping out your proposal PDF attachments</li>
                                            <li>Avoid email servers rejecting large PDF proposal attachments</li>
                                            <li>Extend your company brand with a specialized quote delivery webpage</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="technology_box">
                                    <div class="feature_slide">
                                        <div class="feature_slide_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping_screen.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="feature_list">
                                        <h5>Collaborate</h5>
                                        <ul>
                                            <li>Interactively refine the elements in your quote with your customer through QuoteValet's
                                                col
                                            </li>
                                            <li>Customers can view the quote, select options, and ask questions</li>
                                            <li>Your peers can review your quote offering valuable feedback</li>
                                            <li>Managers can approve quotes before they are submitted to the customer</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="technology_box">
                                    <div class="feature_slide">
                                        <div class="feature_slide_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping_screen.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="feature_list">
                                        <h5>Close</h5>
                                        <ul>
                                            <li>Get customer signatures electronically - no more signing and faxing</li>
                                            <li>Customers can view and accept your quotes from their mobile devices</li>
                                            <li>Get SMS message alerts when high value quotes are accepted</li>
                                            <li>Automatically receive an email notification when your customer accepts the quote</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="callaborate">
                                <h2>QuoteValet is Template Driven and Customizable</h2>
                                <h4>QuoteValet - Modern Quote Delivery</h4>
                                <p>QuoteValet is a more robust way to deliver quotes to your customers and prospects. Ever wonder
                                    what happens to your quote after you sent it? With QuoteValet, instead of emailing a
                                    PDF of your quote, it creates an interactive web page where your customer can selection
                                    options, ask questions and even sign and pay electronically.</p>

                                <div class="technology_box  template">
                                    <div class="feature_slide">
                                        <div class="feature_slide_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/werks.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="feature_list">
                                        <p>Extend your company brand and image. QuoteValet is a turn-key solution that enables
                                            you to be up in running within 3 minutes. You can also customize QuoteValet website
                                            templates so that QuoteValet can look like it is part of your own website. A
                                            QuoteValet Quote can include both the interactive elements (like selecting options)
                                            on the web page and/or a PDF quote/proposal attachment.</p>
                                        <p>If you prefer, the template can simply show a non-interactive image of each page
                                            in your PDF file allowing the customer to review and electronically sign.</p>
                                        <p>View an enlarged screenshot of an interactive QuoteValet quot.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="callaborate">
                                <h2>QuoteValet is Cross Browser Compatible</h2>
                                <p>QuoteValet works in all web browsers (including mobile devices) ensuring your customers have
                                    a smooth and pleasant experience.</p>


                            </div>
                            <div class="callaborate">
                                <h2>The QuoteValet Dashboard</h2>
                                <div class="technology_box template1">
                                    <div class="feature_slide">
                                        <div class="feature_slide_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping_screen.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="feature_list">
                                        <h5>The QuoteValet Inbox</h5>
                                        <p>The Inbox tab on the QuoteValet Dashboard is designed to help you stay on the top
                                            of all your pending quotes by providing one place to see all new notifications.
                                            The inbox tab displays only new notifications, giving you the flexibility to
                                            see all important notifications in one place.</p>
                                    </div>
                                </div>
                                
                            </div>
                            
                              <div class="callaborate">
                                <h2>Subscription Based</h2>
                                <div class="technology_box template1">
                                   
                                        <p>	
                                        QuoteValet is subscription based. Available in a annual subscription - billed annually, no commitment required, and also in a discounted Annual Subscription. Find out more about QuoteValet pricing.

To request more information, please email <a href="mailto:sales@itmicroscope.com">sales@itmicroscope.com</a>.

The QuoteValet Subscription is available with QuoteWerks Version 4.9 and higher. The QuoteValet Subscription is an additional module and requires a current UMP.</p>
                                   
                                </div>
                                <div class="technology_box template1">
                                    <div class="feature_slide">
                                        <!-- <div class="feature_slide_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/QuoteValetLogo_RegisteredTM_308x103.jpg" class="img-responsive" alt="">
                                        </div> -->
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