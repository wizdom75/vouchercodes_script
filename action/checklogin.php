<?php  
###################################################################################################
###################################################################################################
// Peter Ncube PHP Price Comparison Script Version 1.0 Script
###################################################################################################
###################################################################################################
require('../path.php');
require FILEPATH.'includes/config.php';

//*************************************************************************************************

		require (FILEPATH."session.php");

//*************************************************************************************************

		$email			= $_POST["email"];
		$password		= $_POST["password"];
		$muserId		= $_POST["muserId"];
		$productId		= $_POST["productId"];

//*************************************************************************************************

		$return			= $_POST["return_url"];
		if ( $return == '' )
			$return = $_GET["return_url"];

//*************************************************************************************************

		if ( $email != "" && $password != "" )
		{
			$result		= executeQuery("SELECT * FROM ".PREFIX."VISITOR WHERE EMAIL = '".$email."'");

			// Get from Database
			if ( $rows = getRow($result) )
			{
				$userId		= $rows['USERID'];

				$result1	= executeQuery("SELECT * FROM ".PREFIX."VISITORINFO WHERE USERID = '".$userId."'");
				$rows1		= getRow($result1);

				// Check if user is Active
				if( $rows["ISVALID"] == "Y" )
				{
					// Get Email Verification
					if ( $rows["VERIFICATION_CODE"] == "" || !(VISITOR_EMAIL_VERIFICATION) )
					{
						// Match Password
						if ( $rows["PASSWORD"] == encrypt($password) )
						{
							$visitorName	= $rows1["NAME"];
							$visitorEmail	= $email;
							$lastLogin		= $rows["LASTLOGIN"];
							$visitorId		= $userId;

							executeUpdate("UPDATE ".PREFIX."VISITOR SET LASTLOGIN= '".getTimezoneTime()."' WHERE USERID='$userId'");
							
							session_start();
							$_SESSION['visitorId']			= $visitorId;
							$_SESSION['visitorName']		= $visitorName;
							$_SESSION['visitorEmail']		= $visitorEmail;
							$_SESSION['visitorLastLogin']	= $lastLogin;

								if ( $return != '' )
									header("Location: ".$return."");
								else
									header("Location: ".SITE_URL."member/myaccount");

						}
						else
							memberProcessLoginMsg(14);
					}
					else
						memberProcessLoginMsg(213);
				}
				else
					memberProcessLoginMsg(15);
			}
			else
				memberProcessLoginMsg(5);
		}
		else
			memberProcessLoginMsg(1);

//*************************************************************************************************

		function memberProcessLoginMsg($msg)
		{
			global $isAjax, $return;

			if ( $isAjax == 1 )
				echo getInfo($msg);
			else
				header("Location: ".SITE_URL."member/login?info=".$msg."&return=".urlencode($return));
		}

//*************************************************************************************************
?>