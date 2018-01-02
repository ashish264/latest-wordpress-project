<?php
$template_url = get_template_directory_uri();
get_header(); ?>

<!--Main container sec start-->
    <div class="main_container">
      <section class="banner_slider">
       <?php 
          $banner_slider = CFS()->get('home_page_slider');
          if(is_array($banner_slider)){
            foreach ($banner_slider as  $slide) {
              ?>
    <div class="banner_slide">
          <div class="banner_slide_img">
            <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
          </div>
          <div class="banner_slide_contant text-right">
            <div class="container">
              <h2><?php echo $slide['title']; ?></h2>
              <p><?php echo $slide['description']; ?></p>
              <a href="<?php echo $slide['button']['url']; ?>" target="<?php echo $slide['button']['target']; ?>"><?php echo $slide['button']['text']; ?></a>
            </div>
          </div>
        </div>
            <?php
            }
            
          }
       ?>
        
        
      </section>
      <div class="section_list text-center">
        <div class="container">
          <ul>
            <li><a href="http://www.quotewerks.com/ViewDemo.asp" target="_blank"><i class="flaticon-road"></i> Take a tour</a></li>
            <li><a href="http://www.quotewerks.com/prodinfo.asp" target="_blank"><i class="flaticon-verification-of-delivery-list-clipboard-symbol"></i> Product Information</a></li>
            <li><a href="http://www.quotewerks.com/reqdemo.asp" target="_blank"><i class="flaticon-interface"></i> Download free Trial</a></li>
          </ul>
        </div>
      </div>
      <div class="main_head">
        <h1>The Market Leading sales Quoting and Proposal Solution!</h1>
        <h4>Over 80,000 Users in 101 Countries!</h4>
      </div>
      <section class="comn_sec feature_sec">
        
        <div class="container">
            <div class="comn_head">
                <h4>Featured Products</h4>
                <span>Featured Products</span>
              </div>
          <div class="feature_slider">
            <div class="feature_slide">
              <div class="feature_slide_img">
                <img src="<?php echo $template_url; ?>/assets/images/feature1.jpg" class="img-responsive" alt="">
              </div>
              <div class="feature_slide_cont">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Aliquam viverra dolor sit consectetur.</p>

                <a href="#" class="btn btn-default">Read More</a>
              </div>
            </div>
            <div class="feature_slide">
              <div class="feature_slide_img">
                <img src="<?php echo $template_url; ?>/assets/images/feature1.jpg" class="img-responsive" alt="">
              </div>
              <div class="feature_slide_cont">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Aliquam viverra dolor sit consectetur.</p>

                <a href="#" class="btn btn-default">Read More</a>
              </div>
            </div>
            <div class="feature_slide">
              <div class="feature_slide_img">
                <img src="<?php echo $template_url; ?>/assets/images/feature1.jpg" class="img-responsive" alt="">
              </div>
              <div class="feature_slide_cont">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Aliquam viverra dolor sit consectetur.</p>

                <a href="#" class="btn btn-default">Read More</a>
              </div>
            </div>
            <div class="feature_slide">
              <div class="feature_slide_img">
                <img src="<?php echo $template_url; ?>/assets/images/feature1.jpg" class="img-responsive" alt="">
              </div>
              <div class="feature_slide_cont">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Aliquam viverra dolor sit consectetur.</p>

                <a href="#" class="btn btn-default">Read More</a>
              </div>
            </div>
            <div class="feature_slide">
              <div class="feature_slide_img">
                <img src="<?php echo $template_url; ?>/assets/images/feature1.jpg" class="img-responsive" alt="">
              </div>
              <div class="feature_slide_cont">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Aliquam viverra dolor sit consectetur.</p>

                <a href="#" class="btn btn-default">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="comn_sec partner_sec">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <div class="partner_left">
                <h3>Becoming a Partner?</h3>
                <div class="partner_full_img">
                  <img src="<?php echo $template_url; ?>/assets/images/partner_main.png" class="img-responsive" alt="">
                </div>
                <p>Whether you’re interested in adding value to client’s CRM implementations or building new revenue streams
                  for your own company becoming a partner could not be more simple. Improving your client’s business performance
                  with any of the product portfolio not only strengthens your relationship with your client it builds product
                  knowledge enabling you to identify others who could benefit from such a solution.</p>
                <div class="read_more_box text-right">
                  <a href="/partners/"><i class="flaticon-right-arrow" aria-hidden="true"></i>
                      </a>
                </div>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="partner_right">
                <h3>News</h3>
                <?php 
            $args = array('post_type'=> array('cus_news'), 'posts_per_page' => 3, 'post_status' => 'publish');
            $news = new WP_Query($args);
            if($news->have_posts()){
              while($news->have_posts()){
                $news->the_post();
                $image_url = get_template_directory_uri().'/assets/images/No_image_available.svg';
                $excerpt = get_the_excerpt();
                $news_link = CFS()->get('news_url');
                if(!empty($news_link['url']))
                  $news_link = $news_link['url'];
                else
                  $news_link = get_the_permalink();

                if(empty($excerpt))
                  $excerpt = get_the_content();

                $excerpt = substr($excerpt, 0, 100);
                if(has_post_thumbnail())
                  $image_url = get_the_post_thumbnail_url(get_the_ID(), array(170,170));
                ?>
            <div class="partner_blog news_item">
                        <div class="partner_blog_img">
                          <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">
                          <span><?php echo get_the_date('dS M'); ?></span>
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo $excerpt; ?></p>
                        <div class="read_more_box">
                          <a href="<?php echo $news_link; ?>" target="_blank">
                            <i class="flaticon-right-arrow" aria-hidden="true"></i>
                          </a>
                        </div>
                    </div>
                <?php
              }
              wp_reset_postdata();
            }else{
              echo '<p>No news found!</p>';
            }

          ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="comn_sec testimonial_sec">
        <div class="container">
            <div class="comn_head">
                <h4>Testimonial</h4>
                <span>Testimonial</span>
              </div>
        <div class="row">
          <?php 
            $args = array('post_type'=> array('testimonial'), 'posts_per_page' => 2, 'post_status' => 'publish');
            $testimonials = new WP_Query($args);
            if($testimonials->have_posts()){
              while($testimonials->have_posts()){
                $testimonials->the_post();
                $image_url = get_template_directory_uri().'/assets/images/No_image_available.svg';
                if(has_post_thumbnail())
                  $image_url = get_the_post_thumbnail_url(get_the_ID(), array(170,170));
                ?>
            <div class="col-sm-6">
              <div class="testimonial_box">
                <div class="testimonial_img">

                  <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">
                </div>
                <h4><?php the_title(); ?></h4>
                <p>“<?php echo get_the_content(); ?>“</p>
                <span><?php echo get_the_date( 'd/m/Y' ); ?></span>
              </div>
            </div>
                <?php
              }
              wp_reset_postdata();
            }else{
              echo '<p>No testimonial found!</p>';
            }

          ?>
      
           
        </div>
        </div>

      </section>
    </div>
    <!--Main container sec end-->

<?php get_footer();
