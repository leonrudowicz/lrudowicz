<?php
	session_start();

  $lc = "";
  if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
      $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

  if($lc == "de"){
      $_SESSION['lang'] = "de";
  }
  else{
      $_SESSION['lang'] = "en";
  }

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "en";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "de")
			$_SESSION['lang'] = "de";
	}

	require_once "lang/" . $_SESSION['lang'] . ".php";
?>
