<?php
            require     ('../../path.php');
            require     (FILEPATH.'includes/config.php');
            include     (FILEPATH."session.php");
            
?>

<div id="widget-main-mid-top-container">		
	<div class="siteSetting-widget-container">
    	<div class="content2-widget-container">
        	<div class="title">
            	<div class="txt">Banners &amp; Logos »</div>
            </div>
            
            <div class="detail">
            	
            	<div class="menuBar">
                	<div class="item">
                		<a href="javascript:void(0);" id="upload-banner">New Banner</a>
                	</div>
                    <div class="item">
                    	<a href="javascript:void(0);" id="upload-logo">New Logo</a>
                    </div>
                    <div class="item">
                    	<a href="javascript:void(0);" id="upload-voucher">New Voucher</a>
                    </div>
                    <div class="item">
                    	<a href="javascript:void(0);" id="remove-images">Remove</a>
                    </div>
                    <div class="item last">
                    	<a href="javascript:void(0);" id="refresh-images">Refresh</a>
                    </div>
                    
	                <div class="searchBar">
						
						<div class="title">
	                    	Search	                    </div>
						<form action="/admin/pictures" method="post" id="PictureAdminIndexForm" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><input name="data[Picture][search]" type="text" class="input" id="PictureSearch"><input class="btn" id="submit-1970752325" type="submit" value=""></form>					</div>                    
              	</div>
                
                <div class="bannerView-container">
                	<div class="banner-widget-container line">
						                    	
					</div>
                	<div class="banner-widget-container">
                    	    
											</div>
				</div>
			</div>
			<div class="action">
                <div class="paging">
	<span class="NextPg DisabledPgLk">Next &gt;&gt;</span>	<span class="PrevPg DisabledPgLk">&lt;&lt; Previous</span>	<div class="numbers-Div">	
    		</div>
</div>	   				
			</div>
		</div>
	</div>
	

	</div>


<div id="widget-main-mid-bottom-container"></div>