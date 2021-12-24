<?php
/**
 * Plugin Name: SL ATS
 */



class SLATS {
	function sl_ats_setup_menu(){
    	add_menu_page( 'Manage Jobs', 'Manage Jobs', 'manage_options', 'test-plugin', array('SLATS_Menu_Detail', 'menu_page') );
    	add_submenu_page( 'test-plugin', 'Manage Recruiters', 'Recruiters', 'administrator', 'sl-ats-recruiter', array('SLATS_Menu_Detail', 'sl_ats_recruiters_page')  );
    	add_submenu_page( 'test-plugin', 'Manage Candidates', 'Candidates', 'administrator', 'sl-ats-candidate', array('SLATS_Menu_Detail', 'sl_ats_candidates_page')  );
    	add_submenu_page( 'test-plugin', 'Company Profile', 'Company Profile', 'administrator', 'sl-ats-company', array('SLATS_Menu_Detail', 'sl_ats_companies_page')  );

	}

}

add_action('admin_menu', array('SLATS', 'sl_ats_setup_menu'));
 



class SLATS_Menu_Detail{
	function menu_page(){
    	echo "<h1>Hello World!</h1>";
	}

	function sl_ats_recruiters_page(){
		echo "<h1>Hello World!</h1>";
	}

	function sl_ats_candidates_page(){

	}

	function sl_ats_jobs_page(){

	}
	function sl_ats_companies_page(){

	}
}
 



?>