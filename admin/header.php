<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>
                Welcome to Back Office		 : <?=SITE_NAME?> Admin Panel
            </title>
	
	<link href="/backoffice-favicon.ico" type="image/x-icon" rel="icon">
        <link href="/backoffice-favicon.ico" type="image/x-icon" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="/css/admin/admin-style.css"/>
        <link rel="stylesheet" type="text/css" href="/css/admin/jquery-ui-1.8.20.custom.css">
        <link rel="stylesheet" type="text/css" href="/css/admin/jquery-ui-1.8.11.custom.dialog-box.css">
        <link rel="stylesheet" type="text/css" href="/css/admin/jquery.cleditor.css">
        <link rel="stylesheet" type="text/css" href="/css/admin/jquery.sb.css">
       <!-- <script src="http://maps.google.com/maps/api/js?sensor=true" async="" type="text/javascript"></script>-->
        <script type="text/javascript" src="/js/admin/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="/js/admin/jquery-1.8.20.min.js"></script>
        <script type="text/javascript" src="/js/admin/jquery.cleditor.min.js"></script>
        <script type="text/javascript" src="/js/admin/jquery.sb.min.js"></script>
        <script type="text/javascript" src="/js/admin/jquery.ui.timepicker.addon.js"></script>	
	<script>
		//async load external scripts for best performance...
		(function() {
		    function async_load(){
		        var s = document.createElement('script');
		        s.type = 'text/javascript';
		        s.async = true;
		        s.src = 'http://maps.google.com/maps/api/js?sensor=true';
		        var x = document.getElementsByTagName('script')[0];
		        x.parentNode.insertBefore(s, x);       
		    }
		    if (window.attachEvent)
		        window.attachEvent('onload', async_load);
		    else
		        window.addEventListener('load', async_load, false);
		})();
	</script>

	<script type="text/javascript">
		$.ajaxSetup ({
	    	cache: false
		});
	</script>
