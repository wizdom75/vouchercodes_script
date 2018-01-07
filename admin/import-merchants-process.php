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
$userIdPrefix = doCleanInput($_POST['userIdPrefix']);

if($userIdPrefix == ''){
    echo 'Please add a prefix to your merchant ID';
exit();
}
$fileSize = $_POST['fileSize'];
  ini_set('auto_detect_line_endings', true);
  ini_set('allow_url_fopen', true);
            $pathname = PATH."upload/csvfiles/";
            @mkdir($pathname, 0777, true);
            chmod($pathname, 0777);


 $target = $pathname;
 $target = $target . basename( $_FILES['merchantCsv']['name']) ; 
 $ok=1;

 //This is our size condition 
 if ($uploaded_size > $fileSize) 
 { 
 echo "Your file is too large.<br>"; 
 $ok=0; 
 }
 //This is our limit file type condition 
 if ($uploaded_type =="text/php") 
 { 
 echo "No PHP files<br>"; 
 $ok=0; 
 }
 //Here we check that $ok was not set to 0 by an error 
 if ($ok==0) 
 { 
 Echo "Sorry your file was not uploaded"; 
 }

 //If everything is ok we try to upload it 
 else 
 { 
 //if(move_uploaded_file($_FILES['merchantCsv']['tmp_name'], $target))
 if(move_uploaded_file($_FILES['merchantCsv']['tmp_name'], PATH."upload/csvfiles/merchants.csv"))
 { 
 echo "The file ". basename( $_FILES['merchantCsv']['name']). " has been uploaded"; 
 } 
 else 
 { 
 echo "Sorry, there was a problem uploading your file.<br/>".$_FILES[0]; 
 } 
 }

$myFile = PATH."upload/csvfiles/merchants.csv";
chmod($myFile, 0777);
$row = 0;
        if (($handle = fopen($myFile , "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 111000, ",")) !== FALSE) {
                $num = count($data);

        $userId = $userIdPrefix.$data[0];
        $password = 'u9Q=';
        $paymentDue = 'N';
        $isClickThruFree = 'Y';


        $merchantName = $data[1];
        $logo = $data[2];
        $shortDesc = $data[3];
        $description = $data[4];
        
        if($userIdPrefix == 'wg'){
            $defaultUrl = str_replace('=mycampaignid', '=334', $data[5].'&wgtarget='.$data[7]);
            } else {
           $defaultUrl = $data[5]; 
        }
        
        $url = $data[7];
        $parse = parse_url($url);
        $email = 'sales@'.$parse['host'];
        $email = str_replace('www.', '', $email);
        $domain = str_replace('www.', '', $parse['host']);
        $region = $data[8];
        $category = $data[6];
if($row > 0){
        $sql1 = "INSERT INTO ".PREFIX."USER (`USERID`, `PASSWORD`, `REGISTERATION_DATE`, `PAYMENTDUE`, `IS_CLICKTHROUGH_FREE`)
                VALUES ('$userId', '$password', NOW(), '$paymentDue', '$isClickThruFree')";
       $res1 = executeQuery($sql1);
        
       
        $sql2 = "INSERT INTO ".PREFIX."USERINFO (`USERID`, `NAME`, `PERSON_NAME`, `ADDRESS`, `CITY`, `STATE`, `COUNTRY`, `ZIP`, `PHONE`, `MOBILE`, `EMAIL`, `URL`, `DEFAULT_URL`, `PAGE_TITLE`, `PAGE_KEYWORDS`, `PAGE_DESCRIPTION`, `SPIDER_PRODUCTS`, `SPIDER_SEARCH_WITHIN`, `PROFILE`, `SHORT_DESCRIPTION`, `DELIVERY_COSTS`, `SHIPPING_DETAILS`, `CATEGORY`, `REGION`) "
                . "VALUES ('$userId', '$merchantName', '$personName', '$address', '$city', '$state', '$country', '$zip', '$phone', '$mobile', '$email', '$url', '$defaultUrl', '$domain', '$pageKeywords', '$description', '$spiderProducts', '$spiderSearchWithin', '$profile', '$shortDesc', '$deliveryCosts', '$shippingDetails', '$category', '$region')";
       if($res1 >0)
        $res2 = executeQuery($sql2);
        
        $sql3 = "UPDATE ".PREFIX."USERINFO SET DEFAULT_URL='$defaultUrl', PAGE_TITLE='$domain', CATEGORY='$category', REGION='$region' WHERE USERID='$userId'";
        
        $res3 = executeQuery($sql3);
        //now we upload the logo
        chmod(PATH."upload/merchant/".$_POST['sub'].".jpg", 0777);
        
$img = PATH."upload/merchant/".$userId.".jpg";

if($res1 > 0 && $res2 >0)
file_put_contents($img, file_get_contents($logo));
}
        $row++;
    }     
	// echo  "Columns = $num"."<br>";
        // echo  "Rows = $row"."<br>";


        echo $records = ($row - 1).' have beeen processed';


    fclose($handle);
}
?><?php
//echo print_r($_FILES);
//echo '<br>'.$fileSize;
//echo '<br>'.$data;

///////////////////////////////////////////////////////////////////////////////////////////////////
require (PATH.ADMIN_FOLDER_NAME."/footer.php");
//////////////////////////////////////////////////////////////////////////////////////////////////
?>