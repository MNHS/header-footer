<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php //include("/var/www/shared/include/mhs-navigation-scripts.inc"); ?>
</head>
<body<?php print $attributes;?>>
<?php //include("/var/www/shared/include/mhs-secondary-navigation.inc"); ?>
<!-- using shared -->
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
<div id="global-wrapper">
  <?php print $page_top; ?>
<?php print $page; ?>
  <?php print $page_bottom; ?>
</div>
</body>
</html>