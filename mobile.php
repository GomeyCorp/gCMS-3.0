<?php
//   _____
//  / ____|
//  | |  __  ___  _ __ ___   ___ _   _
//  | | |_ |/ _ \| '_ ` _ \ / _ \ | | |
//  | |__| | (_) | | | | | |  __/ |_| |
//  \_____|\___/|_| |_| |_|\___|\__, |
//                              __/ |
//                             |___/
//
//	Created for Gomey


// So it begins
ini_set('display_errors','On');
ini_set('error_reporting',E_ALL);

// RainTPL
include "rain.tpl.class.php";
raintpl::configure("base_url", null );
raintpl::configure("tpl_dir", "assets/rtpl/tpl/" );
raintpl::configure("cache_dir", "assets/rtpl/tmp/" );
$tpl = new RainTPL;

//Detect Mobile
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {

} else {
  header('Location: index.php');
}

// Render page
$tpl->draw('mobile');

?>
