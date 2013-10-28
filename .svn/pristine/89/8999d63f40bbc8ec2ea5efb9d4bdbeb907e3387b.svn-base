<script type="text/javascript">
  jQuery(function() {
		jQuery('#contact_form').validate();
  });
</script>
<?php

	if(isset($_POST['id_value']))
	{
		global $wpdb;
		if ($_POST["recaptcha_response_field"]) {
			$captcha_arr = captcha_credentials();
			$resp = recaptcha_check_answer ($_POST['privatekey'],
											$_SERVER["REMOTE_ADDR"],
											$_POST["recaptcha_challenge_field"],
											$_POST["recaptcha_response_field"]);

		}
		if ($resp->is_valid) {
			/****************************************** Code to replace the ID with the Form value ****************************************/
			$id = $_POST['id_value'];
		    $go_contact_array = $wpdb->get_row("SELECT mail_body,mail_to,php_code,file_url,javascript_code FROM wp_go_contact_details WHERE id = ".$id);
			$mail_content = $go_contact_array->mail_body;
			foreach($_POST as $key=>$val){
				$content_id = "[".$key."]";
				$post_array = $_POST[$key];
				$mail_content = str_replace($content_id,$post_array,$mail_content);
			}
			add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
			if(wp_mail( $go_contact_array->mail_to, 'Test Subject', $mail_content)){
				$success = "Email Sent Successfully";
				echo "<div class='success_msg'>".$success."</div>";
				$error   = "";
				/*************************************** Code To Execute Javascript Code ******************************************/
					if(isset($go_contact_array->javascript_code) && !empty($go_contact_array->javascript_code)){
						$javascript_code = stripslashes($go_contact_array->javascript_code);
						$javascript_code = "<script>".$javascript_code."</script>";
						echo $javascript_code;
					}
				/*************************************** Code To Execute Javascript Code ******************************************/
				
				/*************************************** Code To Execute PHP Code ******************************************/
					if(isset($go_contact_array->php_code) && !empty($go_contact_array->php_code)){
						$php_code = stripslashes($go_contact_array->php_code);
						eval($php_code);
					}
				/*************************************** Code To Execute PHP Code ******************************************/
				
				/*************************************** Code To Execute Code To Download File ******************************************/
					
					if(isset($go_contact_array->file_url) && !empty($go_contact_array->file_url)){
						echo "<script>window.open('$go_contact_array->file_url');</script>";
					}
				/*************************************** Code To Execute Code To Download File ******************************************/
			}else{
				$success = "";
				$error   = "Error In Sending Email";
				echo "<div class='error_msg'>".$error."</div>";
			}
	   /****************************************** End of code ***********************************************************************/
	   } else {
					$success = "";
					$error   = "Please Enter Captcha";
					echo "<div class='error_msg'>".$error."</div>";
		}
	}
?>
<?php
	function shortcode_show_form($id=0){
	/******************************************* Code to get base url ******************************************************/
		$root_dir = $_SERVER['DOCUMENT_ROOT'];
        $path = $_SERVER['PHP_SELF'];
        $path_parts = pathinfo($path);
        $directory = $path_parts['dirname'];
		$dir =explode('/',$directory);
        $directory = ($directory == "/") ? "" : $dir;
        $base_url = $root_dir ."/".$directory[1];
	/******************************************* Code to get base url ******************************************************/
		$file_url = $url."/wp-config.php";
		require($file_url);
		global $wpdb;
		$val_arr_merge = array();
		$contact_result = $wpdb->get_results('select contact_form_content,user_id,mail_to,mail_body,file_url,php_code,javascript_code,enable_captcha,div_class_name from wp_go_contact_details where id = '.$id);
		if($contact_result[0]->enable_captcha=="on"){
			$captcha = "<tr id='div_val'>";
				$captcha .= "<td>";
					$captcha .= "Enter Captcha";
				$captcha .= "</td>";
				$captcha .= "<td>";
					$captcha_arr = captcha_credentials($id);
					$captcha .= recaptcha_get_html($captcha_arr['publickey'], $error);
				$captcha .= "</td>";
			$captcha .= "</tr>";
		
		$val = stripslashes($contact_result[0]->contact_form_content);
		$val_arr = explode('<tr class="ui-state-default">',$val);
		$val_arr_merge = $val_arr;
		$arr_count = count($val_arr);
		$arr_count = $arr_count - 1;
		$val_arr_merge[$arr_count]=$captcha.$val_arr_merge[$arr_count];
		$output = implode($val_arr_merge);
		}
		echo "<div class='".$contact_result[0]->div_class_name."'>";	
			echo "<form method='post' id='contact_form'>";
				echo "<table id='table_captcha'>";
					echo "<input type='hidden' name='id_value' value='$id' />";
					if($contact_result[0]->enable_captcha=="on"){
						echo "<input type='hidden' name='privatekey' value='".$captcha_arr['privatekey']."' />";
						echo $output;
					}else{
						echo stripslashes($contact_result[0]->contact_form_content);
					}
				echo "</table>";
			echo "</form>";
		echo "</div>";
	}
	
	function captcha_credentials($id=0)
	{
		require_once('captcha/recaptchalib.php');
		global $wpdb;
		$go_contact_array = $wpdb->get_row("SELECT public_key,private_key FROM wp_go_contact_details WHERE id = ".$id);
		return array('publickey'=>$go_contact_array->public_key,'privatekey'=>$go_contact_array->private_key);
	}
?>