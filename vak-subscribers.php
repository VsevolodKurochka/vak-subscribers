<?php
/*
Plugin Name: vak-subscribers
Description: Плагин добавляет подписчиков и выводит их в админку
Version: 1.0
Author: Vsevolod Kurochka
License: GPL2
*/

define( 'SUBSCRIBERS__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

define( 'SUBSCRIBERS__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once( SUBSCRIBERS__PLUGIN_DIR . 'vak-subscribers-table-class.php' );

if( is_admin() ){
	require_once( SUBSCRIBERS__PLUGIN_DIR . 'vak-subscribers-admin.php' );

	require_once( SUBSCRIBERS__PLUGIN_DIR . 'admin\menu.php' );
	require_once( SUBSCRIBERS__PLUGIN_DIR . 'admin\submenu.php' );
}




require_once( SUBSCRIBERS__PLUGIN_DIR . 'vak-subscribers-insert.php' );
require_once( SUBSCRIBERS__PLUGIN_DIR . 'vak-subscribers-form.php' );

//require_once( SUBSCRIBERS__PLUGIN_DIR . 'vak-subscribers-view.php' );
	
?>