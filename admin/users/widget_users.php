<?php
            require     ('../../path.php');
            require     (FILEPATH.'includes/config.php');
            include     (FILEPATH."session.php");
            
?>
<div id="widget-main-mid-top-container">	<!-- SITE SETTTING START -->
	<div class="siteSetting-widget-container">
    	<div class="content1-widget-container">
        	<div class="title">
            	<div class="txt">User Management »</div>
			</div>
            
            <div class="detail">
            	<div class="userManagement-widget-container">
                	<div class="title">
                    	<div class="search-Div">
                        	
                        	<div class="heading">
                            	Search                            </div>
							
							<form action="/admin/users/all_users" method="post" id="UserAdminAllUsersForm" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>							
							<div class="input-row">
								<input name="data[User][search]" type="text" class="input-field" id="UserSearch"><input class="btn" id="submit-1465635166" type="submit" value="">                            </div></form>
						
						</div>
                        
                        <div class="links-Div">
                        	
                        	<div class="txt1">
                            	<a href="/admin/users/all_users" id="link-53899170">All Users</a>                                   		
                            </div>
                            <span> | </span>
                            
                            <div class="txt1">
                            	<a href="/admin/users/new_users" id="link-1716971528">New Users</a>                                   		
							</div>
                            <!--     
                            <span> | </span>
                            <div class="txt1">
                            	                                   		
							</div>
                            <span> | </span>
                            
                            <div class="txt2">
                                                               		
							</div>
							 -->
						</div>
					</div>
                    
                                        
                    <div id="widget-user-list-container">
                   			<div class="action">
		<div class="paging">
	<span class="NextPg DisabledPgLk">Next &gt;&gt;</span>	<span class="PrevPg DisabledPgLk">&lt;&lt; Previous</span>	<div class="numbers-Div">	
    		</div>
</div>	   				
	</div>
	<div class="detail">
	
		
	                                            
	
	
	
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
		</div>	
	</div>
	<!-- SITE SETTTING END -->
</div>
<div id="widget-main-mid-bottom-container"></div>