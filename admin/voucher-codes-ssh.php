#!/usr/bin/env php
<?php
// Same as error_reporting(E_ALL);
error_reporting(E_ALL);
ini_set("display_errors", 1);

//ini_set("open_basedir","/var/www/vhosts/server109-228-20-62.live-servers.net/httpdocs/tafuma_uk/");
            require     ("/var/www/vhosts/server109-228-20-62.live-servers.net/httpdocs/pricecomp_uk/path.php");
            require     (FILEPATH.'includes/config.php');

  
    ini_set('auto_detect_line_endings', true);
   // ini_set('allow_url_fopen', true);
    
// First we get the flat file containing voucher codes

$remoteFile = "http://www.affiliatewindow.com/affiliates/discount_vouchers.php?user=87679&password=5ba081e52e7ff42b4b51b2a52abc329d&export=csv&voucherSearch=1&excl=1&rel=1&reg;ion=1&type=all";

$localFile  = FILEPATH."upload/vouchers/codes-ssh.csv";

$lastUpdate = date("F j, Y, g:i a");
$fileSize   = $_POST['fileSize'];
//echo $remoteFile;
            $pathname = PATH."upload/vouchers/";
            @mkdir($pathname, 0777, true);
            chmod($pathname, 0777);
            chmod($localFile, 0777);

            //file_put_contents($localFile, file_get_contents($remoteFile));
            $foo = getRemoteFeed($remoteFile, $localFile);
            

           
emptyTable('VOUCHER_CODES');
$localFile = fopen("$localFile","r");
$row = 0;
while (($data = fgetcsv($localFile, 0, ',', '"', '\n')) !== FALSE) {
    
      // echo $num = count($data);
       
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

$userId         = 'aw'.$data[2];
$vCode          = $data[3];
$vDescription   = htmlentities($data[4]);
$vTerms         = htmlentities($data[5]);
$vUrl           = $data[6];
$vType          = $data[7];
$startDate      = $data[8];
$endDate        = $data[9];
$vRegion        = $data[10];
$exclusive      = ($data[12]=='No')?'N':'Y';

$sql .= "$vID, '$userId', '$vCode', '$vDescription', '$vTerms', '$vUrl', '$vType', '$startDate', '$endDate', '$vRegion', '$exclusive'";

        
        $sql .= ')';
                    
        echo "\n";
        $res = executeQuery($sql);
        echo $sql;
        
    }
     $row++;
}

fclose($localFile);

$body = "The Affiliate Window voucher code feed ran successfully";
sendMail('pmn@outlook.com', 'peter@lowprices4u.co.uk', 'Affiliate Window Voucher Code Feed', $body);
