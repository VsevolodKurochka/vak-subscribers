<?php
function vak_create_subscribers_menu(){
	add_menu_page( 
		'Subscribers', 'Subscribers', 'manage_options', 'vak_subscribers', 'vak_subscribers_menu_render'
	);
}
function vak_subscribers_menu_render(){ 

	//Create an instance of our package class...
	$testListTable = new TT_Example_List_Table();
	//Fetch, prepare, sort, and filter our data...
	$testListTable->prepare_items();

?>
	<h1><?php echo get_admin_page_title() ?></h1>
	<!-- <table class="striped widefat">
		<thead>
			<tr>
				<th><span>ID</span></th>
				<th><span>Name</span></th>
				<th><span>Email</span></th>
				<th><span>Phone</span></th>
				<th><span>Place</span></th>
			</tr>
		</thead>
	</table> -->
	<form id="movies-filter" method="get">
			<!-- For plugins, we also need to ensure that the form posts back to our current page -->
			<input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
			<!-- Now we can render the completed list table -->
			<?php $testListTable->display() ?>
	</form>

<?php	
}

add_action( 'admin_menu', 'vak_create_subscribers_menu' );
?>