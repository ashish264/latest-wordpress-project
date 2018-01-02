<?php get_header(); ?>
<!--Main container sec start-->
        <div class="main_container">
			 <section class="glob_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="quatevalet quatevaletshopping">
                            <?php if(have_posts()):while(have_posts()):
                            the_post(); ?>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>

                                <div class="img_quate">
                                <?php  the_post_thumbnail('full'); ?>
                                </div>
                            <?php endwhile; endif; ?>
                                <div class="overview">
                                    <h4><?php echo CFS()->get('shopping_overview_heading');?></h4>
                                    <p>The QuoteValet Shopping Cart is included in your QuoteValet subscription at no extra
                                        charge, and is easy to set up and use! Simply:
                                    </p>
                                    <ul class="quatevalet-listing">
                                        <?php echo CFS()->get('shopping_overview_description');?>
                                    </ul>

                                    <p>Orders will appear on your QuoteValet Dashboard. Get used to coming into work each morning
                                        to an inbox full of paid orders from your QuoteValet Shopping Cart.</p>
                                </div>
                                <div class="shopping_img">
                                    <img src="<?php echo CFS()->get('shopping_overview_image');?>">
                                </div>
                            </div>
                            <div class="shopping_cartbenefits">
                                <h2>QuoteValet Shopping Cart: Benefits</h2>
                            	<?php $shopping_benefits = CFS()->get('shopping_benefits');
                            	foreach ($shopping_benefits as $shopping_benefit) {
                            	
                            	?>
                            	<div class="benefit_box">
                                <h5><?php echo $shopping_benefit['benefits_heading']; ?></h5>
                                <small><?php echo $shopping_benefit['benefits_description']; ?></small>
                                </div>
                                <?php } ?>
                                <h2>QuoteValet Shopping Cart vs Traditional Web Storefront</h2>
                            	Your Shopping Cart looks nice, BUT "I want to have a web store front like CDW that my customers can order through."

                            	<div class="benefit_box" >
                                <h5>Customer Authentication</h5>
                                <small>
                                A full web store is actually really involved including maintaining customer credentials. Additionally, typically a company's customers are already in their CRM system, so there is the challenge of maintaining two systems with duplicate customer information in them.</small>
                                <h5>What products do you want to show customers?</h5>
                                <small>
                                We typically hear from companies in the IT industry that they want to have their own online store front like CDW that their customers can order through. Since you can have over 500,000 products available through the distributors and Etilize, how would the reseller be thinking or determining which items they would want each customer to be able to order? Would they manually and specifically add it to a list? What happens when new product lines are released?</small>
                                <h5>What descriptions/pictures to use?</h5>
                                <small>
                                The product descriptions provided by distributors are very cryptic. They are not something that can be presented to a customer, so a 3rd party service like Etilize also needs to be incorporated to display customer friendly descriptions. The distributors also do not supply product pictures, those would also need to be obtained from a 3rd party.</small>
                                <h5>Pricing</h5>
                                <small>
                                What controls the pricing that the customer should see for 500,000+ products?</small>
                                <h5>Availability</h5>
                                <small>
                                When the customer finds the item out of 500,000, is this item actually in stock in any of the multitude of warehouses each supported distributor has? If yes and is the quantity of 20 split between two warehouses, one in California and one in Chicago, and the customer is in Florida, which warehouse do we order from? Do shipping costs change?</small>
                                <h5>Shipping Costs</h5>
                                <small>
                                What are the shipping charges from the distributor? Can we know them in advance to include it in the customer order? The customer could order a heavy rack that needs to be freight delivered on a truck and has special fees to ship, etc. Which carrier should we allow the customer to choose? Does it ship from reseller to customer, or from distributor to reseller to customer. Does the distributor that was selected to source the item from offer that method of shipping? When it does ship from the distributor, how to you control that the distributor includes only a packing slip on a direct shipment to the customer vs including the invoices in the package with prices.</small>
                                <h5>Sales Tax</h5>
                                <small>
                                Charge sales tax? What amount? This could be shipping in state or out, to different counties and tax jurisdictions. Is the customer eligible for Government or Education tax exemptions?</small>
                                <h5>Payment</h5>
                                <small>
                                How will the customer pay? By terms or credit card. How does this payment integrate with accounting?
                                In summary, we have found that resellers might like the general idea of "having a web store front like CDW that my customers can order through", but in reality, it is not a simple turn-key solution that they can just turn on. A full fledged online storefront solution that they are looking for requires a large investment in time and support systems to be able to fully handle the many nuances required to finalize orders, especially related to pricing, shipping and taxes.
                                
                                At first glance it might seem that it is simple to create an online store front and it is if you offer a limited set of functionality, but after thinking it through resellers realize that a robust online storefront is by nature a very complicated offering. 
                                
                                Our QuoteValet Shopping Cart solution is a much more attainable solution and is included at no additional cost in the QuoteValet Subscription. 
                                                                </small>
                                </div>
                                <h2>Subscription Based</h2>
                            	
                            	<div class="benefit_box">
                                <small>The QuoteValet Shopping Cart is included in your QuoteValet subscription for no additional fee</small>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--Main container sec end-->
<?php get_footer(); ?>