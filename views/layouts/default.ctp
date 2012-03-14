<?php
/* SVN FILE: $Id: default.ctp 7690 2008-10-02 04:56:53Z nate $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2008, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2008, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.cake.console.libs.templates.skel.views.layouts
 * @since			CakePHP(tm) v 0.10.0.1076
 * @version			$Revision: 7690 $
 * @modifiedby		$LastChangedBy: nate $
 * @lastmodified	$Date: 2008-10-02 00:56:53 -0400 (Thu, 02 Oct 2008) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>Temple Beth Tikvah: <?php echo $title_for_layout; ?></title>
  <meta name="description" content="<?php 
  	if (isset($metaDescription)) { 
  		echo $metaDescription;
  	} else {
  		?>The Temple Beth Tikvah of Fullerton synogogue website for updates from the community and board, including monthly and weekly messages from the Rabbi, Cantor, ECLC and Director on all the news in the Orange County jewish community.<?php 
  	} ?>" />
  <meta name="keywords" content="<?php 
  	if (isset($metaKeywords)) { 
  		echo $metaKeywords;  
  	} else {
  		?>temple, shul, synagogue, orange county, oc, jewish, judaism, hebrew, fullerton, religious school<?php
  	} ?>" />
	<?php
		echo $html->meta('icon');

		//echo $html->css('cake.generic');
	    echo $html->css(array(
	    	'defaults.css',
	    	'cake.transition',
	    	'style'
	    ));
	    echo $html->script(array(
	    	'jquery.js',
	    	'script'
	    ));

		echo $scripts_for_layout;
	?>
</head>
<body>
<div id="container">
	<div id="header">
		<h1><?php echo $html->link('Temple Beth Tikvah', '/'); ?></h1>
		<?php // echo $html->link('Map Us!',array('controller'=>'pages','action'=>'map'),array('id'=>'header-mapUs')) ?>
		<p id="header-address">1600 N. Acacia Avenue, Orange County, Fullerton, CA 92831</p>
		<p id="header-number">Temple Office: (714) 871-3535 &nbsp; &nbsp; Fax: (714) 871-4051<br>Religious School: (714) 871-3570 &nbsp; ECLC/Preschool: (714) 871-9555 </p>
		
		
		<?php echo $this->element('navigation'); ?>
	</div>
	<div id="container-body">
		<div id="content">

	        <?php echo $session->flash(); ?>

        	<?php echo $content_for_layout; ?>

		</div>
    </div>
	<div id="footer">
		&copy; Copyright 1998-<?php echo date('Y'); ?> - 
		<?php echo $html->link('Home',array('controller'=>'pages','action'=>'home')) ?> - 
		<?php echo $html->link('Contact Us',array('controller'=>'pages','action'=>'home')) ?> - 
		<?php echo $html->link('Admin',array('controller'=>'messages','action'=>'index','admin'=>true)) ?> - 
		Designed by <a href="http://www.deansofer.com">Dean</a> &amp; <a href="mailto:fuhsdrmcaptin05@gmail.com">Eric</a>
	</div>
</div>
<?php echo $this->element('google_analytics',array('idKey'=>'UA-7440485-1')); ?>
</body>
</html>