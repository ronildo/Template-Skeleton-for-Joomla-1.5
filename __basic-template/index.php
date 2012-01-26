<?php
	defined('_JEXEC') or die('Restricted access');
	include_once (dirname(__FILE__).DS.'/vars.php');
	echo '<?xml version="1.0" encoding="utf-8"?'.'>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="<?php echo css_browser_selector() ?>">
<head>
<?php
	$user =& JFactory::getUser();
	if ($user->get('guest') == 1) {
		$headerstuff = $this->getHeadData();
	$headerstuff['scripts'] = array();
	$this->setHeadData($headerstuff); }
?>
<jdoc:include type="head" />

	<link href="<?php echo $urlCss; ?>/template.css" rel="stylesheet" type="text/css" />
	<!--[if lte IE 6]>
		<link href="<?php echo $urlCss; ?>/ieonly.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo $urlJs; ?>/DD_belatedPNG_0.0.7a-min.js"></script>
		<script>
		  DD_belatedPNG.fix('li, img, div, p, h1');
		</script>
	<![endif]-->
	<!--[if IE 7]>
		<link href="<?php echo $urlCss; ?>/ie7only.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!-- Hide the little toolthing Internet Explorer pops when you hover over an image, very anoying -->
	<meta http-equiv="imagetoolbar" content="false" />
</head>
<body>
	<div class="all">
		
	</div>
</body>
</html>