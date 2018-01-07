<?php
require('./path.php');
require FILEPATH.'includes/config.php';
include (FILEPATH."session.php");


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//***********************************************************************************************************

    define('CLICKTHROUGH_RECORDED_AFTER',	1);

//***********************************************************************************************************

$offerId	= doCleanInput($_GET["vcId"]);
$userId     = doCleanInput($_GET['userId']);

if(strlen($_GET["vcId"])>0){
//***********************************************************************************************************

    if ( $offerId == "" ){
           header("Location:".SITE_URL."?info=".urlencode("Offer ID is empty.<br>Cannot redirect to the product page".strlen($offerId)));


    }else{
                    $where = "ID = '$offerId'";

            //$redirect = getColumn("CLICKTHROUGHS", $urlId, "URL");
            $sql = "SELECT ID, URL, USERID FROM ".PREFIX."VOUCHER_CODES WHERE ".$where;

            $result = executeQuery($sql);
            if ( $row = getRow($result) )
            {
                $type = 'VOUCHER';
                    if ( validateClickthrough($row['ID'], $_SERVER["REMOTE_ADDR"]) )
                    {
                            // Spiders dont have referer
                            if ( $_SERVER['HTTP_REFERER'] != '' )
                            {
                                    // Merchant Bidding
                                    if ( IS_MERCHANTBID_INSTALLED != 0 ) 
                                            include(PATH.'redirect_bid.php');

                                    $clickthroughId = getNextId('CLICKS');
                                     $sql2 = "INSERT INTO ".PREFIX."CLICKS (ID, USERID, VOUCHER_ID, REDIRECT_TIME, IP_ADDRESS, BROWSER, TYPE) VALUES (".$clickthroughId.", '".$row['USERID']."', '".$row['ID']."', '".getTimezoneTime()."', '".$_SERVER["REMOTE_ADDR"]."', '".$_SERVER["HTTP_USER_AGENT"]."','".$type."')";
                                    
                                    $res = executeQuery($sql2);

                                    ///////////////////////////////////////////////////////////////////////////////
                                    // ROI Module
                                    if ( ENABLE_ROI_MODULE == 1 && IS_MERCHANTBID_INSTALLED == 0 ) // if IS_MERCHANTBID_INSTALLED is 1 
                                    {															   // then it is set in redirect_bid.php
                                            if ( $clickthroughId != '' )
                                                    setcookie('clickthroughId', $clickthroughId);
                                    }
                                    ///////////////////////////////////////////////////////////////////////////////
                            }
                    }

                    if ($row["URL"] != "" )
                            doRedirect("".$row["URL"]);


                    else
                    {
                            echo "Link to voucher code description not found [Voucher ID ".$offerId."]";
                            die;
                    }
            }

            else
            {
                    echo "Voucher record not found in database [Voucher ID ".$offerId."]";
                    die;
            }
    }
}else{
//***********************************************************************************************************

    if ( $userId == "" ){
            header("Location:".SITE_URL."?info=".urlencode("User ID is empty.<br>Cannot redirect to the product page"));

    }else{

                    $where = "USERID = '$userId'";

            //$redirect = getColumn("CLICKTHROUGHS", $urlId, "URL");
            $sql = "SELECT USERID, DEFAULT_URL FROM ".PREFIX."USERINFO WHERE ".$where;
$type = 'DEFAULT';
            $result = executeQuery($sql);
            if ( $row = getRow($result) ){
                    if ( validateClickthrough($row['USERID'], $_SERVER["REMOTE_ADDR"]) ){
                            // Spiders dont have referer
                            if ( $_SERVER['HTTP_REFERER'] != '' ){
                                    // Merchant Bidding

                                    $clickthroughId = getNextId('CLICKS');
                                    executeQuery("INSERT INTO ".PREFIX."CLICKS (ID, USERID, VOUCHER_ID, REDIRECT_TIME, IP_ADDRESS, BROWSER, TYPE) VALUES (".$clickthroughId.", '".$row['USERID']."', '------', '".getTimezoneTime()."', '".$_SERVER["REMOTE_ADDR"]."', '".$_SERVER["HTTP_USER_AGENT"]."','".$type."')");

                            }
                    }

                    if ($row["DEFAULT_URL"] != "" )
                            doRedirect("".$row["DEFAULT_URL"]);

                    else
                    {
                            echo "Link to user description not found [User ID ".$userId."]";
                            die;
                    }
            }

            else
            {
                    echo "User record not found in database [User ID ".$userId."]";
                    die;
            }
    }    
}
//***********************************************************************************************************

    function doRedirect($location)
    {
            define('DEFAULT_CHARSET', 'iso-8859-1');

            if ( $location != "" )
            {
                    echo "
                            <html>

                                    <head>
                                            <title>Redirecting...</title>
                                            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=". DEFAULT_CHARSET ."\">
                                    </head>

                                    <body onLoad=\"location.href='".$location."'\">

                                            <table width='100%' border='0' cellpadding='0' cellspacing='0' align='center'>
                                                    <tr>
                                                            <td align='center'>
                                                                            <table cellpadding='0' cellspacing='0' width='400' align='center'>
                                                                                    <tr>
                                                                                    <td height='150px'></td>
                                                                                    </tr>

                                                                                    <tr>

                                                                                    <td bgcolor='#ffffff' align='center'><img src=' /img/redirecting.gif ' alt=' Redirecting ' /></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                            <td align='center'><font size='2' face='verdana'>Please Wait While We Redirect You...<br>If not redirected in 5 seconds<br><a href='".$location."' rel='nofollow'>Click Here</a></font></td>
                                                                                    </tr>
                                                                            </table>
                                                            </td>
                                                    </tr>
                                            </table>

                                    </body>

                            </html>
                                    ";
            }
            else
                    echo "<center>Empty Location. Cannot redirect to empty location</center>";

    } // doRedirect()

//***********************************************************************************************************

    function validateClickthrough($userProductId, $ipAddress)
    {
            $result = executeQuery("SELECT ID FROM ".PREFIX."CLICKS WHERE VOUCHER_ID = '".$userProductId."' AND IP_ADDRESS = '".$ipAddress."' AND DATE_ADD(REDIRECT_TIME, INTERVAL ".CLICKTHROUGH_RECORDED_AFTER." HOUR) >= '".getTimezoneTime()."'");

            if ( $row = getRow($result) )
                    return false;
            else
                    return true;
    }

//***********************************************************************************************************
?>
