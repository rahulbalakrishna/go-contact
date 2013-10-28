<?php 
	 $path = dirname(__FILE__);
 	 $path = str_replace("\\","/",$path);
 	 $path = trailingslashit(get_bloginfo('wpurl')) . trailingslashit(substr($path,strpos($path,"wp-content/")));//Get Plugin URL
	 $url  = $path;
?>
<style>
#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#sortable li { padding: 0.4em; padding-left: 1.5em;}
	#sortable li span { position: absolute; margin-left: -1.3em; }
</style>

<?php 
wp_enqueue_style('my-style',plugins_url( '/go-contact/css/humanity/jquery-ui-1.8.22.custom.css'));
wp_enqueue_script('jquery');
wp_enqueue_script(array('jquery-ui-core','jquery-ui-sortable','jquery-ui-draggable','jquery-ui-droppable','jquery-ui-selectable'));
wp_enqueue_script('jQueryUI', plugins_url('/go-contact/js/manage_form.js')); 

?>  
<script>
	jQuery(function() {
		jQuery( "#sortable" ).sortable();
		jQuery( "#sortable" ).disableSelection();
	});
	</script>
<?php
	echo "<h1 align='center'>Create Go-Contact Form</h1>";
	echo "<p><b>Insert Form Field:</b> ";
	$dropdown = " <select id='select_field_name' onchange='field_select_value()'>
					<option value=''>Select Field</option>
					<option value='textbox'>TextBox</option>
					<option value='password'>Password</option>
					<option value='textarea'>TextArea</option>
					<option value='dropdown'>DropDown</option>
					<option value='checkbox'>CheckBox</option>
					<option value='radiobutton'>Radio Button</option>
					<option value='email'>Email Field</option>
					<option value='submit'>Submit</option>
				</select></p>";
	echo $dropdown;

/********************************** Code to show attributes for textbox,textarea and submit *********************/
	echo "<div id='get_attributes' style='display:none;'>";
		echo "<h4>Enter the attributes for selected form field:</h4>";
		echo "<table>";
		echo "<tr>";
		echo "<td><b>label</b></td>
			<td><input type='text' id='label' /><b> (Label is the text for E.g. 'Name' represent that Textfield accept name of user)</b></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b>CSS Class Name</b></td>
			<td><input type='text' id='class_name' /><b> (This attribute is to set the css to the respective field.)</b></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b>Name of Element</b></td>
			<td><input type='text' id = 'Name'  /><b> (This attribute is to set the name which can be used for CSS and Javascript/jQuery Programming)</b></td>";
		echo "</tr>";
		echo "<tr id='id_element'>";
		echo "<td><b>ID of Element</b></td>
			<td><input type='text' id='id' /><b> (This attribute is to set the name which can be used for CSS and Javascript/jQuery Programming)</b></td>";
		echo "</tr>";
		echo "</table>";
		echo "<div id='get_attributes_select'>";
		echo "<table>";
		echo "<tr>";
			echo "<td><b>Enter values for dropdown field</b></td>";
			echo "<td><textarea id='drop_down_value'>Text1|Value1=Text2|Value2</textarea>";
			echo "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
	echo "</div>";
/********************************** End of code to show attributes for textbox,textarea and submit *********************/	


/********************************** Start of code to show attributes for checkbox and radio button *********************/	
	echo "<div id='get_attribute_check_radio' style='display:none;'>";
		echo "<h4>Enter the attributes for selected form field:</h4>";
		echo "<table>";
			echo "<tr>";
				echo "<td><b>Label Name</b></td>";
				echo "<td><input type='text' id='label_chk_rdo' /><b> (Label is the text for E.g. 'Name' represent that Textfield accept name of user)</b></td>";
			echo "</tr>";
			echo "</tr>";
				echo "<td><b>Value</b></td>";
				echo "<td><input type='text' id='value_chk_rdo' /><b> (This attribute value is used for programming purpose.)</b></td>";
			echo "</tr>";
			echo "</tr>";
				echo "<td><b>Text</b></td>";
				echo "<td><input type='text' id='text_chk_rdo' /><b> (This attribute value is used for programming purpose.)</b></td>";
			echo "</tr>";
			echo "<td><b>CSS Class Name</b></td>
				<td><input type='text' id='class_name' /><b> (This attribute is to set the css to the respective field.)</b></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Name of Element</b></td>
				<td><input type='text' id = 'Name'  /><b> (This attribute is to set the name which can be used for CSS and Javascript/jQuery Programming)</b></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>ID of Element</b></td>
				<td><input type='text' id='id' /><b> (This attribute is to set the name which can be used for CSS and Javascript/jQuery Programming)</b></td>";
			echo "</tr>";
		echo "</table>";
	echo "</div>";
/********************************** End of code to show attributes for heckbox and radio button *********************/	

