<?php
/**
 * LCAD Child Theme.
 *
 * This file adds functions to the LCAD Child Theme.
 *
 * @package LCAD
 * @author  Christopher Lugenbeal
 * @license GPL-2.0-or-later
 * @link    https://www.lugenbeal.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'genesis_sample_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function genesis_sample_localization_setup() {

	load_child_theme_textdomain( genesis_get_theme_handle(), get_stylesheet_directory() . '/languages' );

}

/* Add bootstrap support to the Wordpress theme*/

function lcad_add_bootstrap() {
	// Register Bootstrap Styles and Scripts
	wp_register_style('lcad-bootstrap-style', get_stylesheet_directory_uri() . '/lib/bootstrap/dist/css/bootstrap.min.css');
	wp_register_script('lcad-bootstrap-script', get_stylesheet_directory_uri() . '/lib/bootstrap/dist/js/bootstrap.min.js', array(), '0.1', true);

	// Enqueue Bootstrap Styles and Scripts
	wp_enqueue_style( 'lcad-bootstrap-style' );
	wp_enqueue_script( 'lcad-bootstrap-script' );
}

add_action( 'wp_enqueue_scripts', 'lcad_add_bootstrap' );

// Add Child Theme Stylesheet Support
function add_all_stylesheets()
{
    // wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
    // wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css');
    // wp_enqueue_style('slick-theme-style', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css');
	wp_enqueue_style('slick-style', get_stylesheet_directory_uri() . '/lib/slick-slider/slick/slick.css');
	wp_enqueue_style('slick-theme-style', get_stylesheet_directory_uri() . '/lib/slick-slider/slick/slick-theme.css');
	wp_enqueue_style('lcad-custom-styles', get_stylesheet_directory_uri() . '/main.css');
    // wp_enqueue_style('flexboxgrid', get_stylesheet_directory_uri() . '/flexboxgrid-min.css');
    // wp_enqueue_style('fontawesome-5', '//use.fontawesome.com/releases/v5.4.1/css/all.css');
}
add_action('wp_enqueue_scripts', 'add_all_stylesheets', 200); // 200 is the order - load after parent main.css

// Add Child Theme JS Support
function extras_script()
{
    // wp_register_script('slick_script', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js', '', '', true);
	wp_register_script('slick-jquery-1', '//code.jquery.com/jquery-1.11.0.min.js', '', '', true);
	wp_register_script('slick-jquery-2', '//code.jquery.com/jquery-migrate-1.2.1.min.js', '', '', true);
	wp_register_script('slick_script', get_stylesheet_directory_uri() . '/lib/slick-slider/slick/slick.min.js', '', '', true);
    wp_register_script('slider_settings', get_stylesheet_directory_uri() . '/slider-settings.js', '', '', true);
	wp_register_script('scroll_script', get_stylesheet_directory_uri() . '/opacity-scroller-main/js/scroller.js', '', '', true);
    wp_register_script('main_script', get_stylesheet_directory_uri() . '/main.js', '', '', true);
    wp_register_script('font_awesome_script', '//kit.fontawesome.com/a5221f2a14.js', '', '', true);
    // wp_register_script('polyfill_script', '//cdn.polyfill.io/v2/polyfill.min.js', '', '', true);
    // wp_register_script('fontawesome-upgrade', '/wp-content/themes/q4fw-theme/fontawesome4to5-min.js', '', '', true);
    wp_enqueue_script('slick_script');
    wp_enqueue_script('slider_settings');
	wp_enqueue_script('scroll_script');
	wp_enqueue_script('main_script');
	wp_enqueue_script('font_awesome_script');
    // wp_enqueue_script('slick-jquery-1');
	// wp_enqueue_script('slick-jquery-2');
    // wp_enqueue_script('fontawesome-upgrade');
}

add_action('wp_enqueue_scripts', 'extras_script');

// Setup Custom Image Sizes
function setup_custom_image_sizes()
{
    add_theme_support('post-thumbnails');
	
    // Global
	add_image_size('blog-thumbnail', 450, 450, true);
	add_image_size('student-work-featured', 620, 375, true);
    add_image_size('student-work', 250, 154, true);
    add_image_size('info-card', 450, 275, true);
    add_image_size('staff-card', 326, 400, true);
    
    // Home Page
	add_image_size('home-hero-slide', 500, 750, true);
    add_image_size('home-experience-slide', 720, 720, true);
    add_image_size('home-staff-slide', 450, 566, true);
    add_image_size('home-carousel-slide', 360, 360, true);

    // Single - Program
    add_image_size('program-logo', 250, 99, true);
	
    // Alumni Page
    // add_image_size('tout-image', 446, 270, true);
    // add_image_size('blog-large-custom', 677, 525, true);
    // add_image_size('blog-small-custom', 479, 256, true);
    // add_image_size('prime-image', 869, 600, true);
    // add_image_size('acc-image', 425, 370, true);
    // add_image_size('focus-image', 900, 550, true);
    // add_image_size('icon-image', 60, 60, true);

    // Contact Page
    add_image_size('contact-thumbnail', 256, 256, true);

    // More News Archive
    // add_image_size('news-thumbnail', 450, 245, true);

}

add_action('after_setup_theme', 'setup_custom_image_sizes');

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 2.7.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

// Registers the responsive menus.
if ( function_exists( 'genesis_register_responsive_menus' ) ) {
	genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );
}

