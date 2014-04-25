<?php 


if ( ! class_exists( '{UCFIRST_PLUGIN_SLUG_NO_SPACE}Manager' ) ) {

	/**
	 * Class {UCFIRST_PLUGIN_SLUG_NO_SPACE}Manager
	 */
	class {UCFIRST_PLUGIN_SLUG_NO_SPACE}Manager{

		protected $is_local;

		/**
		 * Constructor
		 * 
		 * @since 1.0
		 * @version 1.0
		 * 
		 */
		public function __construct()
		{	

			$this->is_local = ($_SERVER['REMOTE_ADDR']=='127.0.0.1') ? true : false;

			$this->hooks();	

	
		}

		/**
		 * Hooks Wordpress
		 * 
		 * @since 1.0
		 * @version 1.0
		 * 
		 * @return void
		 */
		public function hooks(){

			add_action( 'wp_enqueue_scripts', array(__CLASS__, 'wp_enqueue_scripts_actions') );
			

		}

		/**
		 * Enqueue script for this plugin
		 *
		 * @since 1.0
		 * @version 1.0
		 * 
		 * @return void
		 */
		public function wp_enqueue_scripts_actions(){

			global $wp_styles; 


			// Loads our main stylesheet.
			wp_enqueue_style( '{PLUGIN_SLUG}-style', plugins_url( NAME_PLUGIN . '/src/css/style.css' ) , array(), '', 'all');
			wp_enqueue_style( '{PLUGIN_SLUG}-style-ie', plugins_url( NAME_PLUGIN . '/src/css/ie.css' ) , array(), '', 'all');
			
			$wp_styles->add_data( '{PLUGIN_NAME}-style-ie', 'conditional', 'lt IE 9' );


		
		}
	}
}


?>