</head>
<body>
    <div id="main-container">
        <!-- HEADER START -->
        <div class="header">
            <div class="topBar-container">
                <div class="img">
                    <a href="http://www.computedsynergy.com/" target="_blank"><img src="/admin/img/cs-link-img.png" alt="Computed Synergy" border="0"></a>
                </div>
                <div class="img">
                    <a href="<?=SITE_URL?>" target="_blank"><img src="/admin/img/dvs-link-img.png" alt="<?=SITE_NAME?>" border="0"></a>
                </div>
            </div>
            <div class="logo-container">
                <div class="img">
                    <a href="/admin/dashboard"><img src="/admin/img/dvs-logo-img.png" alt="Admin Panel" border="0"></a>
                </div>
            </div>
            <div class="accoutInfo-container">
                <div class="txt">
                    Welcome <span> Hive Admin</span>
                </div>
                <div class="txt">
                    <span><a href="javascript:void(0);" id="header-change-password">Change Password</a></span>|
                    <span><a href="/admin/users/logout">Logout</a></span>
                </div>
                <div class="txt">
                    Last Login IP : <span></span>, Current IP : <span>88.105.102.37</span>
                </div>
                <div class="txt">
                    Last Login time :<span>09:11 PM</span>|<span>09.05.2014</span>
                </div>
                <div class="txt">
                    Version : <span>4.5</span> CE
                </div>
            </div>
        </div>
        <script type="text/javascript">
	$(document).ready(function(){
		// Change Password
		$("#header-change-password").click(function(){
	
			$("#widget-main-mid-top-container").show();
			$("#widget-main-mid-top-container").empty();
			$("#widget-main-mid-bottom-container").empty();
			$("#widget-mid-loading").toggle();
			$.get('/admin/users/change_password.php', function(data){
				$("#widget-mid-loading").toggle();
				$("#widget-main-mid-top-container").html(data);
			}); 
		});
	});
	
	</script>
        <!-- HEADER START -->
        <!-- HEADER END -->
        
        <!-- NAVIGATION START -->
        <!-- NAVIGATION START -->
        <div class="navigation-container">
            <li>
                <a class="active" href="javascript:void(0);" id="tp-home">Home</a>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#tp-home").click(function(){
                            $("#widget-main-mid-top-container").show();
                            $("#widget-main-mid-top-container").empty();
                            $("#widget-main-mid-bottom-container").empty();
                            $("#widget-mid-loading").toggle();
                            $.get("/admin/users/widget_welcome.php", function(data){
                                $("#widget-mid-loading").toggle();
                                $("#widget-main-mid-top-container").html(data);
                            });
                        });
                    });
                </script>	
            </li>
            <div class="breakLine"></div>
            <li>
                <a href="javascript:;">Configuration</a>
                <ul>
                    <li>
                        <a href="javascript:void(0);" id="tp-manage-sites">Sites</a>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#tp-manage-sites").click(function(){
                                    $("#widget-main-mid-top-container").show()
                                    $("#widget-main-mid-top-container").empty();
                                    $("#widget-main-mid-bottom-container").empty();
                                    $("#widget-mid-loading").toggle();
                                    $.get("/admin/sites/manage_sites.php", function(data){
                                        $("#widget-mid-loading").toggle();
                                        $("#widget-main-mid-top-container").html(data);
                                    });
                                });
                            });
                        </script>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="tp-plugins-configuration">Vouchers Import Plugins</a>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#tp-plugins-configuration").click(function(){
                                    $("#widget-main-mid-top-container").show();
                                    $("#widget-main-mid-top-container").empty();
                                    $("#widget-main-mid-bottom-container").empty();
                                    $("#widget-mid-loading").toggle();
                                    $.get("/admin/pluginsconfigurations/index.php", function(data){
                                        $("#widget-mid-loading").toggle();
                                        $("#widget-main-mid-top-container").html(data);
                                    });
                                });
                            });
			</script>
                    </li>
                </ul>
            </li>
            <div class="breakLine"></div>
            <li>
                <a href="javascript:void(0);">Content Management</a>
                <ul>
                    <li>
                        <a href="javascript:void(0);" id="tp-manage-categories">Categories</a>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#tp-manage-categories").click(function(){
                                    $("#widget-main-mid-top-container").show();
                                    $("#widget-main-mid-top-container").empty();
                                    $("#widget-main-mid-bottom-container").empty();
                                    $("#widget-mid-loading").toggle();
                                    $.get('/admin/categories/widget_manage_categories.php?s=0', function(data){
                                        $("#widget-mid-loading").toggle();
                                        $("#widget-main-mid-top-container").html(data);
                                    });
                                });
                            });
            		</script>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="tp-manage-merchants">Merchants</a>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#tp-manage-merchants").click(function(){
                                    $("#widget-main-mid-top-container").show();
                                    $("#widget-main-mid-top-container").empty();
                                    $("#widget-main-mid-bottom-container").empty();
                                    $("#widget-mid-loading").toggle();
                                    $.get('/admin/merchants/widget_manage_merchants.php?s=0', function(data){
                                        $("#widget-mid-loading").toggle();
                                        $("#widget-main-mid-top-container").html(data);
                                    }); 
                                });
                            });
            		</script>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="tp-manage-vouchers">Vouchers</a>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#tp-manage-vouchers").click(function(){
                                    $("#widget-main-mid-top-container").show();
                                    $("#widget-main-mid-top-container").empty();
                                    $("#widget-main-mid-bottom-container").empty();
                                    $("#widget-mid-loading").toggle();
                                    $.get('/admin/cods/widget_manage_cods.php?=s=0', function(data){
                                        $("#widget-mid-loading").toggle();
                                        $("#widget-main-mid-top-container").html(data);
                                    });
                                });
                            });
            		</script>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="tp-manage-users">Users</a>
                        <script>
                            // Manage Users
                            $("#tp-manage-users").click(function(){
                                $("#widget-main-mid-top-container").show();
                                $("#widget-main-mid-top-container").empty();
                                $("#widget-main-mid-bottom-container").empty();
                                $("#widget-mid-loading").toggle();
                                $.get('/admin/users/widget_users.php', function(data){
                                    $("#widget-mid-loading").toggle();
                                    $("#widget-main-mid-top-container").html(data);
                                }); 
                            });
            		</script>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="tp-manage-pages">CMS</a>
                        <script>
                            // Manage Users
                            $("#tp-manage-pages").click(function(){
                                $("#widget-main-mid-top-container").show();
                                $("#widget-main-mid-top-container").empty();
                                $("#widget-main-mid-bottom-container").empty();
                                $("#widget-mid-loading").toggle();
                                $.get('/admin/sites/manage_content.php', function(data){
                                    $("#widget-mid-loading").toggle();
                                    $("#widget-main-mid-top-container").html(data);
                                });
                            });
            		</script>
                    </li>
                    <li>
            		<a href="javascript:void(0);" id="tp-manage-news">News</a>
                        <script>
                            // Manage News
                            $("#tp-manage-news").click(function(){
                                $("#widget-main-mid-top-container").show();
                                $("#widget-main-mid-top-container").empty();
                                $("#widget-main-mid-bottom-container").empty();
                                $("#widget-mid-loading").toggle();
                                $.get('/admin/news/index.php', function(data){
                                    $("#widget-mid-loading").toggle();
                                    $("#widget-main-mid-top-container").html(data);
                                });
                            });
            		</script>
                    </li>
                    <li>
            		<a href="javascript:void(0);" id="tp-manage-images">Banners &amp; Logos</a>
                        <script>
                            // Manage News
                            $("#tp-manage-images").click(function(){
                                $("#widget-main-mid-top-container").show();
                                $("#widget-main-mid-top-container").empty();
                                $("#widget-main-mid-bottom-container").empty();
                                $("#widget-mid-loading").toggle();
                                $.get('/admin/pictures/index.php', function(data){
                                    $("#widget-mid-loading").toggle();
                                    $("#widget-main-mid-top-container").html(data);
                                });
                            });
            		</script>
                    </li>
                    <li>
            		<a href="javascript:void(0);" id="tp-manage-subscribers">Subscribers</a>
                        <script>
                            // Manage News
                            $("#tp-manage-subscribers").click(function(){
                                $("#widget-main-mid-top-container").show();
                                $("#widget-main-mid-top-container").empty();
                                $("#widget-main-mid-bottom-container").empty();
                                $("#widget-mid-loading").toggle();
                                $.get('/admin/subscriptions/index.php', function(data){
                                    $("#widget-mid-loading").toggle();
                                    $("#widget-main-mid-top-container").html(data);
                                });
                            });
            		</script>
                    </li>
                </ul>
            </li>
            <div class="breakLine"></div>
            <li>
                <a href="javascript:void(0);">Help</a>
                <ul>
                    <li><a href="http://blog.tafuma.com/" target="_blank">Blog</a></li>
                    <li><a href="http://talk.tafuma.com/" target="_blank">Forums</a></li>
                </ul>
            </li>
            <div class="breakLine"></div>
            <li>
        	<a href="javascript:void(0);">About</a>
                <ul>
                    <li>
                        <a href="javascript:void(0);" id="tp-about-dvs">DVS</a>
                        <script type="text/javascript">
                            $("#tp-about-dvs").click(function(){
                                $("#widget-main-mid-top-container").show();
                                $("#widget-main-mid-top-container").empty();
                                $("#widget-main-mid-bottom-container").empty();
                                $("#widget-mid-loading").toggle();
                                $.get('/admin/pages/about_us.php', function(data){
                                    $("#widget-mid-loading").toggle();
                                    $("#widget-main-mid-top-container").html(data);
                                });
                            });            		
            		</script>
                    </li>
                </ul>
            </li>
        </div>
    <!-- NAVIGATION END -->
    <!-- NAVIGATION END -->
    <!-- DASHBOARD START -->
    <!-- DASHBOARD START -->
    <div class="dashboard-container">
        <div class="title">
            <div class="txt">Dashboard »</div>
        </div>
        <div class="detail">
            <li class="active">
                <a href="javascript:void(0);" id="dashboard-manage-categories">
                    <div class="img">
                    	<img src="/admin/img/dashboard-item1.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Categories</div>
                    </div>
                </a>
            </li>
            <li>
            	<a href="javascript:void(0);" id="dashboard-manage-merchants">
                    <div class="img">
                    	<img src="/admin/img/dashboard-item2.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Merchants</div>
                    </div>
                </a>
            </li>
            <li>
            	<a href="javascript:void(0);" id="dashboard-manage-vouchers">
                    <div class="img">
	                  <img src="/admin/img/dashboard-item4.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Vouchers</div>
                    </div>
                </a>
            </li>
            
            <li>
            	<a href="javascript:void(0);" id="dashboard-create-category">
                    <div class="img">
	                  <img src="/admin/img/dashboard-item6.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Add Category</div>
                    </div>
                </a>
            </li>
            <li>
            	<a href="javascript:void(0);" id="dashboard-create-merchant">
                    <div class="img">
	                  <img src="/admin/img/dashboard-item7.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Add Merchant</div>
                    </div>
                </a>
            </li>
            <li>
            	<a href="javascript:void(0);" id="dashboard-create-voucher">
                    <div class="img">
	                	<img src="/admin/img/dashboard-item9.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Add Voucher</div>
                    </div>
                </a>
            </li>
            
            <li>
            	<a href="javascript:void(0);" id="dashboard-manage-images">
                    <div class="img">
	                	<img src="/admin/img/dashboard-item15.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Banners &amp; Logos</div>
                    </div>
                </a>
            </li>
            
            <li>
            	<a href="javascript:void(0);" id="dashboard-manage-users">
                    <div class="img">
                  		<img src="/admin/img/dashboard-item12.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Users</div>
                    </div>
                </a>
            </li>
            
            <li>
            	<a href="javascript:void(0);" id="dashboard-marketplace">
                    <div class="img">
	                  <img src="/admin/img/dashboard-item21.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Market Place</div>
                    </div>
                </a>
            </li>
            
            <li>
            	<a href="javascript:void(0);" id="dashboard-news">
                    <div class="img">
	                  <img src="/admin/img/news.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">News</div>
                    </div>
                </a>
            </li>

            <li>
            	<a href="javascript:void(0);" id="dashboard-pages">
                    <div class="img">
	                  <img src="/admin/img/cms-icon.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">CMS</div>
                    </div>
                </a>
            </li>
            
            <li>
            	<a href="javascript:void(0);" id="dashboard-mange-sites">
                    <div class="img">
	                  <img src="/admin/img/sites-management.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Sites</div>
                    </div>
                </a>
            </li>
            
            <li>
            	<a href="javascript:void(0);" id="dashboard-mange-subscribers">
                    <div class="img">
	                  <img src="/admin/img/dashboard-subscriber-management.png" alt="" border="0">
                    </div>
                    <div class="title">
                    	<div class="txt">Subscribers</div>
                    </div>
                </a>
            </li>            
        
        </div>
        <script type="text/javascript">

			function toggleAjaxLoad(){
				$("#widget-mid-loading").toggle();
			}
                        $(document).ready(function(){
                            // Manage Catgories
                            $("#dashboard-manage-categories").click(function(){
                                $("#widget-main-mid-top-container").show();
                                $("#widget-main-mid-top-container").empty();
                                $("#widget-main-mid-bottom-container").empty();
                                $("#widget-mid-loading").toggle();
                                $.get('/admin/categories/widget_manage_categories.php?s=0', function(data){
                                    $("#widget-mid-loading").toggle();
                                    $("#widget-main-mid-top-container").html(data);
                                });
                            });						
				
				// Manage Merchants
				$("#dashboard-manage-merchants").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get('/admin/merchants/widget_manage_merchants.php?s=0', function(data){
						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-top-container").html(data);
					}); 
				});						
				
				// Manage Vouchers
				$("#dashboard-manage-vouchers").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get('/admin/cods/widget_manage_cods.php?s=0', function(data){

						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-top-container").html(data);
					}); 
				});						

				// Manage Users
				$("#dashboard-manage-users").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get('/admin/users/widget_users.php', function(data){

						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-top-container").html(data);
					}); 
				});
				
				// Create Category
				$("#dashboard-create-category").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get("/admin/categories/widget_categories_add.php", function(data){

						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-bottom-container").html(data);
					});
				});
				
				// Create Merchant
				$("#dashboard-create-merchant").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get("/admin/merchants/widget_merchants_add.php", function(data){

						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-bottom-container").html(data);
					});					
				});

				// Create Voucher
				$("#dashboard-create-voucher").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get("/admin/cods/widget_cods_add.php", function(data){

						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-bottom-container").html(data);
					});					
				});

				//Manage Sites
				$("#dashboard-mange-sites").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get("/admin/sites/manage_sites.php", function(data){

						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-top-container").html(data);
					});					
				});
				
				// manage banners and logos
				$("#dashboard-manage-images").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get('/admin/pictures/index.php', function(data){

						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-top-container").html(data);
					});					
				});

				// Market Place
				$("#dashboard-marketplace").click(function(){
					alert("coming soon");
				});

				// news
				$("#dashboard-news").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get('/admin/news/index.php', function(data){

						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-top-container").html(data);
					});					
				});
				
				// CMS						
				$("#dashboard-pages").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get('/admin/sites/manage_content.php', function(data){
						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-top-container").html(data);
					}); 
				});

				// CMS						
				$("#dashboard-mange-subscribers").click(function(){

					$("#widget-main-mid-top-container").show();
					$("#widget-main-mid-top-container").empty();
					$("#widget-main-mid-bottom-container").empty();
					$("#widget-mid-loading").toggle();
					$.get('/admin/subscriptions/index.php', function(data){
						$("#widget-mid-loading").toggle();
						$("#widget-main-mid-top-container").html(data);
					}); 
				});				

			});
		</script>
	
	</div>
	<!-- DASHBOARD END -->
        <!-- DASHBOARD END -->