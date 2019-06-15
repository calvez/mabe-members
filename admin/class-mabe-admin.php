<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://clvz.hu
 * @since      1.0.0
 *
 * @package    Mabe
 * @subpackage Mabe/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mabe
 * @subpackage Mabe/admin
 * @author     clvz <nemeth.lorant@clvz.hu>
 */
class Mabe_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mabe_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mabe_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mabe-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mabe_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mabe_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mabe-admin.js', array( 'jquery' ), $this->version, false );

	}
// Register Custom Post Type
public static  function mabe_tagok() {

	$labels = array(
		'name'                  => _x( 'MABE Tagok', 'Post Type General Name', 'mabe_artist' ),
		'singular_name'         => _x( 'MABE Tag', 'Post Type Singular Name', 'mabe_artist' ),
		'menu_name'             => __( 'Tagok', 'mabe_artist' ),
		'name_admin_bar'        => __( 'Tag', 'mabe_artist' ),
		'archives'              => __( 'Tagok', 'mabe_artist' ),
		'attributes'            => __( 'Item Attributes', 'mabe_artist' ),
		'parent_item_colon'     => __( 'Parent Item:', 'mabe_artist' ),
		'all_items'             => __( 'All Items', 'mabe_artist' ),
		'add_new_item'          => __( 'Add New Item', 'mabe_artist' ),
		'add_new'               => __( 'Add New', 'mabe_artist' ),
		'new_item'              => __( 'New Item', 'mabe_artist' ),
		'edit_item'             => __( 'Edit Item', 'mabe_artist' ),
		'update_item'           => __( 'Update Item', 'mabe_artist' ),
		'view_item'             => __( 'View Item', 'mabe_artist' ),
		'view_items'            => __( 'View Items', 'mabe_artist' ),
		'search_items'          => __( 'Search Item', 'mabe_artist' ),
		'not_found'             => __( 'Not found', 'mabe_artist' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mabe_artist' ),
		'featured_image'        => __( 'Featured Image', 'mabe_artist' ),
		'set_featured_image'    => __( 'Set featured image', 'mabe_artist' ),
		'remove_featured_image' => __( 'Remove featured image', 'mabe_artist' ),
		'use_featured_image'    => __( 'Use as featured image', 'mabe_artist' ),
		'insert_into_item'      => __( 'Insert into item', 'mabe_artist' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mabe_artist' ),
		'items_list'            => __( 'Items list', 'mabe_artist' ),
		'items_list_navigation' => __( 'Items list navigation', 'mabe_artist' ),
		'filter_items_list'     => __( 'Filter items list', 'mabe_artist' ),
	);
	$args = array(
		'label'                 => __( 'MABE Tag', 'mabe_artist' ),
		'description'           => __( 'MABE tagok', 'mabe_artist' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'mabe_tagok', $args );

}

}
