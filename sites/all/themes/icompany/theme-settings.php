<?php

//load google fonts array
include_once( drupal_get_path('theme', 'icompany') . '/includes/google-fonts.php');
    
// make array to pe passed in theme settings form
function get_google_font_array() {

	$google_array = get_google_array();
 	reset($google_array);
	$font_array = array();
	while (list($key,$val) = each($google_array)) {
   		$font_array = array_merge($font_array, array($val['family'] => $val['family']));	
	}

	return $font_array;
}


function icompany_form_system_theme_settings_alter(&$form, &$form_state) {


	$form['theme_settings_tab'] = array(
	    '#type' => 'vertical_tabs',
	    '#weight' => -2,
	); 
	
		// TYPOGRAPHY FIELDSET 
	$form['theme_settings_tab']['typo_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Typography Settings'),
	  '#description' => t('Typography (fonts) settings can be defined here '),
	  '#weight' => -3,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	);

	
		
	$form['theme_settings_tab']['typo_settings']['menu_font_size'] = array(
	    '#type' => 'select',
	    '#title' => t('Menu Font Size'),
     	'#description' => t('Font Size to be used in main menu'),
	    '#default_value' => theme_get_setting('menu_font_size'),
	    '#options' => array(
	    '11' => t('11'),
	    '12' => t('12'),
	    '13' => t('13'),
	    '14' => t('14'),
	    '15' => t('15'),
		'16' => t('16'),
		'17' => t('17'),
		'18' => t('18 (default)'),
		'19' => t('19'),
		'20' => t('20'),
		'21' => t('21'),
		'22' => t('22'),	
		'23' => t('23'),	
		'24' => t('24'),	
		),
	);	
	
	$form['theme_settings_tab']['typo_settings']['site_font_size'] = array(
	    '#type' => 'select',
	    '#title' => t('Sitewide text\'s font size'),
     	'#description' => t('Font Size to be used site wide'),
	    '#default_value' => theme_get_setting('site_font_size'),
	    '#options' => array(
	    '10' => t('10'),
	    '11' => t('11'),
	    '12' => t('12 (default)'),
	    '13' => t('13'),
	    '14' => t('14'),
	    '15' => t('15'),
		'16' => t('16'),
		'17' => t('17'),
		'18' => t('18'),
		'19' => t('19'),
		'20' => t('20'),
		),
	);
	
	$form['theme_settings_tab']['typo_settings']['site_font_family'] = array(
	    '#type' => 'textfield',
	    '#title' => t('Sitewide text\'s font family'),
	    '#size' => 60,
	    '#maxlength' => 228,
	    '#required' => FALSE,
     	'#description' => t('Font family to be used site wide. If you want to use this, you have to disable google fonts in google font setting tab'),
	    '#default_value' => theme_get_setting('site_font_family'),
	);
	
	// Google fonts setting	
	$form['theme_settings_tab']['google_fonts'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Google Font settings'),
	  '#description' => t('If cufon is enabled, it will override google font for heading and menu elements. <br/>'),
	  '#weight' => -2,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'google_fonts_tab',
	);
		
	$form['theme_settings_tab']['google_fonts']['google_enable'] = array(
		'#type' => 'checkbox',
		'#title' => t('Enable Google fonts'),
		'#default_value' => theme_get_setting('google_enable'),
	);
		
	$form['theme_settings_tab']['google_fonts']['heading_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for Heading elements'),
		 '#description' => t('This font will be used for site wide heading elements such as H1, H2, H3, H4, H5, H6. <strong>Note:</strong> if cufon is enabled, this will be overridden by cufon. '),
		'#default_value' => theme_get_setting('heading_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['heading_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for heading element. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('heading_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);
	
	$form['theme_settings_tab']['google_fonts']['menu_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for Main Menu'),
		 '#description' => t('This font will be used for Main Menu. <strong>Note:</strong> if cufon is enabled, this will be overridden by cufon. '),
		'#default_value' => theme_get_setting('menu_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['menu_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for menu element. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('menu_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);
	
	$form['theme_settings_tab']['google_fonts']['slider_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for Slider'),
		 '#description' => t('This font will be used in Slider captions.  '),
		'#default_value' => theme_get_setting('slider_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['slider_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for slider element. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('slider_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);	
	
	$form['theme_settings_tab']['google_fonts']['site_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for site wide texts'),
		 '#description' => t('This font will be used for site wide texts. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('site_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['site_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for sitewide text. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'.'),
		'#default_value' => theme_get_setting('site_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);

	$form['theme_settings_tab']['google_fonts']['quote_fonts_google'] = array(
		'#type' => 'select',
		'#title' => t('Google Font for \'blockquote\' and \'quote\' class'),
		 '#description' => t('This font will be used in blockquote tags and element class \'quote\''),
		'#default_value' => theme_get_setting('quote_fonts_google'),
		'#options' => get_google_font_array(),
	);
	
	$form['theme_settings_tab']['google_fonts']['quote_fonts_google_weight'] = array(
		'#type' => 'textfield',
		'#title' => t('Font-wieght for quote text. '),
	    '#description' => t('Make sure selected font supports this font-weight. Visit http://www.google.com/webfonts/ to check. Default is \'normal\'. '),
		'#default_value' => theme_get_setting('quote_fonts_google_weight'),
		'#size' => 6,
		'#maxlength' => 8,
		
	);
	
	// Background setting
	$form['theme_settings_tab']['custom_bg_colors'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Color Scheme Settings'),
	  '#weight' => 3,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);	
	
	$form['theme_settings_tab']['custom_bg_colors']['bg_scheme'] = array(
		'#type' => 'select',
		'#title' => t('Choose a background color scheme. '),
		 '#description' => t('choose a background scheme for background of your website. <strong>Note:</strong> if you want to use custom setting, use <em>Custom Background Setting</em> field below. '),
		'#default_value' => theme_get_setting('bg_scheme'),
		'#options' => array(
		'stripe_default.png' => 'Default stripes',
		'stripebig.png' => 'Big Stripes',
		'tartan1.png' => 'Tartan',
		'brackets.png' => 'Brackets',
		'pixels.png' => 'Pixels',
		'tiny_squares.png' => 'Tiny Squares',
		),
	);
	
	$form['theme_settings_tab']['custom_bg_colors']['custom_bg_attribute'] = array(
		'#type' => 'textfield',
		'#title' => t('Define custom CSS attribute for <em>body</em> element'),
	    '#description' => t('In this field, you can define your own css property for theme background. You can also add path to your own background image. For example: <em>url(/sites/all/themes/bg/stripes_default.png) repeat #fff</em>. Do not include ending semicolon \';\'. This will override previously defined background setting. <br><br>You should have basic knowledge of CSS background properties and how to use them in one line. A very nice and brief introduction is <a href="http://www.cssbasics.com/chapter_12_css_backgrounds.html">here</a>. If you dont want to use this field, leave it blank. '),
		'#default_value' => theme_get_setting('custom_bg_attribute'),
		'#maxlength' => 2000,		
	);	
	
	
	$form['theme_settings_tab']['custom_bg_colors']['theme_color_scheme'] = array(
		'#type' => 'textfield',
		'#title' => t('Color scheme of your entire theme'),
	    '#description' => t('Enter six character hexadecimal color code without preceeding \'#\' . Default is \'5f839c\'. This is main color scheme of your theme. You can choose/play with colors on demo website of this theme then enter your desired color code here. <br><br><strong>Warning: </strong>do not make this field empty. In case you are lost, add default color (5f839c) to this field.  '),
		'#default_value' => theme_get_setting('theme_color_scheme'),
		'#size' => 6,
		'#maxlength' => 6,
		
	);
	

	$form['theme_settings_tab']['custom_bg_colors']['link_color'] = array(
		'#type' => 'textfield',
		'#title' => t('Sitewide Link color. Note: please read full description below'),
	    '#description' => t('By default, your site color scheme will be used as link color. It is recommended that you leave this field blank unless you are using site color scheme that is too dark for links to appear distinct from texts. Enter six character hexadecimal color code without preceeding \'#\'.'),
		'#default_value' => theme_get_setting('link_color'),
		'#size' => 6,
		'#maxlength' => 6,
		
	);	
	
	$form['theme_settings_tab']['custom_bg_colors']['footer_link_color'] = array(
		'#type' => 'textfield',
		'#title' => t('Footer link color. Note: please read full description below'),
	    '#description' => t('By default, your site color scheme will be used as link color. It is recommended that you leave this field blank unless you are using site color scheme that is too dark for links to appear distinct from texts. Enter six character hexadecimal color code without preceeding \'#\'.'),
		'#default_value' => theme_get_setting('footer_link_color'),
		'#size' => 6,
		'#maxlength' => 6,
		
	);	

	// Tabs		
	$form['theme_settings_tab']['tabs_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Tabs settings'),
	  '#weight' => 6,
	   '#group' => 'If you are using tabs that comes with iCompany theme, you have to define tab names here. You can add tab by vising block management page. Just add blocks to tab regions. <br/> 	<em>We have not used quicktabs module because it has compatibility problems with sliders. Therefore, we have used more robust bootstrap tabs. </em>',
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);

	$form['theme_settings_tab']['tabs_settings']['tabname1'] = array(
		'#type' => 'textfield',
		'#title' => t('Tab 1 name'),
		'#default_value' => theme_get_setting('tabname1'),		
	);
	
	$form['theme_settings_tab']['tabs_settings']['tabname2'] = array(
		'#type' => 'textfield',
		'#title' => t('Tab 2 name'),
		'#default_value' => theme_get_setting('tabname2'),		
	);
	
	$form['theme_settings_tab']['tabs_settings']['tabname3'] = array(
		'#type' => 'textfield',
		'#title' => t('Tab 3 name'),
		'#default_value' => theme_get_setting('tabname3'),		
	);
	
	$form['theme_settings_tab']['tabs_settings']['tabname4'] = array(
		'#type' => 'textfield',
		'#title' => t('Tab 4 name'),
		'#default_value' => theme_get_setting('tabname4'),		
	);
	
	$form['theme_settings_tab']['tabs_settings']['tabname5'] = array(
		'#type' => 'textfield',
		'#title' => t('Tab 5 name'),
		'#default_value' => theme_get_setting('tabname5'),		
	);
	
	$form['theme_settings_tab']['tabs_settings']['tabname6'] = array(
		'#type' => 'textfield',
		'#title' => t('Tab 6 name'),
		'#default_value' => theme_get_setting('tabname6'),		
	);
	
	
	
	// Portfolio settings		
	$form['theme_settings_tab']['portfolio_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Portfolio settings'),
	  '#weight' => 5,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);
	
	$form['theme_settings_tab']['portfolio_settings']['porfolio_1col_link'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your 1 column portfolio page'),
	'#default_value' => theme_get_setting('porfolio_1col_link'),
 	'#description' => t('Enter full http:// path or relative path to you 1 column portfolio page. '),
	'#size' => 60,
	);
	
	$form['theme_settings_tab']['portfolio_settings']['porfolio_2col_link'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your 2 column portfolio page'),
	'#default_value' => theme_get_setting('porfolio_2col_link'),
 	'#description' => t('Enter full http:// path or relative path to you 2 column portfolio page. '),
	'#size' => 60,
	);
	
	$form['theme_settings_tab']['portfolio_settings']['porfolio_3col_link'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your 3 column portfolio page.'),
	'#default_value' => theme_get_setting('porfolio_3col_link'),
 	'#description' => t('Enter full http:// path or relative path to you 3 column portfolio page. '),
	'#size' => 60,
	);
	
	$form['theme_settings_tab']['portfolio_settings']['porfolio_4col_link'] = array(
	'#type' => 'textfield',
	'#title' => t('Link to your 4 column portfolio page.'),
	'#default_value' => theme_get_setting('porfolio_4col_link'),
 	'#description' => t('Enter full http:// path or relative path to you 4 column portfolio page. '),
	'#size' => 60,
	);
	
	// Footer		
	$form['theme_settings_tab']['footer_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Footer settings'),
	  '#weight' => 6,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);
	
	$form['theme_settings_tab']['footer_settings']['footer_note'] = array(
	'#type' => 'textfield',
	'#title' => t('Copyright statement or similar'),
	'#default_value' => theme_get_setting('footer_note'),
 	'#description' => t('Copyright statement note in dark footer bar'),
	'#size' => 60,
	);
		
		
	// Misc		
	$form['theme_settings_tab']['misc_settings'] = array(
	  '#type' => 'fieldset',
	  '#title' => t('Miscellaneous settings'),
	  '#weight' => 7,
	  '#collapsible' => TRUE,
	  '#collapsed' => FALSE,
	  '#group' => 'theme_settings_tab',
	);
	
	$form['theme_settings_tab']['misc_settings']['use_login_links'] = array(
		'#type' => 'checkbox',
		'#title' => t('Display \'Login | Register\' links in Top bar'),
		'#default_value' => theme_get_setting('use_login_links'),
	);

	$form['theme_settings_tab']['misc_settings']['icompany_breadcrumb'] = array(
		'#type' => 'checkbox',
		'#title' => t('iCompany\'s style breadcrumb'),
		'#description' => t('Use iCompany\'s style breadcrumb instead of Drupal default breadcrumb. '),
		'#default_value' => theme_get_setting('icompany_breadcrumb'),
	);
	
	$form['theme_settings_tab']['misc_settings']['show_feedback_link'] = array(
		'#type' => 'checkbox',
		'#title' => t('Show onscreen feedback link'),
		'#description' => t('Check this to show link to feedback link that targets <em>Modal</em> block region. '),
		'#default_value' => theme_get_setting('show_feedback_link'),
	);
	
	$form['theme_settings_tab']['misc_settings']['logo_top_margin'] = array(
		'#type' => 'textfield',
		'#title' => t('Top margin to logo and site titles. '),
		'#default_value' => theme_get_setting('logo_top_margin'),
	 	'#description' => t('Value is in pixels(px), do not add \'px\'. Make sure you set proper margin to make the logo is vertically middle in header. '),
		'#size' => 60,
	);
	
	$form['theme_settings_tab']['misc_settings']['menu_top_margin'] = array(
		'#type' => 'textfield',
		'#title' => t('Top margin to menu bar'),
		'#default_value' => theme_get_setting('menu_top_margin'),
	 	'#description' => t('Value is in pixels(px), do not add \'px\'. Make sure you set proper margin to make the menu is vertically middle in header. '),
		'#size' => 60,
	);
	
	// slider settings form
	include_once( drupal_get_path('theme', 'icompany') . '/includes/slider_options.php');
	
	
	return $form;
}
