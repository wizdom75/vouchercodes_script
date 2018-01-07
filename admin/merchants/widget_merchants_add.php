<?php
            require     ('../../path.php');
            require     (FILEPATH.'includes/config.php');
            include     (FILEPATH."session.php");
            
?>

<div class="siteSetting-widget-container">
	
	<div class="content2-widget-container">
		
		<div class="title">
			<div class="txt">
				Create Merchant »
			</div>
		</div>
		
		<div class="detail">
			
			<form action="/admin/merchants/widget_merchants_add" method="post" id="MerchantAdminWidgetMerchantsAddForm" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>			
			<table width="650" border="0" cellpadding="0" cellspacing="0" align="center">
				<tbody><tr>
					<td colspan="3"></td>
				</tr>
				
				<tr>
					<td valign="top">Sites:</td>
					<td colspan="2">
						<div class="news-site-list">	
							<input type="hidden" name="data[Merchant][site]" value="" id="MerchantSite">

<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][site][]" value="1" id="MerchantSite1"><label for="MerchantSite1">demo.voucherscript.com</label></div>
	                        
						</div>
					</td>
				</tr>
				
				<tr>
					<td valign="top">Categories:</td>
					<td colspan="2">
						<div class="merchant-category-list">	
							<input type="hidden" name="data[Merchant][category]" value="" id="MerchantCategory">

