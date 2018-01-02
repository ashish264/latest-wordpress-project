<?php

function itmicroscope_setup() {
	
	load_theme_textdomain( 'itmicroscope' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'itmicroscope-featured-image', 2000, 1200, true );

	add_image_size( 'itmicroscope-thumbnail-avatar', 100, 100, true );

	register_nav_menus( array(
		'main_menu'    => __( 'Main Menu', 'itmicroscope' ),
		'footer_menu' => __( 'Footer Menu', 'itmicroscope' ),
	) );

	
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'itmicroscope_setup' );

wp_get_theme()->get_page_templates(null, 'page');

remove_filter( 'the_content', 'wpautop' );

//Add shortcode for custom paypal



function buy_now_button_shortcode( $atts ) {

    $a = shortcode_atts( array(
        'price' => '10',
        'product_title' => 'demo'
    ), $atts );
    return '<form  action = "https://www.paypal.com/cgi-bin/webscr" method = "post">
    <input name = "cmd" value = "_cart" type = "hidden">
    <input name = "upload" value = "1" type = "hidden">
    <input name = "no_note" value = "0" type = "hidden">
    <input name = "bn" value = "buy_now" type = "hidden">
    <input name = "tax" value = "0" type = "hidden">
    <input name = "rm" value = "2" type = "hidden">
    <input name = "business" value = "paypal47@itmicroscope.com" type = "hidden">
    <input name = "handling_cart" value = "0" type = "hidden">
    <input name = "currency_code" value = "GBP" type = "hidden">
    <input name = "lc" value = "GBP" type = "hidden">
    <input name = "return" value = "<?php echo site_url(); ?>" type = "hidden">
    <input name = "cbt" value = "Return to My Site" type = "hidden">
    <input name = "cancel_return" value = "<?php echo site_url(); ?>" type = "hidden">
    <input name = "custom" value = "" type = "hidden">
 
    <div id = "item_1" class = "itemwrap">
        <input name = "item_name_1" value = "'.esc_attr($a['product_title']).'" type = "hidden">
        <input name = "quantity_1" value = "1" type = "hidden">
        <input name = "amount_1" value = "'.esc_attr($a['price']).'" type = "hidden">
        <input name = "shipping_1" value = "0" type = "hidden">
    </div>
    <input  value = "Buy Now!" class = "btn btn-default" type = "submit">
</form>';
}
add_shortcode( 'buy_now', 'buy_now_button_shortcode' );