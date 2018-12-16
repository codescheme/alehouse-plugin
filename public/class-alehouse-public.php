<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://codescheme.github.io
 * @since      1.0.0
 *
 * @package    Alehouse
 * @subpackage Alehouse/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Alehouse
 * @subpackage Alehouse/public
 * @author     LWS <codescheme@gmail.com>
 */
class Alehouse_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Alehouse_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Alehouse_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/alehouse-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Alehouse_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Alehouse_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/alehouse-public.js', array( 'jquery' ), $this->version, false );

	}

    public function cs_cleanup()
    {
        remove_action( 'wp_head', 'wp_generator' );               // WP Version
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'wp_head', 'wlwmanifest_link' );
        remove_action( 'wp_head', 'rsd_link' );                 // RSD link
        remove_action( 'wp_head', 'feed_links_extra', 3 );            // Category feed link
        remove_action( 'wp_head', 'feed_links', 2 );                // Post and comment feed links
    }

    public function cs_business_card()
    {
if(true){
    
    //require_once("partials/cs-amazon-admin-display-products.php");
            ?>
<meta name="description" content="<?php echo esc_attr(get_the_title()); ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="<?php echo esc_html('dddd'); ?>"/>
<meta name="twitter:title" content="<?php echo esc_html(get_the_title()); ?>"/>
<meta name="twitter:site" content="<?php ?>"/>
<meta name="twitter:image" content="<?php ?>"/>
<meta name="twitter:creator" content="<?php ?>"/>
            <?php
           }
    }
}
