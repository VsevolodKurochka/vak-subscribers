<?php

function submenu_landing_tank(){

	add_submenu_page( 'vak_subscribers', 'Landing Tank', 'Landing Tank', 'manage_options', 'submenu_landing_tank', 'submenu_landing_tank_echo');
}

function submenu_landing_tank_echo(){
	echo 'Landing Tank';
}
add_action( 'admin_menu', 'submenu_landing_tank' );

?>