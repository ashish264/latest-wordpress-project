<?php 
get_header();
?>
<!--Header sec end-->
        <!--Main container sec start-->
        <div class="main_container">
			<section class="glob_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="quatevalet">
                            <?php if(have_posts()):while(have_posts()):
                            the_post();
                            ?>
                            
                                <h2><?php the_title(); ?></h2>
                                
                                   <div class="col-sm-12">
                                    <div class="key_feature color_yl">
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/feature9.jpg"  class="img-responsive">
                                    <p>Gain insight and have mobile access to your QuoteValet Executive Dashboard, Leaderboard, Inbox, Peer Reviews, and Approvals, anywhere, anytime from any web device like your phone, tablet, or PC.</p>
                                    
                                    </div>
                                    <br />
                                </div>
                                 <!-- <div class="col-sm-6">
                                    <div class="key_feature">
                                    
                                       <
                                    </div>
                                </div> -->
                                <h4><?php echo CFS()->get('web_overview_heading');?></h4>
                                <p><?php echo CFS()->get('web_overview_description');?></p>
                                <div class="img_quate"></div>
                                <p>Psst - are you a business owner or sales manager? Well, listen up, because QuoteValet Insight was built with you in mind, giving you a closer look at your quoting and sales processes!</p>
                                <div class="wb_feature">
                                    <h4>QuoteValet Insight™: Overview</h4>
                                       <?php the_content();  ?>
                                   <?php endwhile; endif; ?>  
                                   <h4>QuoteValet Insight™: Features</h4>
                                    <div class="web_feature_box clearfix">
                                        <div class="left_wfb">
                                            <p>
                                            QuoteValet Insight is chock full of features that will give you a more robust, comprehensive look at your sales processes. Here's just a taste of what you can expect:
                                            The Executive Dashboard gives you major visibility over quoting and sales processes across the board, from all sales reps. View top-dollar quotes and converted orders; number of quotes sent, accepted, and paid; sales-rep and customer comments; number of customer views on documents; and more.

                                            My Summary is similar to the Executive Summary, but shows only information relating to the currently logged-in user. 
                                            </p>
                                          </p>
                                        </div>
                                        <div class="rightt_wfb">
                                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/12/QuoteValet-Web-ExecutiveDashboard.png" class="img-responsive">
                                        </div>
                                    </div>
                                    
                                      <h4>Part of the Executive Dashboard, the </h4>
                                    <div class="web_feature_box clearfix">
                                        <div class="full_width">
                                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/12/QuoteValet-Web-ExecutiveDashboard.png" class="img-responsive">
                                          </p>
                                        </div>
                                        <div class="">
                                           <string>Comparative Analysis</string> is a great way to view sales reps' stats side by side. It gives you a breakdown of your reps' performance based on time-range-specific variables such as number and dollar amounts of both quotes and converted orders.

The <string>Status Board</string> displays priority notifications like when an expired quote is viewed, customer questions are posted, quote is accepted, or payment is provided. It also displays the notification count for each sales rep making sure that as a team all notifications are processed. The Status Board is best viewed on a large monitor, and is updated every 60 seconds.  Furthermore, the Leaderboard is a rotating panel displaying the top 10 accepted and outstanding quotes for the week, 
                                        </div>
                                    </div>
                                      <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/12/QuoteValet-Web-StatusBoard.png" class="img-responsive">
                                      The <strong>Find </strong>feature allows you to quickly locate and view any QuoteValet document by searching by its Document Number, Name, and/or Sold to Company name.
                                      
                                         
                                    <div class="web_feature_box clearfix">
                                        <div class="left_wfb">
                                            <p>
                                          The Inbox is equivalent to the QuoteValet inbox within QuoteWerks, but is now a mobile feature with QuoteValet Insight! Here, explore sales reps' quote information, such as dollar value and age, as well as activity: whether quotes have been viewed, accepted, paid, etc. You'll also see which documents have questions or comments posted on/about them.
                                            </p>
                                          </p>
                                        </div>
                                        <div class="rightt_wfb">
                                           <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/12/QuoteValet-Web-Inbox.png" class="img-responsive">
                                        </div>
                                    </div>
                                    <h4>Subscription Based</h4>
                                    
                                   <p> 
                                   QuoteValet Insight is included in your QuoteValet subscription for no additional fee. 
                                    </p>
                                                                       
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