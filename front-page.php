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
           
            <!--    <h2><?php //echo $slide['title']; ?></h2>
            <p><?php// echo $slide['description']; ?></p> -->
               <a href="<?php echo $slide['button']['url']; ?>" target="<?php echo $slide['button']['target']; ?>"><?php echo $slide['button']['text']; ?></a>
           
         </div>
      </div>
      <?php
         }
         
         }
         ?>
   </section>
   <?php get_template_part( 'page-templates-part/content','tab'); ?>
   <div class="main_head">
      <h1><?php echo CFS()->get('market_leading_heading'); ?></h1>
      <h4><?php echo CFS()->get('market_leading_sub_heading'); ?></h4>
   </div>
   <section class="comn_sec feature_sec">
      <div class="container">
         <div class="comn_head">
            <h4>Featured Products</h4>
            <span>Featured Products</span>
         </div>
         <div class="feature_slider">
            <?php
               $args = array(
                  'post_type' => 'cus_product',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'category',
                      'field'    => 'slug',
                      'terms'    => 'feauture-products',
                      'order'    => 'ASC'
                    ),
                  ),
                );
                $query = new WP_Query( $args );
                if($query->have_posts()):
                  while($query->have_posts()):$query->the_post();
               ?>
            <div class="feature_slide">
               <div class="feature_slide_img">
                  <?php the_post_thumbnail('medium',array('class' => 'img-responsive'));?>
               </div>
               <div class="feature_slide_cont">
                  <p><?php the_content(); ?></p>
                  <a href="<?php echo (CFS()->get('page_link')? CFS()->get('page_link'):the_permalink()); ?>" class="btn btn-default">Read More</a>
               </div>
            </div>
            <?php endwhile; wp_reset_query(); endif; ?>

         </div>
      </div>
   </section>
   <section class="comn_sec partner_sec">
      <div class="container">
         <div class="row">
            <div class="col-sm-7">
               <div class="partner_left">
                  <h3><?php echo CFS()->get('partner_heading'); ?></h3>
                  <div class="partner_full_img">
                     <img src="<?php echo CFS()->get('partner_image'); ?>" class="img-responsive" alt="">
                  </div>
                  <p><?php echo CFS()->get('partner_content'); ?></p>
                  <div class="read_more_box text-right">
                     <a href="<?php echo CFS()->get('partner_page_link'); ?>"><i class="flaticon-right-arrow" aria-hidden="true"></i>
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
                        $image_url = get_template_directory_uri().'/assets/images/imgpsh_fullsize.png';
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
                        <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" width="170" height="170">
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
   <?php get_template_part( 'page-templates-part/content', 'testimonial' ); ?>
</div>
<!--Main container sec end-->
<?php get_footer();