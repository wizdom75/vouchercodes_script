<?php
###################################################################################################
###################################################################################################
// Peter Ncube PHP Price Comparison Script Version 1.0 Script
###################################################################################################
###################################################################################################
            require     ('../path.php');
            require     (FILEPATH.'includes/config.php');
            include     (FILEPATH."session.php");
///////////////////////////////////////////////////////////////////////////////////////////////////
		require (PATH.ADMIN_FOLDER_NAME."/header.php");
		$maxFileSize = ini_get('upload_max_filesize');
                
                $userIdPrefix = doCleanInput($_GET['userIdPrefix']);
?>

	<center>

		<font class="large">Manage Merchant Import (CSV)</font><br><br>


		<form action="import-merchants-process.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="11000000">
			<table cellpadding="0" cellspacing="0" width="500" align="center">
				<tr>
					<td width="500" class="th"  colspan="2">Import Merchants</td>
					
				</tr>
			</table>
			<table width="500" cellspacing="1" cellpadding="5" align="center" class="table">

				<tr>
					<td width="40%" align="right">Upload CSV File :</td>
					<td class=""><input type="file" name="merchantCsv" size="35" class="effect"></td>
				</tr>

                                <tr>
					<td class="" colspan="1" align="right">MerchantId Prefix:</td>
                                        <td class="" colspan="1" align="left">
                                            <select name="userIdPrefix">
                                                <option value="">---</option>
                                                <option value="aw">Affiliate Window</option>
                                                <option value="af">Affiliate Future</option>
                                                <option value="wg">Webgains</option>
                                                <option value="td">Tradedoubler</option>
                                                <option value="ls">Linkshare</option>
                                                <option value="cj">CJ</option>
                                                <option value="pr">Paid on Results</option>
                                            </select>
                                        </td>
				</tr>
                                				<tr>
					<td class="" colspan="2" align="center"><input type="submit" name="Enter" value="  Upload  " class="baseeffect"></td>
				</tr>
			</table>

		</form>
		<br>
		<font class="normal">Format For CSV File inorder to upload Merchants</font><br>
		<table width="600" border="0" cellspacing="1" cellpadding="5" bgcolor="black">
			<tr>
                            <td class="" bgcolor="white"><b>Merchant ID</b></td>
				<td class="" bgcolor="white"><b>Merchant Name</b></td>
                                <td class="" bgcolor="white"><b>Merchant Logo (optional)</b></td>
				<td class="" bgcolor="white"><b>Short Description (optional)</b></td>
				<td class="" bgcolor="white"><b>Long Description (optional)</b></td>
				<td class="" bgcolor="white"><b>Default Tracking URL</b></td>
                                <td class="" bgcolor="white"><b>Category</b></td>
                                <td class="" bgcolor="white"><b>Domain Name URL</b></td>
                                <td class="" bgcolor="white"><b>Region</b></td>

			</tr>
			<tr>
				<td class="" bgcolor="white">BK1000</td>
				<td class="" bgcolor="white">Example Store</td>
                                <td class="" bgcolor="white">http://www.example.com/images/logo.png</td>
                                <td class="" bgcolor="white">this is the best store blah blah</td>
				<td class="" bgcolor="white">this is the best store blah blah blah blah blah</td>
				<td class="" bgcolor="white">http://www.exampleaffiliate.com?aId=10101&aff=www.examplestore.com/</td>
                                <td class="" bgcolor="white"><b>Tools, Cars etc</b></td>
                                <td class="" bgcolor="white">www.example.com</td>
                                <td class="" bgcolor="white"><b>GB</b></td>
                                
				
			</tr>

		</table>

	</center>



<?
require (PATH.ADMIN_FOLDER_NAME."/footer.php");
 ?>
