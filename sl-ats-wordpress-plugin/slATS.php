<?php
/**
 * Plugin Name: SL ATS
 * @author Nazere Wright
 */



class SLATS {
	function sl_ats_setup_menu(){

    	add_menu_page( 'Applicant Tracking', 'Applicant Tracking', 'manage_options', 'test-plugin', array('SLATS_Menu_Detail', 'menu_page'), null, 3 );
    	
    	add_submenu_page( 'test-plugin', 'Company Profile', 'Company Profile', 'administrator', 'sl-ats-company', array('SLATS_Menu_Detail', 'sl_ats_companies_page')  );

    	register_post_type( 'recruiters', array(
			'label' => 'Manage Recruiters',
			'labels'=> array( 
				'not_found'=> 'No recruiters found.'
			),
			'description'           => '',
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true, /* Do not show admin menu */
		) );



    	add_submenu_page( 'test-plugin', 'Manage Recruiters', 'Recruiters', 'administrator', "edit.php?post_type=recruiters" );

    	register_post_type( 'jobs', array(
			'label' => 'Manage Jobs',
			'labels'=> array( 
				'not_found'=> 'No jobs found.'
			),
			'description'           => '',
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true, /* Do not show admin menu */
		) );
		add_submenu_page( "test-plugin", "Jobs", "Jobs", 'manage_options', "edit.php?post_type=jobs" );


		$candidate_post_type = register_post_type( 'candidates', array(
			'label' => 'candidates',
			'labels'=> array( 
				'not_found'=> 'No candidates found.'
			),
			'description'           => '',
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true, /* Do not show admin menu */
			'supports' => array('title','editor','custom-fields','comments')    
		) );

		//add_post_meta( $candidate_post_type->ID, 'first_name', "Naz", true );
		add_submenu_page( "test-plugin", "Manage Candidates", "Candidates", 'manage_options', "edit.php?post_type=candidates" );

    	// add_submenu_page( 'test-plugin', 'Manage Jobs', 'Jobs', 'administrator', "edit.php?post_type=jobs", array('SLATS_Menu_Detail', 'sl_ats_jobs_page')  );

    	// add an action here for the menu being created
	}

	// function sl_ats_init(){

	// }

	function sl_ats_custom_edit_job_columns( $columns ){
		return $columns;
	}

	function sl_ats_custom_edit_candidate_columns( $columns ){
		return $columns;
	}

	function sl_ats_custom_edit_recruiter_columns( $columns ){
		return $columns;
	}

}

// edit the sortable columns of each post type created (Admin table when viewing all)
add_filter( 'manage_jobs_posts_columns', array('SLATS', 'sl_ats_custom_edit_job_columns') );
add_filter( 'manage_recruiters_posts_columns', array('SLATS', 'sl_ats_custom_edit_recruiter_columns') );
add_filter( 'manage_candidates_posts_columns', array('SLATS', 'sl_ats_custom_edit_candidate_columns') );
// hook the setup function to add to the admin menu
add_action('admin_menu', array('SLATS', 'sl_ats_setup_menu'));
 



class SLATS_Menu_Detail{
	// be a dashboard of all the different things you can do?
	function menu_page(){
    ?>
		<div class="wrap">
			<h2>Welcome To My Plugin</h2>
		</div>
	<?php

    	// add an action here for the menu being created
	}

	function sl_ats_recruiters_page(){
		?>
			<div class="wrap">
				<h2>Welcome To My Plugin</h2>
			</div>
		<?php

		// add an action here for the menu being created
	}

	function sl_ats_candidates_page(){
		echo "<h1>Hello World!</h1>";

		// add an action here for the menu being created
	}

	function sl_ats_jobs_page(){
		echo "<h1>Hello World!</h1>";


	}

	function sl_ats_companies_page(){
		?>
			<div class="wrap">
				<h2>Company Profile</h2>
				<form>
					<input type="text" name="companyName" placeholder="Enter the name of your company">
					<input type="text" name="companyAddress" placeholder="Enter the address of your company">
					<input type="text" name="companyWebsite" placeholder="Enter the website URL of your company">
				</form>
			</div>
		<?php
	}



}


/*
 * Registers all of the post types associated with the plugin.
 */
class SLATS_Register_Posts{

}
 



?>