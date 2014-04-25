<?php

/**
 * 
 * Plugin Name: {PLUGIN_NAME}
 * Description: {PLUGIN_DESCRIPTION}
 * Version: {PLUGIN_VERSION}
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}




add_action( 'plugins_loaded', 'name_loader' );

function name_loader(){
	
	include("constante.php");
	include("class/manager/{UCFIRST_PLUGIN_SLUG_NO_SPACE}Manager.php");
	
}