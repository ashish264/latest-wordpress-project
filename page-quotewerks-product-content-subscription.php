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
                            <a href="<?php echo site_url($post_slug); ?>">
                                <?php wp_title("",true); ?>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="glob_sec quotevalet content-subscription">
        <div class="container">
            <div class="row">
           
                        
                <?php if(have_posts()):
                            while(have_posts()):the_post(); ?>
                <div class="col-sm-12">
                <div class="head_logo custim_head_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/QuoteWerks-powered-by-etilize-logo.jpg" class="img-responsive"
                                alt="">
                            </div>
                    <div class="head_glob">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="glob_network">
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <?php 
                $fields = CFS()->get( 'services' );
                foreach ( $fields as $field ) {
                    $title     =  $field['services_heading'];
                    $image_url = $field['services_images'];
                    $description =  $field['services_description'];
                ?>
                <div class="col-sm-6">
                    <div class="key_feature">
                          <img src="<?php echo $image_url; ?>" class="img-responsive">
                        <h5><?php echo $title; ?></h5>
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="para_data">
                <h6>Are you an MSP, VAR, or IT Service Provider? Check out our <a href="http://www.quotewerks.com/ITCommunity.asp">IT Community Page.</a></h6>
                <p>
                    The QuoteWerks Product Content Subscription provides QuoteWerks users in the IT industry with the part numbers of products
                    from major distributors along with consumer friendly product descriptions, marketing descriptions, and
                    product images. Combined with the QuoteWerks Real-time Module, the pricing and availability of those
                    parts is also supplied all in one place.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="callaborate">
                        <h2>Benefits of the QuoteWerks Product Content Subscription</h2>
                        <ul>
                            <li>Provides a Searchable, drill-down product database "in the cloud". You no longer have to download,
                                import, and maintain product databases from the <a href="http://www.quotewerks.com/etilize.asp?src=navmenu#Distributor">major distributors</a>.</li>

                            <li>You no longer have to spend hours scouring the web looking for product images and customer friendly
                                product descriptions to include in your quotes and proposals</li>

                            <li>Provides <a href="http://www.quotewerks.com/etilize.asp?src=navmenu#Descriptions">Customer friendly product descriptions</a></li>

                            <li>Provides In depth product summaries with marketing and feature descriptions</li>

                            <li>Provides Product pictures and Spec sheets</li>

                            <li>Provides Product weights (when available)</li>

                            <li>Provides <a href="http://www.quotewerks.com/etilize.asp?src=navmenu#Options">Product Accessories for up selling</a>                                (North America and UK)</li>

                            <li>Provides <a href="http://www.quotewerks.com/etilize.asp?src=navmenu#PartLocator">Product List Prices</a>                                (when available)</li>

                            <li>Provides <a href="http://www.quotewerks.com/etilize.asp?src=navmenu#Compare">side-by-side Product Comparison</a>                                on Screen and as a PDF</li>

                            <li>Provides <a href="http://www.quotewerks.com/etilize.asp?src=navmenu#Similar">Similar Item</a>                                options - useful when items are not in stock</li>

                            <li>Provides <a href="http://www.quotewerks.com/etilize.asp?src=navmenu#Similar">Upsell Item</a>                                options - useful for providing Good, Better, Best Options</li>

                            <li>Provides Consumer Pricing from CDW, Dell, Staples, and Newegg</li>

                            <li>Having more complete and more attractive looking proposal will impress your customers</li>
                        </ul>
                    </div>
                    <div class="callaborate">
                        <h2>Are cryptic product descriptions from distributors a problem?</h2>
                        <p>Many of the descriptions that you receive from your distributors are great for finding your items
                            and make sense to you, but do not provide the sellable or plain English descriptions that you
                            need to close the sale. The descriptions on the distributor websites are great, but the file
                            that you use to import contains cryptic descriptions. So, many people resort to copying these
                            nice descriptions from the website which of course is time consuming. The in depth marketing
                            and feature descriptions from the QuoteWerks Product Subscription (powered by Etilize) will impress
                            your customers and give them a good feel for how the products you are quoting will benefit them
                            - much more so than a cryptic description that only identifies the model and product that is
                            being sold.</p>

                        <div class="technology_box  template1 template3">
                            <div class="feature_slide">
                                <div class="feature_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/QuoteWerkswithoutEtilizeDescriptions.jpg" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="feature_list">
                                    <h4>Quote with Cryptic Distributor Descriptions</h4>
                                </div>
                            </div>
                            <div class="feature_slide">
                                <div class="feature_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/QuoteWerksEtilizeDescriptions.jpg" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="feature_list">
                                    <h4>Quote with QuoteWerks Content Subscription Pictures and Descriptions</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="callaborate">
                        <h2>Easily Find Products</h2>
                        <p>Search by Keyword or combination of keywords, Manufacturer, Category/Subcategory, and even limit
                            the results to the distributors that you have real-time setup for.</p>
                            <div class="feature_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Etilize-Zoom-v5b4.png" class="img-responsive" alt="">
                                </div>
                           
                        <div class="technology_box  template1 template3">
                            <div class="feature_slide">
                            <div class="feature_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Etilize-AccesoriesItems.png" class="img-responsive" alt="">
                                </div>
                                   <div class="feature_list">
                                    <h4>Product Options and Accessories</h4>
                                    <p>The ability to easily find options and accessories enables will quickly save you and
                                        your team time and money. Manufacturers provide Etilize with suggested options. Have
                                        you ever quoted a color laser printer and wondered what toner you should also include?
                                        This is no longer a problem - just click on the accessories tab for the product in
                                        Etilize and select "Toners & Cartridges". This is also very effective when quoting
                                        high end networking hardware and servers & workstations.</p>
                                </div>
                                </div>
                           
                      
                        <div class="feature_slide">
                        <div class="feature_slide_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Etilize-SimilarItems.png" class="img-responsive" alt="">
                            </div>
                        <div class="feature_list">
                            <h4>Similar and Upsell Items</h4>
                            <p>Similar Items contain a list of products that are similar in feature set to the product you are
                                looking at. This is particularly useful when the item you searched for is not in stock, you
                                can use this to find a similar product that is in stock. This also provides you with an easy
                                way to see a list of products to Cross-Sell.</p>
                         </div> 
                           
                            <div class="feature_list">
                                <p>Upsell items contain a list of products would be an up sell to the selected product using
                                    Etilize's advanced suggested selling engine. These products will be better products with
                                    more features and usually sold for a higher price. With this, you can easily provide
                                    Good, Better, Best options on your quotes increasing the chance that customers will choose
                                    the higher priced items, increasing your sales.</p>
                            </div>
                         </div>
                        </div>
                    </div>
                    <div class="callaborate">
                        <h2>Compare Products</h2>
                        <p>The QuoteWerks Product Content subscription supports side-by-side comparison of Etilize items. You
                            can compare up to 15 items at the same time (limited by monitor size). The compare displays all
                            the attributes of each item in a table format.</p>
                        <div class="technology_box template1 template2">
                            <div class="feature_slide_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Etilize-Compare-QuoteWerksv51.png" class="img-responsive" alt="">
                                   
                            </div>
                        </div>
                        <div class="feature_list">
                            <p>There is an option to "Highlight Product Differences" making it easy to pin point differences
                                between the items. You can also see all the prices and availability for all the items for
                                all the distributors at the same time empowering you with all the information needed to make
                                the best choice for your needs. Similar to the Etilize panel, you can click the distributor
                                part number to view the item on the distributor website, any part numbers found by the PartLocator
                                will be displayed with bulls-eye icon next to it, and the lowest cost for each item is indicated
                                in green. You can also select an individual item and display the Etilize panel giving you
                                access to more detailed warehouse availability and also the consumer pricing. You can quickly
                                de-clutter and remove comparison results that are not available from your distributor(s)
                                and/or not in stock. You can even create a PDF file of the Product Feature comparison table
                                (not including pricing) and add it to quote to present to your customer.
                            </p>
                        </div>
                    </div>
               
                <div class="callaborate">
                    <h2>Use our Content Subscription With Other Sources</h2>
                    <p>Content Subscription data can be used with Native and External Product Sources like Autotask, ConnectWise,
                        QuickBooks, and others. You can use the QuoteWerks Product Content with distributors that Etilize
                        does not provide part numbers for.</p>
                    <div class="technology_box template1 template2">
                        
                    </div>
                </div>
                <div class="callaborate">
                    <h2>Distributor Integration</h2>
                    <div class="technology_box template1 template2">
                        <p>
                            If you purchase from Comstor, D&H, Ingram Micro, SYNNEX, or Tech Data, you may never need to import their databases again!
                            The Etilize cloud database contains their part numbers and descriptions. Companies in the US,
                            Canada, UK, and Australia can take advantage of the innovative onscreen price comparison functionality.
                            With this, you instantly know which distributors have your items in stock, in which warehouse,
                            and your current cost.
                        </p>
                        <ul>
                            We obtain data from three sources:
                            <li>Etilize - Provides customer friendly descriptions and part numbers for multiple distributors.</li>

                            <li><a href="http://www.quotewerks.com/etilize.asp?src=navmenu#PartLocator">PartLocator</a> - Translates
                                a manufacturer part number into a specific distributor part number. This is especially useful
                                when not found in Etilize.</li>

                            <li><a href="http://itmicroscope.wp.mwdemoserver.com/quotewerks-real-time-integrations">Real-time P&A</a>  

                        </ul>

                        <div align="center" class="table-responsive">
                            <table id="FeaturesTable" class="table" width="600">
                                <tbody>
                                    <tr>
                                        <th width="154">
                                            Distributors</th>
                                        <th width="93">
                                            <a href="Etilize.asp">Etilize</a></th>
                                        <th width="100">
                                            <a href="Etilize.asp#PartLocator">PartLocator</a></th>
                                        <th width="111">
                                            Limited Support*
                                        </th>
                                        <th width="111">
                                            <a href="realtimepa.asp">Real-time</a></th>
                                        <th width="111">
                                            <a href="onlineorderingmodule.asp">Ordering</a></th>
                                    </tr>

                                    <tr class="Sect">
                                        <td colspan="6">
                                            <strong>USA</strong></td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            Accutech Data</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            Arbitech</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            ASI</td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            Bell Microproducts</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>

                                    <tr class="Even">
                                        <td width="154">
                                            Blue Star</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            Comstor / Westcon</td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            <a href="DandH.asp">D&amp;H</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            Dexxon Digital Storage</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            Digitek</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            <a href="IngramMicro.asp">Ingram Micro</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            Jenne</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>

                                    <tr class="Odd">
                                        <td width="154">
                                            Printer Essentials</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            ScanSource</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>

                                    <tr class="Odd">
                                        <td width="154">
                                            Supplies Network</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>

                                    <tr class="Even">
                                        <td width="154">
                                            Synergy Micro</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            <a href="synnex.asp">SYNNEX</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            <a href="techdata.asp">Tech Data</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                    </tr>
                                    <!--      -->
                                    <tr class="Sect">
                                        <td colspan="6">
                                            <br> <strong>Canada</strong>
                                        </td>
                                    </tr>

                                    <tr class="Even">
                                        <td width="154">
                                            Comstor / Westcon</td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>


                                    <tr class="Odd">
                                        <td width="154">
                                            <a href="DandH.asp">D&amp;H</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            <a href="IngramMicro.asp">Ingram Micro</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            Supercom</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            <a href="synnex.asp">SYNNEX</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            <a href="techdata.asp">Tech Data</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                    </tr>

                                    <tr class="Sect">
                                        <td colspan="6">
                                            <br> <strong>UK</strong> </td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            EET</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            <a href="IngramMicro.asp">Ingram Micro</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            Northamber</td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            <a href="techdata.asp">Tech Data</a></td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            West Coast</td>
                                        <td style="text-align:center" width="93" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Sect">
                                        <td colspan="6">
                                            <br> <strong>Australia</strong>
                                        </td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            Dicker Data</td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            <a href="IngramMicro.asp">Ingram Micro</a></td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Sect">
                                        <td colspan="6">
                                            <br> <strong>Belgium</strong>
                                        </td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            <a href="IngramMicro.asp">Ingram Micro</a></td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>


                                    <tr class="Sect">
                                        <td colspan="6">
                                            <br> <strong>France</strong>
                                        </td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            <a href="IngramMicro.asp">Ingram Micro</a></td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Sect">
                                        <td colspan="6">
                                            <br> <strong>Netherlands</strong>
                                        </td>
                                    </tr>
                                    <tr class="Odd">
                                        <td width="154">
                                            <a href="IngramMicro.asp">Ingram Micro</a></td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                    <tr class="Even">
                                        <td width="154">
                                            <a href="techdata.asp">Tech Data</a></td>
                                        <td style="text-align:center" width="93">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="100">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111" class="Chk">
                                            &nbsp;</td>
                                        <td style="text-align:center" width="111">
                                            &nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p align="left">*Limited Support: If you work with one of the distributors indicated in the "Limited Support"
                                column, then the distributor part numbers for these individual distributors are not available
                                through Etilize or the PartLocator. For these distributors we simply use the Manufacturer
                                Part number to request pricing and availability because these distributors allow XML requests
                                based on the manufacturer part number or actually use the manufacturer part number as their
                                distributor part number.</p>
                            <p align="left">Real-time: To obtain real-time pricing and availability, QuoteWerks needs the Distributor/Vendor
                                Part number. If only the Real-time column is selected, QuoteWerks does not obtain the necessary
                                part number from Etilize or the PartLocator. In this scenario, a product database must be
                                maintained by you for the specific distributor(s). For additional information, please contact
                                QuoteWerks Technical Suppport.</p>
                        </div>
                    </div>
                    <p>
                        *Limited Support: If you work with one of the distributors indicated in the "Limited Support" column, then the distributor
                        part numbers for these individual distributors are not available through Etilize or the PartLocator.
                        For these distributors we simply use the Manufacturer Part number to request pricing and availability
                        because these distributors allow XML requests based on the manufacturer part number or actually use
                        the manufacturer part number as their distributor part number. Real-time: To obtain real-time pricing
                        and availability, QuoteWerks needs the Distributor/Vendor Part number. If only the Real-time column
                        is selected, QuoteWerks does not obtain the necessary part number from Etilize or the PartLocator.
                        In this scenario, a product database must be maintained by you for the specific distributor(s). For
                        additional information, please contact QuoteWerks Technical Suppport.
                    </p>
                </div>
                <div class="callaborate">
                    <h2>PartLocator</h2>
                    <div class="technology_box template1 template2">

                        <p>
                            As a supplement to the distributor part numbers provided by Etilize, QuoteWerks has formed strategic alliances with distributors
                            to provide you with a more complete listing of items available in the channel. When a part number
                            is not found in an Etilize search, the QuoteWerks PartLocator will find them. The PartLocator
                            returns distributor part numbers and list prices as available. You must have a real-time xml
                            account with these distributors in order to receive their list price and to see their part numbers.</p>

                    </div>
                    <h4>Promotional Pricing and Expiration</h4>
                    <div class="technology_box template1 template2">

                        <div class="feature_slide_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ProductContentSubscription-TechData-PromoDate-Zoom.png"
                                class="img-responsive" alt="">
                        </div>

                    </div>
                    On the Etilize panel, for supported distributors, the promotional price for products will be displayed. For Tech Data customers
                    in North America, the promo expiration date will be displayed as well.
                </div>
                <div class="callaborate">
                    <h2>Language Options</h2>
                    <div class="technology_box template1 template2">

                        <p>
                            For Product Content Subscribers in North America, there is an option to select the Etilize Language of English, French, or
                            Spanish. Etilize populates all of their products with English descriptions and a subset in French
                            and Spanish. The catalog size for non-English Languages are not as large as the English catalog.</p>

                    </div>
                    <div class="technology_box template1 template2">

                        <div class="feature_slide_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/EtilizeLanguage.png" class="img-responsive" alt="">
                        </div>

                    </div>
                </div>
                <div class="callaborate">
                    <h2>Licensing</h2>
                    <div class="technology_box template1 template2">

                        <p>
                            The QuoteWerks Product Content Subscription (powered by Etilize) is sold per user as an annual subscription. Your QuoteWerks
                            Product Content Subscription user count must match your <a href="http://www.quotewerks.com/realtime.asp">Real-time Data Module</a>                            license count (subject to reserved concurrency). Etilize provides content for IT, consumer electronics,
                            household appliances, photography, and telecom related products. Contact QuoteWerks Sales for
                            more information.</p>

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