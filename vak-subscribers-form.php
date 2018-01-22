<?php
	function vak_subscribers_form($options){
		$return = '<form method="POST" action="'.$options['action']['value'].'">';

		if( $options['name']['exists'] == 'true' ) :
			$return .= '<input type="text" name="vak_name" placeholder="'.$options['name']['placeholder'].'">';
		endif;

		if( $options['phone']['exists'] == 'true' ) :
			$return .= '<input type="text" name="vak_phone" placeholder="'.$options['phone']['placeholder'].'">';
		endif;

		if( $options['email']['exists'] == 'true' ) :
			$return .= '<input type="text" name="vak_email" placeholder="'.$options['email']['placeholder'].'">';
		endif;

		if( $options['place']['exists'] == 'true' ) :
			$return .= '<input type="hidden" name="vak_place" value="'.$options['place']['value'].'">';
		endif;
		
		$return .= '<button type="submit" class="btn btn-primary">'.$options['submit']['text'].'</button>';

		$return .= '</form>';

		echo $return;
	}
?>