<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="1" id="MerchantCategory1"><label for="MerchantCategory1">Adult and Dating</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="2" id="MerchantCategory2"><label for="MerchantCategory2">Baby and Toddler</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="3" id="MerchantCategory3"><label for="MerchantCategory3">Books and Magazines</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="4" id="MerchantCategory4"><label for="MerchantCategory4">Business</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="5" id="MerchantCategory5"><label for="MerchantCategory5">CDs and DVDs</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="6" id="MerchantCategory6"><label for="MerchantCategory6">Charities</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="7" id="MerchantCategory7"><label for="MerchantCategory7">Clothing and Footwear</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="8" id="MerchantCategory8"><label for="MerchantCategory8">Competitions</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="9" id="MerchantCategory9"><label for="MerchantCategory9">Computers and Internet</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="10" id="MerchantCategory10"><label for="MerchantCategory10">DIY and Tools</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="11" id="MerchantCategory11"><label for="MerchantCategory11">Education</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="12" id="MerchantCategory12"><label for="MerchantCategory12">Electronics and Appliances</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="13" id="MerchantCategory13"><label for="MerchantCategory13">Experience Days</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="14" id="MerchantCategory14"><label for="MerchantCategory14">Finance and Insurance</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="15" id="MerchantCategory15"><label for="MerchantCategory15">Flights and Cruises</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="16" id="MerchantCategory16"><label for="MerchantCategory16">Flowers</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="17" id="MerchantCategory17"><label for="MerchantCategory17">Food and Drink</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="18" id="MerchantCategory18"><label for="MerchantCategory18">Gambling</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="19" id="MerchantCategory19"><label for="MerchantCategory19">Games and Consoles</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="20" id="MerchantCategory20"><label for="MerchantCategory20">Gifts and Gadgets</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="21" id="MerchantCategory21"><label for="MerchantCategory21">Health and Beauty</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="22" id="MerchantCategory22"><label for="MerchantCategory22">Hobbies and Collectables</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="23" id="MerchantCategory23"><label for="MerchantCategory23">Holidays Abroad</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="24" id="MerchantCategory24"><label for="MerchantCategory24">Home and Garden</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="25" id="MerchantCategory25"><label for="MerchantCategory25">Hotels and Accommodation</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="26" id="MerchantCategory26"><label for="MerchantCategory26">Jewellery and Accessories</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="27" id="MerchantCategory27"><label for="MerchantCategory27">Lingerie and Underwear</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="28" id="MerchantCategory28"><label for="MerchantCategory28">Mobile Phones</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="29" id="MerchantCategory29"><label for="MerchantCategory29">Motoring</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="30" id="MerchantCategory30"><label for="MerchantCategory30">Music</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="31" id="MerchantCategory31"><label for="MerchantCategory31">Pets</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="32" id="MerchantCategory32"><label for="MerchantCategory32">Photo Printing</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="33" id="MerchantCategory33"><label for="MerchantCategory33">Rent and Hire</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="34" id="MerchantCategory34"><label for="MerchantCategory34">Services</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="35" id="MerchantCategory35"><label for="MerchantCategory35">Shopping</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="36" id="MerchantCategory36"><label for="MerchantCategory36">Sound and Vision</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="37" id="MerchantCategory37"><label for="MerchantCategory37">Special Occasions</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="38" id="MerchantCategory38"><label for="MerchantCategory38">Sports and Leisure</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="39" id="MerchantCategory39"><label for="MerchantCategory39">Tickets</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="40" id="MerchantCategory40"><label for="MerchantCategory40">Toys and Games</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="41" id="MerchantCategory41"><label for="MerchantCategory41">Travel</label></div>
<div class="input-select-field-small"><input type="checkbox" name="data[Merchant][category][]" value="42" id="MerchantCategory42"><label for="MerchantCategory42">UK Holidays</label></div>
	                        
						</div>
					</td>
				</tr>
				
				<tr>
					<td>Merchant Name:</td>
					<td colspan="2">
						<input name="data[Merchant][merchant_name]" type="text" class="input-field-extra-large" maxlength="255" id="MerchantMerchantName">	                        
					</td>
				</tr>
				
				<tr>
					<td>Safe Name:</td>
					<td colspan="2">
						<input name="data[Merchant][safe_merchant_name]" type="text" class="input-field-extra-large" maxlength="255" id="MerchantSafeMerchantName">	                        
					</td>
				</tr>
				
				<tr>
					<td valign="top">Description:</td>
					<td colspan="2">
						<textarea name="data[Merchant][description]" class="input-field-textArea-extra-large" cols="30" rows="6" id="MerchantDescription"></textarea>	                        
					</td>
				</tr>
				
				<tr>
					<td>Site URL:</td>
					<td colspan="2">
						<input name="data[Merchant][site_url]" type="text" class="input-field-extra-large" maxlength="1024" id="MerchantSiteUrl">	                        
					</td>
				</tr>
				
				<tr>
					<td>Logo URL:</td>
					<td colspan="1">
						<div style="floag:right; width: 100px;">
							<a href="javascript:void(0);" onclick="$('#merchant-logo-selector').toggle();" style="float:right;"> 
								Select 
							</a>
						</div>
					</td>
					<td colspan="1">
						<input name="data[Merchant][logo_url]" type="text" class="input-field-logo-url-with-select-option" maxlength="1024" id="MerchantLogoUrl">	                        
					</td>
				</tr>
				
				<tr>
					<td colspan="3" id="merchant-logo-selector" style="display:none; border: 2px dashed">
						<div id="widget-image-selector-container">
							<span style="align: right;">
								
	<div class="general-widget-container">
    	<div class="left">
        	<div class="txt">
            	Merchant Logo			</div>
		</div>
        
        <div class="mid">
        	
        	<div class="action-Div">
            	<div class="edit-btn">
                	<a href="javascript:void(0);" id="update">
                		<img src="/img/backoffice/edit-icon.png">
                	</a>
                </div>
			</div>
            
            <div class="img">
                                	            		<img src="/img/backoffice/ad-2.jpg">
                	                
                			</div>
		</div>
		
		
	</div>						
							</span>
						</div>					
					</td>
				</tr>
				
				<tr>
					<td>Affiliate URL:</td>
					<td colspan="2">
						<input name="data[Merchant][affiliate_url]" type="text" class="input-field-extra-large" maxlength="1024" id="MerchantAffiliateUrl">	                        
					</td>
				</tr>
				
				<tr>
					<td>Top Merchant?</td>
					<td colspan="2">
						<input type="hidden" name="data[Merchant][istop]" id="MerchantIstop_" value="0"><input type="checkbox" name="data[Merchant][istop]" class="checkBox-type1-extra-large" value="1" id="MerchantIstop">	                        
					</td>
				</tr>
				
				<tr>
					<td valign="top">Meta Keywords:</td>
					<td colspan="2">
						<textarea name="data[Merchant][metakw]" class="input-field-textArea-extra-large" cols="30" rows="6" id="MerchantMetakw"></textarea>	                        
					</td>
				</tr>

				<tr>
					<td valign="top">Meta Description:</td>
					<td colspan="2">
						<textarea name="data[Merchant][metadesc]" class="input-field-textArea-extra-large" cols="30" rows="6" id="MerchantMetadesc"></textarea>	                        
					</td>
				</tr>

				<tr>
					<td valign="top">Meta Title:</td>
					<td colspan="2">
						<textarea name="data[Merchant][metatitle]" class="input-field-textArea-extra-large" cols="30" rows="6" id="MerchantMetatitle"></textarea>	                        
					</td>
				</tr>
				
				<tr>
					<td>Phone 1:</td>
					<td colspan="2">
						<input name="data[Merchant][phone1]" type="text" class="input-field-extra-large" maxlength="45" id="MerchantPhone1">	                        
					</td>
				</tr>				
								
				<tr>
					<td>Phone 2:</td>
					<td colspan="2">
						<input name="data[Merchant][phone2]" type="text" class="input-field-extra-large" maxlength="45" id="MerchantPhone2">	                        
					</td>
				</tr>				

				<tr>
					<td>Phone 3:</td>
					<td colspan="2">
						<input name="data[Merchant][phone3]" type="text" class="input-field-extra-large" maxlength="45" id="MerchantPhone3">	                        
					</td>
				</tr>		
				
				<tr>
					<td valign="top">Address 1:</td>
					<td colspan="2">
						<textarea name="data[Merchant][address1]" class="input-field-textArea-extra-large" cols="30" rows="6" id="MerchantAddress1"></textarea>	                        
					</td>
				</tr>
				
				<tr>
					<td valign="top">Address 2:</td>
					<td colspan="2">
						<textarea name="data[Merchant][address2]" class="input-field-textArea-extra-large" cols="30" rows="6" id="MerchantAddress2"></textarea>	                        
					</td>
				</tr>				
				
				<tr>
					<td colspan="3">
						<input class="btn ui-button ui-widget ui-state-default ui-corner-all" id="btnCreateMerchant" type="submit" value="Create" role="button" aria-disabled="false"><a href="javascript:void(0);" id="lnk-widget-merchant-add-cancel" class="btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Cancel</span></a>					</td>
				</tr>
			</tbody></table>
			</form>
			
			
		</div>  
	</div>
</div>


<div id="widget-main-mid-bottom-container"></div>