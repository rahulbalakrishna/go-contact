<?php
	global $wpdb;
	global $wp;
	echo "<center><h2>Manage Go-Contact Forms</h2></center>";
	/***************************************************** Code To Delete Record *******************************************/
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$get_count = $wpdb->get_row('select id from wp_go_contact_details where id='.$_GET['id']);
			$count = count($get_count);
			if($count>0){
				$delete_result = $wpdb->query('delete from wp_go_contact_details where id='.$_GET['id']);
				if($delete_result>0){
					echo "<div class='success_msg'>Record Was Deleted Successfully</div>";
				}else{
					echo "<div class='success_msg'>Error In Deleting Record</div>";
				}
			}
		}
	/***************************************************** Code To Delete Record *******************************************/
	$edit_image = '<img src="' .plugins_url( 'go-contact/img/edit-icon.png' ). '" style="width:20px;height:20px;" alt="Edit">';
	$delete_image = '<img src="' .plugins_url( 'go-contact/img/Delete-icon.png' ). '" style="width:20px;height:20px;" alt="Delete">';
	$request_uri = explode("&",$_SERVER['REQUEST_URI']);
	$current_url = "http://".$_SERVER['HTTP_HOST'].$request_uri[0];
	$edit_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
	$get_contact_forms = $wpdb->get_results('select cf.user_id,cf.mail_to,cf.id,wp_usr.ID,wp_usr.user_login from wp_go_contact_details cf,wp_users wp_usr where cf.user_id=wp_usr.ID');
	$output = '<table class="widefat">
					<thead>
						<tr>
							<th>Added By</th>
							<th>ShortCode</th>		
							<th>Mail To</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Added By</th>
							<th>Form ID</th>
							<th>Mail To	</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
					</tfoot>
				<tbody>';
	for($index=0;$index<count($get_contact_forms);$index++)
	{
		$id_param = "&id=".$get_contact_forms[$index]->id;
		$output.="<tr>
						<td>".$get_contact_forms[$index]->user_login."</td>
						<td><b>[show_form id=\"".$get_contact_forms[$index]->id."\"]</b></td>
						<td>".$get_contact_forms[$index]->mail_to."</td>
						<td><a href='$edit_url?page=GO-Edit-Single-Page$id_param'>$edit_image</a></td>
						<td><a href='".$current_url."&id=".$get_contact_forms[$index]->id."'>$delete_image</a></td>
				  </tr>";
	}
	$output.="</tbody>
				</table>";
	echo $output;
	
?>