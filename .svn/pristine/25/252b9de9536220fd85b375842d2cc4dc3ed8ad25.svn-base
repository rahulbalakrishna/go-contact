var element_id  = "";
var hidden_field="";
function field_select_value()
{
	var field_value = jQuery("#select_field_name").val();
	if(field_value){
		if(field_value=="email"){
			jQuery("#get_attributes").show();
			jQuery("#get_attributes_select").hide();
			jQuery("#get_attribute_check_radio").hide();
			jQuery("#id_element").hide();
		}else if(field_value=="dropdown"){
			jQuery("#get_attributes").show();
			jQuery("#get_attributes_select").show();
			jQuery("#get_attribute_check_radio").hide();
			jQuery("#id_element").show();

		}else if(field_value=="radiobutton" || field_value=="checkbox"){
			jQuery("#get_attributes").hide();
			jQuery("#get_attributes_select").hide();
			jQuery("#get_attribute_check_radio").show();
			jQuery("#id_element").show();
			
		}else if(field_value==""){
			jQuery("#get_attributes").hide();
			jQuery("#get_attributes_select").hide();
			jQuery("#get_attribute_check_radio").hide();
		}else{
			jQuery("#get_attributes").show();
			jQuery("#get_attributes_select").hide();
			jQuery("#get_attribute_check_radio").hide();
			jQuery("#id_element").show();
		}	
	}
}

