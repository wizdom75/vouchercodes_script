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
		require ("header.php");
		$maxFileSize = ini_get('upload_max_filesize');
?>

	<center>

		<font class="large">Manage Category Import (CSV)</font><br><br>


		<form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="11000000">
			<table cellpadding="0" cellspacing="0" width="500" align="center">
				<tr>
					<td width="500" class="th"  colspan="2">Import Categories</td>
					
				</tr>
			</table>
			<table width="500" cellspacing="1" cellpadding="5" align="center" class="table">

				<tr>
					<td width="25%">Upload CSV File :</td>
					<td class=""><input type="file" name="categoryCsv" size="35" class="effect"></td>
				</tr>
				<tr>
                                <input type="hidden" name="catSub" value="1"/>
					<td class="" colspan="2" align="center"><input type="submit" name="Enter" value="  Upload  " class="baseeffect"></td>
				</tr>
			</table>

		</form>
		<br>
		<font class="normal">Format For CSV File inorder to create categories:</font><br>
		<table width="600" border="0" cellspacing="1" cellpadding="5" bgcolor="black">
			<tr>
                            <td class="" bgcolor="white"><b>Category ID</b></td>
				<td class="" bgcolor="white"><b>Parent ID</b></td>

				<td class="" bgcolor="white"><b>Category Name</b></td>
				<td class="" bgcolor="white"><b>Filename (optional)</b></td>
				<td class="" bgcolor="white"><b>Sort Order (optional)</b></td>
				<td class="" bgcolor="white"><b>Description (optional)</b></td>
				<td class="" bgcolor="white"><b>Page Title (optional)</b></td>
				<td class="" bgcolor="white"><b>Meta keyword (optional)</b></td>

				<td class="" bgcolor="white"><b>Meta description (optional)</b></td>
			</tr>
			<tr>
				<td class="" bgcolor="white">1000</td>
				<td class="" bgcolor="white">0</td>
				<td class="" bgcolor="white">Test Category</td>
				<td class="" bgcolor="white">test-category-name</td>

				<td class="" bgcolor="white">1</td>
				<td class="" bgcolor="white">This is a test category.</td>
				<td class="" bgcolor="white">Test Category</td>
				<td class="" bgcolor="white">test, category</td>
				<td class="" bgcolor="white">This is a test category.</td>
			</tr>

			<tr>
				<td class="" bgcolor="white">1001</td>
				<td class="" bgcolor="white">1000</td>
				<td class="" bgcolor="white">Test Sub Category</td>
				<td class="" bgcolor="white">test-sub-category-name</td>
				<td class="" bgcolor="white">2</td>

				<td class="" bgcolor="white">This is a sub category of test category.</td>
				<td class="" bgcolor="white">Sub Category</td>
				<td class="" bgcolor="white">test, sub, category</td>
				<td class="" bgcolor="white">This is a sub category.</td>
			</tr>
		</table>

	</center>



<?
include("footer.php");
 ?>