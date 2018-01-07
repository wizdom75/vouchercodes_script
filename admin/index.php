<?php
            require     ('../path.php');
            require     (FILEPATH.'includes/config.php');
            include     (FILEPATH."session.php");
            
            include('header.php')
            
?>

		<!-- CONTENT AREA START -->
		<!-- MID CONTAINER START -->
<div class="mid-container" id="widget-main-mid-container">
    <div style="display: none;" id="widget-mid-loading">
        <center>
		<img src="/admin/img/ajax-loading.gif" alt="Loading...">
	</center>
    </div>
    <div id="widget-main-mid-top-container">
        <!-- SITE SETTING START -->
        <div class="siteSetting-widget-container">
            <div class="content2-widget-container">
                <div class="title">
                    <div class="txt">Admin Home »</div>
                </div>
                <div class="detail">
                    <table cellpadding="0" cellspacing="0" align="center" border="0" width="600">
                        <tbody>
                            <tr>
                                <th colspan="3"> ..:: Welcome to <?=SITE_NAME?> Control Panel ::.. </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- SITE SETTING END -->
    </div>
    <div id="widget-main-mid-bottom-container"></div>
    <script type="text/javascript">
	if(jQuery("#widget-main-mid-container-registration-dialog").length == 0)
	{
		jQuery("#widget-main-mid-container").append('<div id="widget-main-mid-container-registration-dialog" title="Register DVS4" class="popup-container"></div>');

		jQuery.ajaxSetup ({cache: false});

		var registered = false;

		$("#widget-main-mid-container-registration-dialog").load('/admin/sites/register');

		jQuery('#widget-main-mid-container-registration-dialog').dialog({
			autoOpen: true,
			closeOnEscape: true,
			draggable: true,
			width: 600,
			height:400,
			resizable:false,
			modal: true,
			buttons: {
				"Ok": function() { 

					if($("#widget-backoffice-sites-register-status").val() == "true"){
						registered = true;
						jQuery(this).dialog("close"); 
					}else{
						alert("Please register to contnue");
					}
				}
			},
			beforeClose: function(){
				return registered;
			}
		});
	}	
	</script>
</div>
                <!-- MID CONTAINER END -->
		<!-- CONTENT AREA END -->

<?php include('footer.php') ?>