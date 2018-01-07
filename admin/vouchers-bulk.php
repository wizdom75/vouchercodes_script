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
?>

	<center>

		<font class="large">Manage Voucher Codes Import (CSV)</font><br><br>


		<form action="vouchers-import-process.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="11000000">
			<table cellpadding="0" cellspacing="0" width="500" align="center">
				<tr>
					<td width="500" class="th"  colspan="2">Import Vouchers</td>
					
				</tr>
			</table>
			<table width="500" cellspacing="1" cellpadding="5" align="center" class="table">

				<tr>
					<td width="25%">Upload CSV File :</td>
					<td class=""><input type="file" name="codescsv" size="35" class="effect"></td>
				</tr>
				<tr>
					<td class="" colspan="2" align="center"><input type="submit" name="Enter" value="  Upload  " class="baseeffect"></td>
				</tr>
			</table>

		</form>
		<br>
		<font class="normal">Format For CSV File inorder to upload vouchers</font><br>
		<table width="600" border="0" cellspacing="1" cellpadding="5" bgcolor="black">
			<tr>
                            <td class="" bgcolor="white"><b>Merchant ID</b></td>
				<td class="" bgcolor="white"><b>Voucher Code</b></td>
                                <td class="" bgcolor="white"><b>Description</b></td>
				<td class="" bgcolor="white"><b>Terms</b></td>
				<td class="" bgcolor="white"><b>Landing Page</b></td>
				<td class="" bgcolor="white"><b>Type</b></td>
				<td class="" bgcolor="white"><b>From</b></td>
				<td class="" bgcolor="white"><b>To</b></td>
                                <td class="" bgcolor="white"><b>Region</b></td>

			</tr>
			<tr>
				<td class="" bgcolor="white">BK1000</td>
				<td class="" bgcolor="white">ABC123!</td>
				<td class="" bgcolor="white">What the code is about</td>
				<td class="" bgcolor="white">Conditions</td>
                                <td class="" bgcolor="white">http://www.example.com/example-deal.html</td>
				<td class="" bgcolor="white">is this a voucher or a </td>
				
				<td class="" bgcolor="white">12/09/2000</td>
				<td class="" bgcolor="white">12/12/2001</td>
                                <td class="" bgcolor="white">UK</td>
				
			</tr>

		</table>

	</center>



<?
require (PATH.ADMIN_FOLDER_NAME."/footer.php");
 ?>