/********************************** Field to accept if mandatory ************************************/
	echo "<hr/>";
	echo "<table style='margin-top:5px;'>
		<tr>
			<td><b>Is Mandatory</b></td>
			<td><input type='checkbox' id='is_mandatory' /><b> (If checked, then the field will be marked as mandatory field. For each mandatory field you need to check it and then click on 'Add To Form')</b></td>
		</tr>
		<tr>
			<td><b>Enable Captcha</b></td>
			<td><input type='checkbox' id='enable_captcha' /><b> (We are using google re-Captcha. To enable captcha the public and private key is required. <a href='https://www.google.com/recaptcha/admin/create'>Click here to obtain reCaptcha Key</a>)</b></td>
		</tr>
		<tr id='tr_public_key'>
			<td>Public Key</td>
			<td><input type='text' id='public_key' /></td>
		</tr>
		<tr id='tr_private_key'>
			<td>Private Key</td>
			<td><input type='text' id='private_key' /></td>
		</tr>
		<tr>
			<td><b>Division Class Name</b></td>
			<td><input type='text' id='div_class_name' /><b> (This attribute is responsible to apply CSS to whole form)</b></td>
		</tr>
	</table>";

/********************************** End of code to show if field is mandatory ***********************/

/***************************************************** Add Element Button ****************************/
	echo "<input type='button' class='button-primary' value='Add To Form' id='btn_add_field' onclick='add_to_form_view()' />";
/***************************************************** End of Add Element Button *********************/

/***************************************************** Display Form Elements ***********************************/
	echo "<br/><br><h3>Preview Form: (To delete a row, double click on it)</h3>";
	echo "<table style='margin-top:10px;' class='widefat' id='form_table_content'>
		<thead>
			<th>Label name</th>
			<th>Field that will be displayed</th>
		</thead>
		<tfoot>
    			<tr>
    				<th>Label name</th>
    				<th>Field that will be displayed</th>
    			</tr>
		</tfoot>
		<tbody id='sortable'>
		</tbody>
		<tbody id='sortable_hidden' style='display:none;'>
		</tbody>
		";
	echo "</table>";
/***************************************************** End Of Form Elements ****************************/

/***************************************************** Mail Functionality ***********************************/
	echo "<br/><br><h3>Email Related Settings: </h3>";
	echo "<table style='margin-top:10px;' class='widefat'>
		<tr>
			<td><b>Mail To</b></td>
			<td><input type='text' id='mail_to' /></td>
		</tr>
		<tr>
			<td><b>To Insert The Form Field Vale Use The Following ID, Which Are Present In The Form:</b></td>
			<td id='id_list'></td>
		</tr>
		<tr>
			<td><b>Mail Body</b></td>
			<td><textarea id='mail_content' rows='10' cols='100'></textarea></td>
		</tr>
		";
	echo "</table>";
/***************************************************** End Of Mail Functionality ****************************/

/***************************************************** PHP Code Execute Functionality ***********************************/
	echo "<br/><br><h3>Enter PHP Code To Execute After Sending E-Mail: </h3>";
	echo "<table style='margin-top:10px;' class='widefat'>
		<tr>
			<td><b>PHP Code</b></td>
			<td><textarea id='php_code' rows='10' cols='100'></textarea></td>
		</tr>";
	echo "</table>";
/***************************************************** End Of PHP Code Execute Functionality ****************************/

/***************************************************** Javascript Code Execute Functionality ***********************************/
	echo "<br/><br><h3>Enter Javascript Code To Execute After Sending E-Mail: </h3>";
	echo "<table style='margin-top:10px;' class='widefat'>
		<tr>
			<td><b>Javascript Code</b></td>
			<td><textarea id='javascript_code' rows='10' cols='100'></textarea></td>
		</tr>";
	echo "</table>";
/***************************************************** End Of Javascript Code Execute Functionality ****************************/


/***************************************************** Download File Functionality ***********************************/
	echo "<br/><br><h3>Provide Download File Option After Sending E-Mail: </h3>";
	echo "<table style='margin-top:10px;' class='widefat'>
		<tr>
			<td><b>File URL</b></td>
			<td><input type='text' id='file_url' /></td>
		</tr>";
	echo "</table>";
/***************************************************** End Of Download File Functionality ****************************/

/********************************* Get Plugin URL *********************************************/

 $url_val = $url;
echo "<input type='hidden' value='".$url_val."' id='site_url' />";
/********************************* End Of Code To Get Plugin URL ******************************/

/***************************************************** Submit Form ***********************************/
	echo "<input type='button' class='button-primary' value='Save Form' id='btn_save_field' style='margin-top:12px;' onclick='save_to_database()'/>";
/***************************************************** End Of Submitting The Form ****************************/	
?>
