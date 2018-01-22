<?php
function vak_create_subscribers_menu(){
	add_menu_page( 
		'Subscribers', 'Subscribers', 'manage_options', 'vak_subscribers', 'vak_subscribers_menu_item'
	);
}
function vak_subscribers_menu_item(){ ?>
	<?php echo '1'; ?>

<?php	
}

add_action( 'admin_menu', 'vak_create_subscribers_menu' );
?>