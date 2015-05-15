<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    
    <?php print $styles ?>
    <!-- GOOGLE FONTS CSS --> 
    <?php if(theme_get_setting('google_enable') == 1){ ?>
    <link href='<?php print get_google_css_string() ?>' rel='stylesheet' type='text/css'/> 
    <?php } ?>
    
    <?php  include_once drupal_get_path('theme', 'icompany') . "/includes/css_include.php"; ?> 
    <?php print $scripts ?>


</head>
<body class="<?php print $classes; ?> "  <?php print $attributes;?>>  
  <div id="bodyinner" class="container">
	<div id="structure" class="row">
	   <div style="font-size:18px; margin-top:150px; display:block;" class="  offset1"> 
	   	<img class="pull-left" style="margin-right: 10px;" src="<?php print base_path() . path_to_theme() ?>/img/maintenance.png" alt="" />
	   	<?php if ($title): ?>
	   		<h2><?php print $title ?></h2>
	   		<?php endif; ?><?php print $content ?>
	   </div>
	</div>
   </div>          
</body>
</html>       
       
       
       