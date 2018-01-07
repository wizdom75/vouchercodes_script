<?php
            require     ('../../path.php');
            require     (FILEPATH.'includes/config.php');
            include     (FILEPATH."session.php");
            
?>

		
	
	<div id="widget-main-mid-top-container">
            <div class="siteSetting-widget-container">
                <div class="content2-widget-container">
                    <div class="title">
                        <div class="txt">
				Change Password »
			</div>
                    </div>
		
		<div class="detail">
		<form action="/admin/users/change_password/1" method="post" id="UserAdminChangePasswordForm" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"></div>			
			<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
					
				<tbody><tr>
					<td colspan="3"></td>
				</tr>
					
				<tr>
					<td>Current Password:</td>
					<td colspan="2">
						<input type="hidden" name="data[User][id]" value="1" id="UserId">						<input type="password" name="data[User][oldpass]" class="input-field-large" id="UserOldpass">	                        
					</td>
				</tr>
				
				<tr>
					<td>New Password:</td>
					<td colspan="2">
						<input type="password" name="data[User][newpass]" class="input-field-large" id="UserNewpass">	                        
					</td>
				</tr>
				
				<tr>
					<td>Confirm New Password:</td>
					<td colspan="2">
						<input type="password" name="data[User][confpass]" class="input-field-large" id="UserConfpass">	                        
					</td>
				</tr>
				
				<tr>
					<td colspan="3">
						<input class="btn ui-button ui-widget ui-state-default ui-corner-all" id="submit-1064225435" type="submit" value="Change" role="button" aria-disabled="false">						<a href="javascript:void(0);" id="lnk-widget-change-pass-cancel" class="btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Cancel</span></a>					</td>
				</tr>
			</tbody></table>
			</form>		</div>  
	
	</div>

</div>  

</div>
<div id="widget-main-mid-bottom-container"></div>

			
	