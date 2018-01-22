<?php
	function vak_insert_subscribers_table($post) {
		global $wpdb;
		$table_name = $wpdb->prefix . 'subscribers';
		$wpdb->insert(
				$table_name,
				array(
					'name' 	=> $post['vak_name'],
					'phone' => $post['vak_phone'],
					'email' => $post['vak_email'],
					'place' => $post['vak_place']
				)
		);
	}
?>