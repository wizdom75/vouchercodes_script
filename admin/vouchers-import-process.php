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
//////////////////////////////////////////////////////////////////////////////////////////////////
$lastUpdate = date("F j, Y, g:i a");
$fileSize = $_POST['fileSize'];

            $pathname = PATH."upload/vouchers/";
            @mkdir($pathname, 0777, true);
            chmod($pathname, 0777);


 $target = $pathname;
 $target = $target . basename( $_FILES['uploaded']['name']) ; 
 $ok=1;
$myFile = PATH."upload/vouchers/codes.csv";
 //This is our size condition 
 if ($uploaded_size > $fileSize) {
     
 echo "Your file is too large.<br>";
 
 $ok=0;
 
 }
 //This is our limit file type condition 
 if ($uploaded_type =="text/php") {
     
 echo "No PHP files<br>";
 
 $ok=0;
 
 }
 //Here we check that $ok was not set to 0 by an error 
 if ($ok==0) { 
     
 Echo "Sorry your file was not uploaded";
 
  //If everything is ok we try to upload it 
 }else{
     
 //if(move_uploaded_file($_FILES['codescsv']['tmp_name'], $target)){
 if(move_uploaded_file($_FILES['codescsv']['tmp_name'], PATH."upload/vouchers/codes.csv")){ 
 //echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded"; 
     ini_set('auto_detect_line_endings', true);
     $file = fopen("$myFile","r");

emptyTable('VOUCHER_CODES');

$row = 0;
while (($data = fgetcsv($file, 0, ',', '"', '\n')) !== FALSE) {
    
        $num = count($data);
       
        if($row > 0){
            $vID = getNextId('VOUCHER_CODES');
            $sql = " INSERT INTO ".PREFIX."VOUCHER_CODES (`ID`, `USERID`, `CODE`, `DESCRIPTION`, `TERMS`, `URL`, `TYPE`, `START_DATE`, `END_DATE`, `REGION`, `EXCLUSIVE`) VALUES (";
        for ($c=0; $c < $num; $c++) {
            if($c == 2)
                $add = 'aw';
            else
                $add = '';
            //echo $add.$data[$c] . ", ";
           } 

$userId = 'aw'.$data[2];
$vCode = $data[3];
$vDescription = htmlentities($data[4]);
$vTerms = htmlentities($data[5]);
$vUrl = $data[6];
$vType = $data[7];
$vRegion = $data[10];
           $exclusive = ($data[12]=='No')?'N':'Y';
           $startDate = str_replace('/', '-', $data[8]);
           $startDate = formatDateTime($startDate, 'Y-m-d H:i:s', 'd-m-Y H:i');
           $endDate = formatDateTime(str_replace('/', '-', $data[9]), 'Y-m-d H:i:s', 'd-m-Y H:i');
$sql .= "$vID, '$userId', '$vCode', '$vDescription', '$vTerms', '$vUrl', '$vType', '$startDate', '$endDate', '$vRegion', '$exclusive'";

        
        $sql .= ')';
                    
        echo "<br/>\n<br/>\n";
        $res = executeQuery($sql);
        echo $sql;
        
    }
     $row++;
}

fclose($file);

 }else{ 
 echo "Sorry, there was a problem uploading your file.<br/>".$_FILES[0]; 
 } 
 }


?>




<?php
//echo print_r($_FILES);
//echo '<br>'.$fileSize;
//echo '<br>'.$data;
 //echo  "Columns = $num"."<br>";
// echo  "Rows = $row";
///////////////////////////////////////////////////////////////////////////////////////////////////
require (PATH.ADMIN_FOLDER_NAME."/footer.php");
//////////////////////////////////////////////////////////////////////////////////////////////////
?>