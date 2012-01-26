<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

//This librarie detects the Engine, Browser and OS
include_once (dirname(__FILE__).DS.'/libraries/css_browser_selector.php');

$urlTemplate = $this->baseurl."/templates/".$this->template;
$urlCss = $this->baseurl."/templates/".$this->template."/css";
$urlJs = $this->baseurl."/templates/".$this->template."/javascript";

$menu = & JSite::getMenu();
if ($menu->getActive() == $menu->getDefault())
	$home = "home";


?>
