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
                                <p><?php the_content(); ?></p>
                                <?php endwhile; endif; ?>    
                                <h4><?php echo CFS()->get('web_overview_heading');?></h4>
                                <p><?php echo CFS()->get('web_overview_description');?></p>
                                <div class="img_quate"><img src="<?php echo CFS()->get('web_overview_image');?>"></div>

                                <div class="wb_feature">
                                    <h4><?php echo CFS()->get('feature_heading');?></h4>
                                    <?php $features = CFS()->get('feature_description'); 
                                    	foreach($features AS $feature){
                                    ?>
                                    <div class="web_feature_box clearfix">
                                        <div class="left_wfb">
                                            <p><?php echo $feature['feature_content']; ?>
                                            </p>
                                          </p>
                                        </div>
                                        <div class="rightt_wfb">
                                            <img src="<?php echo $feature['feature_image']; ?>" class="img-responsive">
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                                <h2>Screenshots</h2>
                                <hr>
                                 <div class="web_feature_box clearfix">
                                <h4>Workbook</h4>
                                   <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/QuoteWerksWeb-Workbooka_10.png" class="img-responsive">
                                </div>
                                <div class="web_feature_box clearfix">
                                <h4>Etilize Search</h4>
                                   <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/QuoteWerksWeb-Etilize_10.png" class="img-responsive">
                                </div>
                                <div class="web_feature_box clearfix">
                                <h4>Additional</h4>
                                    <div class="row">
                                       <div class="base-12 med-4">
                                       <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/QuoteWerksWeb-ContactSearch_10.png" class="img-responsive">
                                       </div>
                                       <div class="base-12 med-4">
                                       <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/QuoteWerksWeb-DocumentSearch_10.png" class="img-responsive">
                                       </div>
                                       <div class="base-12 med-4">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/QuoteWerksWeb-Print_10.png" class="img-responsive">
                                       </div>
                                       <div class="base-12 med-4">
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/QuoteWerksWeb-Email_10.png" class="img-responsive">
                                       </div>
                                       <div class="base-12 med-4">
                                       <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/QuoteWerksWeb-ProductSearch_10.png" class="img-responsive">
                                       </div>
                                    </div>
                                </div>
                                <h4>QuoteWerks Web Licensing & Pricing</h4>
                                How does QuoteWerks Web licensing work?

                                The QuoteWerks Web license is an add-on license to the QuoteWerks Desktop product that gets you access to your QuoteWerks through a web browser.
                                
                                If you have purchased real-time licenses, Etilize subscriptions, and/or QuoteValet subscriptions for QuoteWerks Desktop, these features will be accessible in QuoteWerks Web.
                                
                                The QuoteWerks Web access license is $10/month per concurrent user.
                                <h4>QuoteWerks Web Requirements</h4>
                                <ul>
                                    <li>Version 5.2 Build 2.00 or higher</li>
                                    <li>Corporate Edition (rehosted to SQL)</li>
                                    <li>QuoteWerks Web subscription</li>
                                    <li>MS SQL Server exposed to internet (Internet Ready)</li>
                                    <p>QuoteWerks Web connects to your existing SQL backend installation of QuoteWerks enabling you to instantly access all of your existing quotes (no migration needed). QuoteWerks Web is a hybrid cloud solution we host the web app and you host your data.
QuoteWerks Web is accessed through a web browser at na.quotewerks.com. Your account will be configured to use your backend SQL database wherever it is hosted. You can host your SQL database on your network and expose it to the internet, or you can host your SQL database on Amazon RDS or Microsoft Azure.
</p>

                                </ul>
                                <h4>QuoteWerks Web Features and Functionality</h4>
                                <h5>Open Documents</h5>
                                <ul>
                                <li>You can open any document in the QuoteWerks database.</li>
                                <li>Security restrictions are applied, so you can only open quotes that you have access to.</li>
                                <li>If you only have read-only access to a quote then you will only be able to open it in read-only mode.
                                </li></ul>
                                
                                <h5>Edit Documents</h5>
                                <ul>
                                <li>You can make changes to the quote information on the tabs and the document items and save those changes.</li>
                                <li>All security restrictions are obeyed, so if you do not have the access right to modify any particular field or cell it will be honored.</li>
                                <li>The links tab is viewable.</li>
                                <li>The QuoteValet tab is available showing quote activity and has buttons for displaying the quote on QuoteValet</li>
                                <li>You can lock or unlock the document</li>
                                <li>All drop down lists like DocStatus, SalesRep, PreparedBy, etc are populated.</li>
                                <li>The F2lookup feature is supported in the fields</li>
                                <li>You can add new line items manually to the quote.</li>
                                <li>You can insert new line items manually into the quote. You can even insert them inside existing groups.</li>
                                <li>You can set the Line Item Properties and Line Item Attributes
</li>
                                <li>You can set the deposit amount</li>
                                 <li>You can set the shipping amount (minus the real-time shipping options)</li>
                                <li>You can change the DocType
</li>
                                <li>You can move single or multiple lines in the quote, by cutting and pasting</li>
                                </ul>
                                
                                <h5>Create Documents</h5>
                                <ul>
                                <li>You can create new blank documents</li>
                                <li>You can create a new document from a template</li>
                                </ul>
                                
                                <h5>Contacts</h5>
                                <ul>
                                <li>You can search for and retrieve contact information from the built-in QuoteWerks contact database.</li>
                                <li>You can search for and retrieve contact information from ConnectWise, Autotask, salesforce.com, MS Dynamics CRM, and Google contacts
                                </li></ul>
                                <h5>Products</h5>
                                <ul>
                                <li>You can search for, display and use products from native product databases, including from folders.</li>
                                <li>You can To be able to search Etilize/content server/real-time P&A for distributor products.</li>
                                </ul>
                                
                                <h5>Quote Delivery</h5>
                                You can use all your same fpc layout files and word documents to generate output in QuoteWerks Web.
                                <ul>
                                <li>You can preview quotes</li>
                                <li>You can print quotes</li>
                                <li>You can email quotes</li>
                                <li>You can upload quotes to QuoteValet</li>
                                </ul>
                                
                                <h5>Leasing</h5>
                                <ul>
                                <li>You can see and refresh leasing information on the Sale Info tab.</li>
                                </ul>
                                
                                <h5>Miscellaneous</h5>
                                <ul>
                                <li>Label customizations on the quote tabs are applied.</li>
                                <li>Label customizations for all the fields on the main quote tabs are applied.</li>
                                <li>Column heading customizations on the DocumentItems tab are applied.</li>
                                <li>All line item coloring and styling and formatting is applied.</li>
                                </ul>
                               <hr/>
                               <div>To request more information about QuoteWerks Web, please email <a href="mailto:sales@itmicroscope.com">sales@itmicroscope.com</a>.</div>
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