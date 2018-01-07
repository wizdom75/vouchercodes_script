<?php
###################################################################################################
###################################################################################################
// Peter Ncube PHP Price Comparison Script Version 1.0 Script
###################################################################################################
###################################################################################################

		session_start();

//*************************************************************************************************

		$visitorId		= doCleanInput($_SESSION["visitorId"]);
		$visitorEmail		= doCleanInput($_SESSION["visitorEmail"]);

//*************************************************************************************************
/*
		$lang		= $_SESSION["lang"];
		$langFolder = $_SESSION["langFolder"];
	
		if ( $lang == "" || $langFolder == "" )
		{
			$lang					= SCRIPT_DEFAULT_LANGUAGE;
			$langFolder				= getColumn("LANGUAGE", $lang, "FOLDER");
			$_SESSION['lang']			= $lang;
			$_SESSION['langFolder']			= $langFolder;
		}
		
//*************************************************************************************************

		// Remove any character except alphabets
		//$langFolder = eregi_replace("([^A-Z])*", "", $langFolder);
                $langFolder = preg_replace("[}{}#~'/.;:,]", '', $langFolder);

//*************************************************************************************************

//		echo "<font size=1 face=verdana>".$lang."==".$langFolder."</font><br>";
		
		$langFileImp = PATH."lang/".$langFolder."/constants.php";
		if ( file_exists($langFileImp) )
			require ($langFileImp);
		else
			die ("<font size=2 color=red>Language file [lang/".$langFolder."/constants.php] not found. Cannot continue.<br><br>Administrator, please check if you have selected correct language as default and language file exists on server.</font>");

		
		$langFileImp = PATH."lang/".$langFolder."/constants-commons.php";
		if ( file_exists($langFileImp) )
			require ($langFileImp);
		else
			die ("<font size=2 color=red>Language file [lang/".$langFolder."/constants-commons.php] not found. Cannot continue.<br><br>Administrator, please check if you have selected correct language as default and language file exists on server.</font>");


		$langFileImp = PATH."lang/".$langFolder."/constants-messages.php";
		if ( file_exists($langFileImp) )
			require ($langFileImp);
		else
			die ("<font size=2 color=red>Language file [lang/".$langFolder."/constants-messages.php] not found. Cannot continue.<br><br>Administrator, please check if you have selected correct language as default and language file exists on server.</font>");


		$langFileImp = PATH."lang/".$langFolder."/constants-info.php";
		if ( file_exists($langFileImp) )
			require ($langFileImp);
		else
			die ("<font size=2 color=red>Language file [lang/".$langFolder."/constants-info.php] not found. Cannot continue.<br><br>Administrator, please check if you have selected correct language as default and language file exists on server.</font>");

//*************************************************************************************************
		
		$currentFilename = $_SERVER["PHP_SELF"];

		if ( $currentFilename == '' ) 
			$currentFilename = $_SERVER["SCRIPT_FILENAME"]!=""?$_SERVER["SCRIPT_FILENAME"]:$_SERVER["SCRIPT_NAME"];

		$langFilepath	= PATH."lang/$langFolder/".($langFilename==''?basename($currentFilename):$langFilename);
		if ( file_exists($langFilepath) )
			require ($langFilepath);

		// Option languange include
		if ( $langFilename2 != '' )
		{
			$langFilepath	= PATH."lang/$langFolder/".$langFilename2;
			if ( file_exists($langFilepath) )
				require ($langFilepath);
		}

//*************************************************************************************************

		$currencySymbol = $_SESSION["currencySymbol"];
		$currencyRate	= $_SESSION["currencyRate"]*($_GET["exvat"]==""?1:0.825);
		
		if ( $currencySymbol=="" || $currencyRate=="" )
		{
			$currencySymbol				= SCRIPT_DOLLAR;
			$currencyRate				= 1*($_GET["exvat"]==""?1:0.825);
			$_SESSION['currencySymbol']	= $currencySymbol;
			$_SESSION['currencyRate']	= $currencyRate;
		}

//*************************************************************************************************

		// Security Checks
		$_GET['t']		= (int)$_GET['t'];
		$_GET['x']		= (int)$_GET['x'];

		$_GET['so']		= doStripString($_GET['so']);
		$_GET['sp']		= doStripString($_GET['sp']);
		$_GET['sk']		= doStripString($_GET['sk']);
		
		$_GET['info']	= doStripString($_GET['info']);
*/
//*************************************************************************************************

		$info 			= '';
		if ( $_GET["info"] != '' )
			//$info = "<font class='info'>".getInfo($_GET["info"])."</font><br><br>";
$info = '<div class="info">'.getInfo($_GET["info"]).'</div>';
//*************************************************************************************************

		$IP_ADDRESS		= $_SERVER["REMOTE_ADDR"];

//*************************************************************************************************

		$visitorProdsVisited	= is_array($_SESSION['visitorProdsVisited']) ? $_SESSION['visitorProdsVisited'] : array();
		$visitorLastSearches	= is_array($_SESSION['visitorLastSearches']) ? $_SESSION['visitorLastSearches'] : array();

//*************************************************************************************************

		if ( DO_SHUTDOWN_WEBSITE == 1 && !stristr($_SERVER['PHP_SELF'], '.js.php') )
		{
			$langFilepath	= PATH."lang/$langFolder/shutdown.php";
			if ( file_exists($langFilepath) )
				require ($langFilepath);

			include PATH.'shutdown.php';
			die;
		}

//*************************************************************************************************
?>