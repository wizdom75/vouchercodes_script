<?php
            require     ('../path.php');
            require     (FILEPATH.'includes/config.php');
            include     (FILEPATH."session.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>Welcome to Back Office</title>
            <link href="/backoffice-favicon.ico" type="image/x-icon" rel="icon">
                <link href="/backoffice-favicon.ico" type="image/x-icon" rel="shortcut icon">
                    <link rel="stylesheet" type="text/css" href="/css/admin/admin-style.css">
                        <link rel="stylesheet" type="text/css" href="/css/admin/jquery-ui-1.8.11.custom.css">
                            <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
                            <script type="text/javascript" src="http://code.jquery.com/ui/1.8.11/jquery-ui.min.js"></script>
                            </head>
    <body>
        <div id="main-container">
            <!-- HEADER START -->
            <div class="header">
                <div class="topBar-container">
                    <div class="img">
                        <a href="http://www.computedsynergy.com/" target="_blank"><img src="/img/backoffice/cs-link-img.png" alt="Computed Synergy" border="0"></a>
                    </div>
                    <div class="img">
                        <a href="http://www.voucherscript.com/" target="_blank"><img src="/img/backoffice/dvs-link-img.png" alt="Denovo Voucher Codes" border="0"></a>
		            	
	            </div>
                </div>
                <div class="logo-container">
                    <div class="img">
                        <img src="/img/backoffice/dvs-logo-img.png" alt="DVS Admin Panel" border="0">
                    </div>
                </div>
	        <div class="accoutInfo-container"></div>
	    </div>
            <!-- HEADER END -->
            <!-- MID CONTAINER START -->
	    <div class="mid-container">
                <!-- SITE SETTTING START -->
                <div class="siteSetting-widget-container">
                    <div class="content2-widget-container" id="login-form-container">
                        <div class="title">
                            <div class="txt">Admin Login</div>
                        </div>
                        <div class="detail">
                            <form action="/admin" method="post" id="UserAdminHomeForm" accept-charset="utf-8">
                                <div style="display:none;"><input name="_method" value="POST" type="hidden"></div>
                                <table cellpadding="0" cellspacing="0" align="center" border="0" width="600">
                                    <tbody>
                                        <tr>
                                            <th colspan="3">Welcome to the Admin Panel, please login using your credentials.</th>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td colspan="2">
                                                <input name="data[User][email]" class="input-field-large" maxlength="255" id="UserEmail" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td colspan="2">
                                                <input name="data[User][pass]" class="input-field-large" id="UserPass" type="password">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <input aria-disabled="false" role="button" url="/admin/users/home" method="post" class="btn ui-button ui-widget ui-state-default ui-corner-all" id="login-button" value="Login" type="submit">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <script>
                                    $(document).ready(function() {
                                        $(".siteSetting-widget-container .content2-widget-container .detail .btn").button();
                                    });
                                                                </script>
                            </form>
                        </div>
                    </div>
                </div
                <!-- SITE SETTINGS CONTAINER -->
            </div>
            <!-- Mid CONTAINER END -->
            <!-- FOOTER START -->
            <div class="footer">
                <div class="copyright">Copyright © 2014 <?=SITE_DOMAIN?></div>
            </div>
	    <!-- FOOTER END -->
        </div>
    </body>
</html>