add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_sample_enqueue_scripts_styles() {

	$appearance = genesis_get_config( 'appearance' );

	wp_enqueue_style( // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion -- see https://core.trac.wordpress.org/ticket/49742
		genesis_get_theme_handle() . '-fonts',
		$appearance['fonts-url'],
		[],
		null
	);

	wp_enqueue_style( 'dashicons' );

	if ( genesis_is_amp() ) {
		wp_enqueue_style(
			genesis_get_theme_handle() . '-amp',
			get_stylesheet_directory_uri() . '/lib/amp/amp.css',
			[ genesis_get_theme_handle() ],
			genesis_get_theme_version()
		);
	}

}

add_filter( 'body_class', 'genesis_sample_body_classes' );
/**
 * Add additional classes to the body element.
 *
 * @since 3.4.1
 *
 * @param array $classes Classes array.
 * @return array $classes Updated class array.
 */
function genesis_sample_body_classes( $classes ) {

	if ( ! genesis_is_amp() ) {
		// Add 'no-js' class to the body class values.
		$classes[] = 'no-js';
	}
	return $classes;
}

add_action( 'genesis_before', 'genesis_sample_js_nojs_script', 1 );
/**
 * Echo the script that changes 'no-js' class to 'js'.
 *
 * @since 3.4.1
 */
function genesis_sample_js_nojs_script() {

	if ( genesis_is_amp() ) {
		return;
	}

	?>
	<script>
	//<![CDATA[
	(function(){
		var c = document.body.classList;
		c.remove( 'no-js' );
		c.add( 'js' );
	})();
	//]]>
	</script>
	<?php
}

add_filter( 'wp_resource_hints', 'genesis_sample_resource_hints', 10, 2 );
/**
 * Add preconnect for Google Fonts.
 *
 * @since 3.4.1
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function genesis_sample_resource_hints( $urls, $relation_type ) {

	if ( wp_style_is( genesis_get_theme_handle() . '-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = [
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		];
	}

	return $urls;
}

add_action( 'after_setup_theme', 'genesis_sample_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

add_action( 'after_setup_theme', 'genesis_sample_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_post_type_support() {

	$post_type_supports = genesis_get_config( 'post-type-supports' );

	foreach ( $post_type_supports as $post_type => $args ) {
		add_post_type_support( $post_type, $args );
	}

}

// Adds image sizes.
add_image_size( 'sidebar-featured', 75, 75, true );
add_image_size( 'genesis-singular-images', 702, 526, true );

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}

add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_sample_author_box_gravatar( $size ) {

	return 90;

}

add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;
	return $args;

}

// Register Custom Widgets
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];

	// Social Widget
    register_sidebar([
        'name'          => __('Social Widget', 'genesis'),
        'id'            => 'lcad-social-share'
    ] + $config);
    // register_sidebar([
    //     'name'          => __('Sidebar 2', 'sage'),
    //     'id'            => 'sidebar-2'
    // ] + $config);
    // register_sidebar([
    //     'name'          => __('Sidebar 3', 'sage'),
    //     'id'            => 'sidebar-3'
    // ] + $config);
    // register_sidebar([
    //     'name'          => __('Sidebar 4', 'sage'),
    //     'id'            => 'sidebar-4'
    // ] + $config);
    // register_sidebar([
    //     'name'          => __('Sidebar 5', 'sage'),
    //     'id'            => 'sidebar-5'
    // ] + $config);

    // // Footer Widgets 1 - 5
    // register_sidebar([
    //     'name'          => __('Footer 1', 'sage'),
    //     'id'            => 'sidebar-footer-1'
    // ] + $config);
    // register_sidebar([
    //     'name'          => __('Footer 2', 'sage'),
    //     'id'            => 'sidebar-footer-2'
    // ] + $config);
    // register_sidebar([
    //     'name'          => __('Footer 3', 'sage'),
    //     'id'            => 'sidebar-footer-3'
    // ] + $config);
    // register_sidebar([
    //     'name'          => __('Footer 4', 'sage'),
    //     'id'            => 'sidebar-footer-4'
    // ] + $config);
    // register_sidebar([
    //     'name'          => __('Footer 5', 'sage'),
    //     'id'            => 'sidebar-footer-5'
    // ] + $config);

    // // Blog Widgets 1 - 2
    // register_sidebar([
    //     'name'          => __('Blog Author', 'sage'),
    //     'id'            => 'sidebar-blog-1'
    // ] + $config);
    // register_sidebar([
    //     'name'          => __('Blog Social', 'sage'),
    //     'id'            => 'sidebar-blog-2'
    // ] + $config);
});

// Register Custom Menus
function register_menus() { 
    register_nav_menus(
        array(
            'quick-links' => 'Quick Links',
            'academics-menu' => 'Academics',
			'admissions-menu' => 'Admission',
			'alumni-student-life-menu' => 'Alumni and Student Life',
        )
    ); 
}
add_action( 'init', 'register_menus' );

// Create Breadcrumb
function the_breadcrumb() {
    echo '<ul id="crumbs">';

    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('blog');
        echo '">';
        echo 'BlogHome';
        echo "</a>";
        echo "<span class='arrow-1 dashicons dashicons-arrow-right-alt2'></span><span class='arrow-2 dashicons dashicons-arrow-right-alt2'></span>";
        echo "</li>";
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo "</li><li>";
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li>';
            echo the_title();
            echo '</li>';
        }
    }

    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}

// function my_excerpt_length($length){ return 80; } add_filter('excerpt_length', 'my_excerpt_length');

// Pagination Function
function lcad_pagination() {

    if( is_singular() )
        return;

    global $wp_query;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 5 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
    }

    /** Link to current page*/
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
    }

    /** Link to last page*/
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}