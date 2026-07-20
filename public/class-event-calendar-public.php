<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Event_Calendar
 * @subpackage Event_Calendar/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Event_Calendar
 * @subpackage Event_Calendar/public
 * @author     Your Name <email@example.com>
 */
class Event_Calendar_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $event_calendar    The ID of this plugin.
	 */
	private $event_calendar;

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
	 * @param      string    $event_calendar       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $event_calendar, $version ) {

		$this->event_calendar = $event_calendar;
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
		 * defined in Event_Calendar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Event_Calendar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->event_calendar, plugin_dir_url( __FILE__ ) . 'css/event-calendar-public.css', array(), $this->version, 'all' );

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
		 * defined in Event_Calendar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Event_Calendar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->event_calendar, plugin_dir_url( __FILE__ ) . 'js/event-calendar-public.js', array( 'jquery' ), $this->version, false );

	}

}
