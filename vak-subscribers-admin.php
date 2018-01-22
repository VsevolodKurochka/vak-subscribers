<?php
	function vak_create_subscribers_table() {
		global $wpdb;
		$table_name = $wpdb->prefix . 'subscribers';
		$sql = "CREATE TABLE $table_name (
				id int(11) NOT NULL AUTO_INCREMENT,
				name varchar(255) DEFAULT NULL,
				phone varchar(255) DEFAULT NULL,
				email varchar(255) DEFAULT NULL,
				place varchar(255) DEFAULT NULL,
				UNIQUE KEY id (id)
		);";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}
	add_action( 'admin_init', 'vak_create_subscribers_table' );

?>