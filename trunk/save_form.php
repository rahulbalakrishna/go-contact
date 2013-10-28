<?php
	
	$url = get_base_url();
	$file_url = $url."/wp-config.php";
	require($file_url);
	
	$user_id = get_current_user_id();
	$_POST['user_id'] = $user_id;
	if($_POST['operation']=="save"){
		unset($_POST['operation']);
		$insert_id = $wpdb->insert('wp_go_contact_details',$_POST);
	}elseif($_POST['operation']=="update"){
		$id = $_POST['form_id'];
		unset($_POST['form_id']);
		unset($_POST['operation']);
		echo $affected_rows = $wpdb->update('wp_go_contact_details',$_POST,array( 'id' => $id ));
	}


function get_base_url(){
	$root_dir = $_SERVER['DOCUMENT_ROOT'];
	
        /* returns /myproject/index.php */
        $path = $_SERVER['PHP_SELF'];

        /*
         * returns an array with:
         * Array (
         *  [dirname] => /myproject/
         *  [basename] => index.php
         *  [extension] => php
         *  [filename] => index
         * )
         */
        $path_parts = pathinfo($path);
        $directory = $path_parts['dirname'];
        /*
         * If we are visiting a page off the base URL, the dirname would just be a "/",
         * If it is, we would want to remove this
         */
		$dir =explode('/',$directory);
        $directory = ($directory == "/") ? "" : $dir;

        /* Returns localhost OR mysite.com */
        //$host = $_SERVER['HTTP_HOST'];

        return  $root_dir ."/".$directory[1];
}
?>