function add_to_form_view()
{
	var field_value = jQuery("#select_field_name").val();
	switch(field_value){
/**************************************** Case 1 Start *************************************************/
		case "textbox": 
				var label 	= jQuery("#label").val();
				var class_name 	= jQuery("#class_name").val();
				var Names 	= jQuery("#Name").val();
				var ids 	= jQuery("#id").val();
				var is_mandatory= "";
				if(jQuery("#is_mandatory").is(':checked')){
					label = label + "*";
					is_mandatory="required";
				}
				element_id = element_id+ids+",";
				field="<tr class='ui-state-default'><td>"+label+"</td><td><input type='text' class='"+class_name+" "+is_mandatory+"' name='"+Names+"' id='"+ids+"' /></td></tr>";
				jQuery('#sortable').append(field);
				break;
/**************************************** Case 1 End *************************************************/

/**************************************** Case 2 Start *************************************************/
		case "textarea": 
				var label 	= jQuery("#label").val();
				var class_name 	= jQuery("#class_name").val();
				var Name 	= jQuery("#Name").val();
				var id 		= jQuery("#id").val();
				var is_mandatory= "";
				if(jQuery("#is_mandatory").is(':checked')){
					label = label + "*";
					is_mandatory="required";
				}
				element_id = element_id+id+",";
				field	= "<tr class='ui-state-default'><td>"+label+"</td><td><textarea class='"+class_name+" "+is_mandatory+"' name='"+Name+"' id='"+id+"' ></textarea></td></tr>";
				jQuery('#sortable').append(field);
				break;
/**************************************** Case 2 End *************************************************/

/**************************************** Case 3 Start *************************************************/
		case "dropdown": 
				var label 		= jQuery("#label").val();
				var class_name 		= jQuery("#class_name").val();
				var Name 		= jQuery("#Name").val();
				var id 			= jQuery("#id").val();
				var selects		= jQuery("#drop_down_value").val().split('=');
				var options		= selects.toString().split('|');
				var options		= options.toString().split(',');
				var options_length 	= options.length;
				var is_mandatory	= "";
				element_id = element_id+id+",";
				if(jQuery("#is_mandatory").is(':checked')){
					label = label + "*";
					is_mandatory="required";
				}
				field		= "<tr class='ui-state-default'><td>"+label+"</td><td><select class='"+class_name+" "+is_mandatory+"' name='"+Name+"' id='"+id+"'>";
				var option_value 	= "";
				var option_text 	= "";
			
				for(i=0;i<options_length;i++){
					if(i%2==0){
						option_text	=	options[i];		
					}else if(i%2==1){
						option_value	=	options[i];
						field	=	field+"<option value='"+option_value+"'>"+option_text+"</option>";	
					}
				}
				field 		= field+"</select></tr>";
				jQuery('#sortable').append(field);
				break;
/**************************************** Case 3 End *************************************************/

/**************************************** Case 4 Start *************************************************/
		case "checkbox": 
				var label 		= jQuery("#label_chk_rdo").val();
				var values 		= jQuery("#value_chk_rdo").val();
				var texts 		= jQuery("#text_chk_rdo").val();
				var class_name 		= jQuery("#class_name").val();
				var Name 		= jQuery("#Name").val();
				var id 			= jQuery("#id").val();
				element_id = element_id+id+",";
				if(jQuery("#is_mandatory").is(':checked')){
					label = label + "*";
					is_mandatory="required";
				}
				
				field	= "<tr class='ui-state-default'><td>"+label+"</td><td><input type='checkbox' class='"+class_name+" "+is_mandatory+"' name='"+Name+"' id='"+id+"' value="+values+" /> "+texts+"</td></tr>";
				jQuery('#sortable').append(field);
				break;
/**************************************** Case 4 End *************************************************/

/**************************************** Case 5 Start *************************************************/
		case "radiobutton": 
				var label 		= jQuery("#label_chk_rdo").val();
				var values 		= jQuery("#value_chk_rdo").val();
				var texts 		= jQuery("#text_chk_rdo").val();
				var class_name 		= jQuery("#class_name").val();
				var Name 		= jQuery("#Name").val();
				var id 			= jQuery("#id").val();
				element_id = element_id+id+",";
				if(jQuery("#is_mandatory").is(':checked')){
					label = label + "*";
					is_mandatory="required";
				}
				
				field	= "<tr class='ui-state-default'><td>"+label+"</td><td><input type='radio' class='"+class_name+" "+is_mandatory+"' name='"+Name+"' id='"+id+"' value="+values+" /> "+texts+"</td></tr>";	
				jQuery('#sortable').append(field);
				break;
/**************************************** Case 5 End *************************************************/

/**************************************** Case 6 Start *************************************************/
		case "submit": 
				var label 	= jQuery("#label").val();
				var class_name 	= jQuery("#class_name").val();
				var Name 	= jQuery("#Name").val();
				var id 		= jQuery("#id").val();
				element_id = element_id+id+",";
				var is_mandatory= "";
				
				field	= "<tr class='ui-state-default'><td>&nbsp;</td><td><input type='submit' class='"+class_name+" "+is_mandatory+"' name='"+Name+"' id='"+id+"' value='"+label+"' /></td></tr>";
				jQuery('#sortable').append(field);
				break;
/**************************************** Case 6 End *************************************************/

/**************************************** Case 7 Start *************************************************/
		case "password": 
				var label 	= jQuery("#label").val();
				var class_name 	= jQuery("#class_name").val();
				var Names 	= jQuery("#Name").val();
				var ids 	= jQuery("#id").val();
				var is_mandatory= "";
				if(jQuery("#is_mandatory").is(':checked')){
					label = label + "*";
					is_mandatory="required";
				}
				element_id = element_id+ids+",";
				field="<tr class='ui-state-default'><td>"+label+"</td><td><input type='password' class='"+class_name+" "+is_mandatory+"' name='"+Names+"' id='"+ids+"' /></td></tr>";
				jQuery('#sortable').append(field);
				break;
/**************************************** Case 7 End *************************************************/

/**************************************** Case 8 Start *************************************************/
		case "email": 
				var label 	= jQuery("#label").val();
				var class_name 	= jQuery("#class_name").val();
				var Names 	= jQuery("#Name").val();
				var ids 	= jQuery("#id").val();
				var is_mandatory= "";
				if(jQuery("#is_mandatory").is(':checked')){
					label = label + "*";
					is_mandatory="required";
				}
				element_id = element_id+'email'+",";
				field="<tr class='ui-state-default'><td>"+label+"</td><td><input type='text' class='"+class_name+" "+is_mandatory+" email' name='"+Names+"' id='email' /></td></tr>";
				jQuery('#sortable').append(field);
				break;
/**************************************** Case 8 End *************************************************/


	}

/******************************** Append To ID List In Email Section **************************************/
jQuery("#id_list").html(element_id.slice(0,-1));
/************************* End Of Appending To ID List In Email Section **************************************/
 
}

