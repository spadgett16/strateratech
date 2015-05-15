<?php
//lighten a color
if(theme_get_setting('theme_color_scheme') == '' ){
	$color = '#EB7C12';
}
else{
	$color = '#'.theme_get_setting('theme_color_scheme');	
}


if(theme_get_setting('link_color') == '' ){
	$linkColor = $color;
}
else{
	$linkColor = '#'.theme_get_setting('link_color');	
}

if(theme_get_setting('footer_link_color') == '' ){
	$footerlinkColor = $color;
}
else{
	$footerlinkColor = '#'.theme_get_setting('footer_link_color');	
}

 //brighter
$unltraLightColor = colorInterpolate($color, 0.4);
$lighterColor = colorInterpolate($color, 0.75);
$lightestColor = colorInterpolate($color, 0.6);
$extremeLight = colorInterpolate($color, 0.48);

//darken a color
$darkerColor = colorInterpolate($color, -0.9);
$darkestColor = colorInterpolate($color, -.99);
/*
print 'Lighter: ' . $lighterColor . '<br>';

print 'Original: ' . $color . '<br>';

print 'Darker: ' . $darkerColor . '<br>';
*/


 
?>



    <style type="text/css">
    <?php if((theme_get_setting('google_enable') == 1)) { get_googlefont_style_code() ;  } ?>
    
    /* Body background scheme goes here -----------*/
    <?php if(theme_get_setting('custom_bg_attribute') == '') {?>
    body{
    	background: url(<?php print base_path() . path_to_theme() . '/img/bg/' . theme_get_setting('bg_scheme')?>) repeat;
    }
    <?php } else{ ?>
    
    body{
    	background: <?php print theme_get_setting('custom_bg_attribute') ?>;
    }   
    <?php }  ?>
    
    /** custom typo */
   	body{
   		font-size: <?php print theme_get_setting('site_font_size') ?>px;
   		
   	}
  	
    .sf-menu a{
    	font-size: <?php print theme_get_setting('menu_font_size') ?>px
    }
	
	<?php if((theme_get_setting('site_font_family') != '') &&  (theme_get_setting('google_enable') == 0)) {?>
	body.icompany{
		font-family: <?php print theme_get_setting('site_font_family') ?>
	}
	<?php } ?>
    
    /* Theme color scheme goes here ----------- */
   
    a, a:hover, .color:hover, ul.menu li a:hover , #footer-bar a:hover, #footer-region a, .btn.btn-plain {
   		color: <?php print $linkColor ; ?> ;
   		text-decoration: none;
    }
    
    
    .color, .dropcap{
   		color: <?php print $color ; ?> ;
   		text-decoration: none;
    }
    
    #header_left .inner{
    	margin-top: <?php print theme_get_setting('logo_top_margin') ?>px;
    }
    
    .main_menu_container{
    	margin-top: <?php print theme_get_setting('menu_top_margin') ?>px;
    }
    
    
	@media screen and (max-width: 767px){
		 .main_menu_container{
		 	margin-top: 25px;
		 }
	}
   
    .theme-scheme, .btn.btn-theme, .btn-theme:focus, 
    .btn-theme:active,  .btn.btn-theme:hover, 
    .comment .new, .marker,  #title-region .inner,  .dropdown-menu .active > a, 
    .dropdown-menu .active > a:hover, 
    .dropdown-menu li > a:hover,
	.dropdown-menu li > a:focus,
	.dropdown-submenu:hover > a, 
	.jcarousel-next-vertical, .jcarousel-prev-vertical, 
	#highlighted_2, .round-number, .btn.btn-plain, #bottom-region, .btn.node-add-to-cart, 
	.btn.node-add-to-cart:hover, .node-product .product-title   {
		background-color: <?php print $color ; ?>  ;
    }
    
    #bottom-region, .node-product .product-images .field-type-image {
    	border-color: <?php print $lighterColor ; ?> ;
    }
    
    .product-title-border{
    	background: <?php print $lightestColor ; ?> ;
    }
 
    
    #bottom-region a{
    	color: <?php print $unltraLightColor ?>
    }
 
    .theme-border, .sf-menu li.sfHover ul, #page-wrapper,  th, #forum .table th, .border-color, .banner, #footer-bar 
    {
		border-color: <?php print $color ; ?> ;
	}
	
	.region-highlighted-2, #bottomShadow{
		border-color: <?php print $lighterColor ?>
	}
	
	#tabs-region .tab-content{
		border-left:2px solid <?php print $color ; ?>;
	}
	
	#tabs-region .tabs-left > .nav-tabs > li.active{
		border-top:1px solid <?php print $darkerColor; ?>;
		border-left:1px solid <?php print $darkerColor ; ?>;
		border-bottom:1px solid <?php print $darkerColor ; ?>;
	}
	
	#tabs-region .tabs-left > .nav-tabs > li.active > a, #tabs-region .tabs-left > .nav-tabs > li.active > a:hover {		
		border-top:1px solid <?php print $extremeLight; ?>;
		border-left:1px solid <?php print $extremeLight ; ?>;
		border-bottom:1px solid <?php print $extremeLight ; ?>;
		
		border-right:none;
		background: <?php print $color ?>; /* Old browsers */
		/* IE9 SVG, needs conditional override of 'filter' to 'none' */
		background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijc1JSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
		background: -moz-linear-gradient(top,  <?php print $lighterColor ?> 0%, <?php print $color ?> 75%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php print $lighterColor ?>), color-stop(75%,<?php print $color ?>)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  <?php print $lighterColor ?> 0%,<?php print $color ?> 75%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  <?php print $lighterColor ?> 0%,<?php print $color ?> 75%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  <?php print $lighterColor ?> 0%,<?php print $color ?> 75%); /* IE10+ */
		background: linear-gradient(to bottom,  <?php print $lighterColor ?> 0%,<?php print $color ?> 75%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#000000',GradientType=0 ); /* IE6-8 */

	}
	
	.shadow-transition:hover, .btn-theme:hover,   .btn.node-add-to-cart:hover{
	  -webkit-box-shadow: 0px 0px 9px rgba(<?php print hex2RGB($color, true) ?>, 0.8);
	  -moz-box-shadow:    0px 0px 9px rgba(<?php print hex2RGB($color, true) ?>, 0.8);
	  box-shadow:         0px 0px 9px rgba(<?php print hex2RGB($color, true) ?>, 0.8);
	}

    
    #topBar .dark-bg{
    	background: #<?php print theme_get_setting('topbar_bg') ?>;
    }
    
    /*bootstrap line 1194 */
	textarea:focus,
	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="datetime"]:focus,
	input[type="datetime-local"]:focus,
	input[type="date"]:focus,
	input[type="month"]:focus,
	input[type="time"]:focus,
	input[type="week"]:focus,
	input[type="number"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="color"]:focus,
	.uneditable-input:focus {
	  border-color: rgba(<?php print hex2RGB(theme_get_setting('theme_color_scheme'), true) ?>, 0.8);
	  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(<?php print hex2RGB($color, true) ?>, 0.6);
	  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(<?php print hex2RGB($color, true) ?>, 0.6);
	  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(<?php print hex2RGB($color, true) ?>, 0.6);
	}
	
	.bar .foreground, .node-product .product-title{
		background: <?php print $color?>; /* Old browsers */
		/* IE9 SVG, needs conditional override of 'filter' to 'none' */
		background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ViN2MxMiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlZjk2NDEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
		background: -moz-linear-gradient(top,  <?php print $lightestColor ?> 0%, <?php print $color?> 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php print $lighterColor ?>), color-stop(100%,<?php print $color?>)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  <?php print $lightestColor ?> 0%,<?php print $color?> 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  <?php print $lightestColor ?> 0%,<?php print $color?> 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  <?php print $lightestColor ?> 0%,<?php print $color?> 100%); /* IE10+ */
		background: linear-gradient(to bottom,  <?php print $lightestColor ?> 0%,<?php print $color?> 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php print $lightestColor ?>', endColorstr='<?php print $color?>',GradientType=0 ); /* IE6-8 */
	}
	
	#feedback-link:hover{
		background: <?php print $color ?>; 
	}
	
	.poll .bar{
		box-shadow: 0 1px 2px rgba(100,100,100,.2) inset;
		background: #eee;
	}
	
	 
	#footer-region a, #footer-region a:visited{
		color:  <?php print $footerlinkColor ?>;
	}
	
	
	#footer-region .btn-theme, #footer-region .btn-theme:visited{
    	color: #fff;
    }
    

    </style>