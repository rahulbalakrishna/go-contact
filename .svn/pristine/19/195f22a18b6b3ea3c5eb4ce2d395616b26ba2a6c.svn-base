<?php
/*
Plugin Name: go-contact
Description: Dynamically create contact form with download and captcha options
Version: 1.0.1
Author: Rahul Balakrishna
Author URI: http://www.validateinfo.org
License: GPLv2
*/
?>
<?php
	function about_me(){
		echo "<h2>About Me And Plugin Coming Soon</h2><br/>Coming Soon";
	}

	function create_form(){
		include('create_form.php');
	}
	
	function edit_form(){
		include('edit_form.php');
	}
	function load_single_form(){
		include('edit_single_form.php');
	}	
	function add_menu_link()
	{
		add_menu_page('Go-Contact', 'Go-Contact', 8,__FILE__, 'about_me');
		add_submenu_page( __FILE__,'Create Form','Create Form',5,'Go-Contact','create_form');
		add_submenu_page( __FILE__,'Edit Form','Edit Form',5,'Go-Edit-Contact','edit_form');
		add_submenu_page( '','Edit Go-Contact Form','Edit Go-Contact Form',5,'GO-Edit-Single-Page','load_single_form');
	}
	add_action('admin_menu', 'add_menu_link');
	
	/******************************* Create Table When Plugin Is Actived ****************************************************/
		function plugin_create_table()
		{
			// do NOT forget this global
			global $wpdb;
			
			$table = $wpdb->prefix . 'go_contact_details';
			
			// this if statement makes sure that the table doe not exist already
			if($wpdb->get_var("show tables like '$table'") != $table) 
			{
				if ( ! empty( $wpdb->charset ) )
					$charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";
				if ( ! empty( $wpdb->collate ) )
					$charset_collate .= " COLLATE $wpdb->collate";
					
				$sql = "CREATE TABLE IF NOT EXISTS `" . $table . "` (
						`id` mediumint(9) NOT NULL AUTO_INCREMENT,
						`contact_form_content` text NOT NULL,
						`user_id` mediumint(9) NOT NULL,
						`mail_to` text NOT NULL,
						`mail_body` text NOT NULL,
						`file_url` text NOT NULL,
						`php_code` text NOT NULL,
						`javascript_code` text NOT NULL,
						`enable_captcha` text NOT NULL,
						`div_class_name` text NOT NULL,
						`public_key` text NOT NULL,
						`private_key` text NOT NULL,
						`id_list` text NOT NULL,
						UNIQUE KEY `id` (`id`)
					) ENGINE=InnoDB  DEFAULT CHARSET=latin1;";
				require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
				dbDelta($sql);
			}
		}
		// this hook will cause our creation function to run when the plugin is activated
		register_activation_hook( __FILE__, 'plugin_create_table' );
	/******************************* End Of Code To Create Table When Plugin Is Activated ****************************************************/
	function show_form_func($atts) {
		include('shortcode_show.php');
		shortcode_show_form($atts[id]);
		
	}
	add_shortcode('show_form', 'show_form_func');
	
	function load_validate_script() {
        wp_enqueue_script(
                'validate',
                plugins_url('/go-contact/js/jquery.validate.js'),
                array('jquery')
        );
	}
	add_action('wp_enqueue_scripts', 'load_validate_script');
?>