/*************************************** Save The Inserted Information **************************************/
function save_to_database()
{
	
	var file_content	= jQuery('#sortable').html();
	if(jQuery('#enable_captcha').is(":checked")){
		var enable_captcha	= jQuery('#enable_captcha').val();
	}else{
		var enable_captcha = "off";
	}
	var mail_to			= jQuery('#mail_to').val();
	var mail_content	= jQuery('#mail_content').val();
	var php_code		= jQuery('#php_code').val();	
	var javascript_code	= jQuery('#javascript_code').val();
	var file_url		= jQuery('#file_url').val();
	var site_url		= jQuery('#site_url').val();
	var div_class_name	= jQuery('#div_class_name').val();
	var public_key		= jQuery('#public_key').val();
	var private_key		= jQuery('#private_key').val();
	var id_list			= jQuery('#id_list').html();
	site_url 			= site_url + '/save_form.php';

	jQuery.post(site_url, { contact_form_content: file_content, enable_captcha: enable_captcha, mail_to: mail_to, mail_body: mail_content, php_code: php_code, javascript_code: javascript_code, file_url: file_url,div_class_name: div_class_name,operation:'save', public_key: public_key, private_key: private_key, id_list:id_list},function(data) {
     				alert("Data Saved Successfully!!!!");
   	});
}
/*************************************** End Of Code To Save The Inserted Information ************************/


function update_to_database(){
	var file_content	= jQuery('#sortable').html();
	if(jQuery('#enable_captcha').is(":checked")){
		var enable_captcha	= jQuery('#enable_captcha').val();
	}else{
		var enable_captcha = "off";
	}
	var mail_to			= jQuery('#mail_to').val();
	var mail_content	= jQuery('#mail_content').val();
	var php_code		= jQuery('#php_code').val();	
	var javascript_code	= jQuery('#javascript_code').val();
	var file_url		= jQuery('#file_url').val();
	var site_url		= jQuery('#site_url').val();
	var form_id			= jQuery('#form_id').val();
	var div_class_name	= jQuery('#div_class_name').val();
	var public_key		= jQuery('#public_key').val();
	var private_key		= jQuery('#private_key').val();
	var id_list			= jQuery('#id_list').html();
	site_url 			= site_url + '/save_form.php';

	jQuery.post(site_url, { contact_form_content: file_content, enable_captcha: enable_captcha, mail_to: mail_to, mail_body: mail_content, php_code: php_code, javascript_code: javascript_code, file_url: file_url,div_class_name: div_class_name,operation:'update',form_id:form_id, public_key: public_key, private_key: private_key, id_list:id_list},function(data) {
					if(data>0){
						alert("Data Updated Successfully!!!!");
					}
     				//alert("Data Updated Successfully!!!!");
   	});
}
jQuery(document).ready(function() {
	if(jQuery('#enable_captcha').is(":checked")){
			jQuery('#tr_public_key').show();
			jQuery('#tr_private_key').show();
	}else{
			jQuery('#tr_public_key').hide();
			jQuery('#tr_private_key').hide();
	}
	jQuery('#enable_captcha').click(function(){
		if(jQuery('#enable_captcha').is(":checked")){
			jQuery('#tr_public_key').show();
			jQuery('#tr_private_key').show();
		}else{
			jQuery('#tr_public_key').hide();
			jQuery('#tr_private_key').hide();
		}
	});
	jQuery('.ui-state-default').bind('dblclick', function() {
		jQuery(this).remove();
	});
 });
