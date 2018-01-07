<?php
            require     ('../../path.php');
            require     (FILEPATH.'includes/config.php');
            include     (FILEPATH."session.php");
            
?>

<div id="widget-main-mid-bottom-container">
<div class="siteSetting-widget-container">
	<div class="content2-widget-container">
		<div class="title">
			<div class="txt">
				Create Category »
			</div>
		</div>
		<div class="detail">
			
			<form action="/admin/categories/widget_categories_add.php" method="post" id="CategoryAdminWidgetCategoriesAddForm" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>			<table width="650" border="0" cellpadding="0" cellspacing="0" align="center">
				
				<tbody><tr>
					<td colspan="3"></td>
				</tr>
												
				<tr>
					<td valign="top">Sites:</td>
					<td colspan="2">
						<div class="news-site-list">	
							<input type="hidden" name="data[Category][site]" value="" id="CategorySite">

<div class="input-select-field-small"><input type="checkbox" name="data[Category][site][]" value="1" id="CategorySite1"><label for="CategorySite1">demo.voucherscript.com</label></div>
	                        
						</div>
					</td>
				</tr>
				
				<tr>
					<td>Parent:</td>
					<td colspan="2">
						<select name="data[Category][parent_id]" class="input-select-field-extra-large" id="CategoryParentId">
<option value="1">Adult and Dating</option>
<option value="2">Baby and Toddler</option>
<option value="3">Books and Magazines</option>
<option value="4">Business</option>
<option value="5">CDs and DVDs</option>
<option value="6">Charities</option>
<option value="7">Clothing and Footwear</option>
<option value="8">Competitions</option>
<option value="9">Computers and Internet</option>
<option value="10">DIY and Tools</option>
<option value="11">Education</option>
<option value="12">Electronics and Appliances</option>
<option value="13">Experience Days</option>
<option value="14">Finance and Insurance</option>
<option value="15">Flights and Cruises</option>
<option value="16">Flowers</option>
<option value="17">Food and Drink</option>
<option value="18">Gambling</option>
<option value="19">Games and Consoles</option>
<option value="20">Gifts and Gadgets</option>
<option value="21">Health and Beauty</option>
<option value="22">Hobbies and Collectables</option>
<option value="23">Holidays Abroad</option>
<option value="24">Home and Garden</option>
<option value="25">Hotels and Accommodation</option>
<option value="26">Jewellery and Accessories</option>
<option value="27">Lingerie and Underwear</option>
<option value="28">Mobile Phones</option>
<option value="29">Motoring</option>
<option value="30">Music</option>
<option value="31">Pets</option>
<option value="32">Photo Printing</option>
<option value="33">Rent and Hire</option>
<option value="34">Services</option>
<option value="35">Shopping</option>
<option value="36">Sound and Vision</option>
<option value="37">Special Occasions</option>
<option value="38">Sports and Leisure</option>
<option value="39">Tickets</option>
<option value="40">Toys and Games</option>
<option value="41">Travel</option>
<option value="42">UK Holidays</option>
<option value="0" selected="selected">none</option>
</select>	                        
					</td>
				</tr>
				
				<tr>
					<td>Category Name:</td>
					<td colspan="2">
						<input name="data[Category][catname]" type="text" class="input-field-extra-large" maxlength="255" id="CategoryCatname">	                        
					</td>
				</tr>
				
				<tr>
					<td>Safe Name:</td>
					<td colspan="2">
						<input name="data[Category][safe_catname]" type="text" class="input-field-extra-large" maxlength="255" id="CategorySafeCatname">	                        
					</td>
				</tr>
				
				<tr>
					<td valign="top">Meta Keywords:</td>
					<td colspan="2">
						<textarea name="data[Category][metakw]" class="input-field-textArea-extra-large" cols="30" rows="6" id="CategoryMetakw"></textarea>	                        
					</td>
				</tr>

				<tr>
					<td valign="top">Meta Description:</td>
					<td colspan="2">
						<textarea name="data[Category][metadesc]" class="input-field-textArea-extra-large" cols="30" rows="6" id="CategoryMetadesc"></textarea>	                        
					</td>
				</tr>

				<tr>
					<td valign="top">Meta Title:</td>
					<td colspan="2">
						<textarea name="data[Category][metatitle]" class="input-field-textArea-extra-large" cols="30" rows="6" id="CategoryMetatitle"></textarea>	                        
					</td>
				</tr>
				
				<tr>
					<td colspan="3">
						<input class="btn ui-button ui-widget ui-state-default ui-corner-all" id="btnCreateCategory" type="submit" value="Create" role="button" aria-disabled="false">						<a href="javascript:void(0);" id="lnk-widget-category-add-cancel" class="btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Cancel</span></a>					</td>
				</tr>
			</tbody></table>
			
			</form>
			
			
		</div>  
	</div>
</div>  
</div>

<div id="widget-main-mid-bottom-container"></div>