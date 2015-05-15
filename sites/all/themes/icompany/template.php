<?php
 
/*
	Theme Name: iCompany
	Theme URI: 
	Description: iCompany multipurpose Drupal theme
	Version: 1.0
	Author: Worthapost
	Author URI: http://www.worthapost.com
*/
	
// load css files
drupal_add_css(drupal_get_path('theme', 'icompany') .'/css/bootstrap.css',  array(  'group' => 'CSS_THEME', 'weight' => 93));
drupal_add_css(drupal_get_path('theme', 'icompany') .'/style.css',  array(  'group' => 'CSS_THEME', 'weight' => 96));
drupal_add_css(drupal_get_path('theme', 'icompany') .'/customize_icompany.css',  array(  'group' => 'CSS_THEME', 'weight' => 97));


// Misc
drupal_add_js(drupal_get_path('theme', 'icompany') . '/js/bootstrap.js', array('type' => 'file', 'scope' => 'footer', 'group' => 'JS_LIBRARY', 'weight' => 20));
drupal_add_js(drupal_get_path('theme', 'icompany') . '/js/selectnav.min.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 40));

// colorbox
drupal_add_js(drupal_get_path('theme', 'icompany') . '/js/jquery.colorbox-min.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 42));
drupal_add_css(drupal_get_path('theme', 'icompany') .'/css/colorbox.css',  array(  'group' => 'CSS_THEME', 'weight' => 98));


// superfish
drupal_add_js(drupal_get_path('theme', 'icompany') . '/js/hoverIntent.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 25));
drupal_add_js(drupal_get_path('theme', 'icompany') . '/js/superfish.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 30));
drupal_add_css(drupal_get_path('theme', 'icompany') .'/css/superfish.css',  array(  'group' => 'CSS_THEME', 'weight' => 93));

// Google fonts
// Prepare Google font css 
function get_google_css_string(){
	if(theme_get_setting('google_enable') == 1) {
		$google_heading_font = theme_get_setting('heading_fonts_google');
		$google_menu_font = theme_get_setting('menu_fonts_google');
		$google_site_font = theme_get_setting('site_fonts_google');	
		$google_slider_font = theme_get_setting('slider_fonts_google');	
		$google_quote_font = theme_get_setting('quote_fonts_google');					
	    				
	    $google_heading_font = str_replace(' ', '+' , $google_heading_font);			
	    $google_menu_font = str_replace(' ', '+' , $google_menu_font);
	    $google_site_font = str_replace(' ', '+' , $google_site_font);
		$google_slider_font = str_replace(' ', '+' , $google_slider_font);
		$google_quote_font = str_replace(' ', '+' , $google_quote_font);
		
	    $google_heading_font =	$google_heading_font . ':100,200,300,400,500,600,700,subset=latin:n,i,b,bi|';	
	    $google_menu_font = $google_menu_font . ':100,200,300,400,500,600,700,subset=latin:n,i,b,bi|';
	    $google_site_font = 	$google_site_font . ':100,200,300,400,500,600,700,subset=latin:n,i,b,bi|';
	    $google_slider_font = 	$google_slider_font . ':100,200,300,400,500,600,700,subset=latin:n,i,b,bi|';
		
		
		$google_css_string = 'http://fonts.googleapis.com/css?family=' . $google_heading_font . $google_menu_font . $google_site_font . $google_slider_font . $google_quote_font;
	}
	else{
		return;
	}
	
	return $google_css_string;
}


function get_googlefont_style_code(){

	?>
	
	body.icompany, #wap-menu ul.sf-menu li span.tip a, .ei-title h3, #main_slider .slider-body, #main_slider .slider-link, .btn{
		font-family: <?php print theme_get_setting('site_fonts_google'); ?>, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		font-weight: <?php print theme_get_setting('site_fonts_google_weight'); ?>;
	}
	
	h1, h2, h3, h4, h5, h6, h7, h8, .heading,  .nav-tabs, .pricing-table ul .price, .accordion-heading, .numbered-heading, .heading-list, .uc-price {
		font-family: <?php print theme_get_setting('heading_fonts_google'); ?>, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		font-weight: <?php print theme_get_setting('heading_fonts_google_weight'); ?>;
	}
	
	#wap-menu ul.sf-menu li a, .tinynav{
		font-family: <?php print theme_get_setting('menu_fonts_google'); ?>, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		font-weight: <?php print theme_get_setting('menu_fonts_google_weight'); ?>;
	}

	
	#main_slider, #main_slider h1, #main_slider h2, #main_slider h3, #main_slider p, #main_slider .btn{
		font-family: <?php print theme_get_setting('slider_fonts_google'); ?>, 'Helvetica Neue', Helvetica, Arial, sans-serif;
		font-weight: <?php print theme_get_setting('slider_fonts_google_weight'); ?>;
	}
	
	blockquote, .quote{
		font-family: <?php print theme_get_setting('quote_fonts_google'); ?>, Georgia,"Times New Roman",Times,serif;
		font-weight: <?php print theme_get_setting('quote_fonts_google_weight'); ?>;
	}
	
	<?php
}


// user box
function icompany_welcome_user(){
	global $user;
	$usr_path = 'user/'.$user->uid;
	$myAccount = drupal_get_path_alias($usr_path);
	$logout = drupal_get_path_alias('user/logout');
	if($user->uid)
	{
		$myAccount = l(t('My account'), $myAccount, array('title' => t('My account')));
		$signout = l(t('Sign out'), $logout);
		$output = $myAccount . ' | ' . $signout;
		return $output;
	}

	return;
}

function user_login_links(){
	global $user;
	$login = drupal_get_path_alias('user');
	$register = drupal_get_path_alias('user/register');
		if(!$user->uid){
			$login = l(t('Login'), $login, array('attributes' => array('rel' => 'tooltip', 'data-placement' => 'bottom', 'data-original-title' => t('Click here to login'))));
			$register = l(t('Register'), $register, array('attributes' => array('rel' => 'tooltip', 'data-placement' => 'bottom', 'data-original-title' => t('Click here to create an account') )));
			
			$output = $login . ' | ' . $register;
			
			return $output;
		}
			
	return;
}




 
// menus customization
function icompany_menu_tree__main_menu($variables) {
 	return '<ul id="nav" class="sf-menu">' . $variables['tree'] . '</ul>';
}


// count blocks and return number of blocks
function count_blocks($block1 = NULL, $block2 = NULL, $block3 = NULL, $block4 = NULL, $block5 = NULL,  $block6 = NULL)
{
	$to_count = array();

	if(!empty($block1))
	{
		array_push($to_count, 1);
	}

	if(!empty($block2))
	{
		array_push($to_count, 2);
	}

	if(!empty($block3))
	{
		array_push($to_count, 3);
	}
	
	if(!empty($block4))
	{
		array_push($to_count, 4);
	}
	
	if(!empty($block5))
	{
		array_push($to_count, 5);
	}
	
	if(!empty($block6))
	{
		array_push($to_count, 6);
	}


	$num = count($to_count);
	
	return $num;
}


// count blocks and return span* automatically. 12 grid is divided by number of blocks. 5 blocks will be an error coz 12 cannot be divided by 5. 6 is ok
function get_block_span($block1 = NULL, $block2 = NULL, $block3 = NULL, $block4 = NULL, $block5 = NULL,  $block6 = NULL)
{
	$to_count = array();

	if(!empty($block1))
	{
		array_push($to_count, 1);
	}

	if(!empty($block2))
	{
		array_push($to_count, 2);
	}

	if(!empty($block3))
	{
		array_push($to_count, 3);
	}
	
	if(!empty($block4))
	{
		array_push($to_count, 4);
	}
	
	if(!empty($block5))
	{
		array_push($to_count, 5);
	}
	
	if(!empty($block6))
	{
		array_push($to_count, 6);
	}

	$num = count($to_count);

	if ($num == 5) {
		return ' span2 '; // since 12 grids cannot be divided by 5, we use span2
	}
	
	$span = 12/$num;
	
	return ' span'. $span . ' ';
}

// Returns true if any column block exist else false

function region_blocks_exist($block1 = NULL, $block2 = NULL, $block3 = NULL, $block4 = NULL, $block5 = NULL,  $block6 = NULL){
	
	if(!empty($block1) || !empty($block2) ||  !empty($block3) || !empty($block4) || !empty($block5) || !empty($block6) )	{
		return TRUE;
	}
	
	else{
		return FALSE;
	}
}

/**
 * Convert a hexa decimal color code to its RGB equivalent
 *
 * @param string $hexStr (hexadecimal color value)
 * @param boolean $returnAsString (if set true, returns the value separated by the separator character. Otherwise returns associative array)
 * @param string $seperator (to separate RGB values. Applicable only if second parameter is true.)
 * @return array or string (depending on second parameter. Returns False if invalid hex color value)
 */                                                                                                
function hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
	

    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
}

/**
 * Convert a hexa decimal color to lighter or darker color
*/
function colorInterpolate($hex, $percent) {
	// Work out if hash given
	$hash = '';
	if (stristr($hex, '#')) {
		$hex = str_replace('#', '', $hex);
		$hash = '#';
	}
	/// HEX TO RGB
	$rgb = array(hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2)));
	//// CALCULATE
	for ($i = 0; $i < 3; $i++) {
		// See if brighter or darker
		if ($percent > 0) {
			// Lighter
			$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1 - $percent));
		} else {
			// Darker
			$positivePercent = $percent - ($percent * 2);
			$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1 - $positivePercent));
		}
		// In case rounding up causes us to go to 256
		if ($rgb[$i] > 255) {
			$rgb[$i] = 255;
		}
	}
	//// RBG to Hex
	$hex = '';
	for ($i = 0; $i < 3; $i++) {
		// Convert the decimal digit to hex
		$hexDigit = dechex($rgb[$i]);
		// Add a leading zero if necessary
		if (strlen($hexDigit) == 1) {
			$hexDigit = "0" . $hexDigit;
		}
		// Append to the hex string
		$hex .= $hexDigit;
	}
	return $hash . $hex;
}


// Custom breadcrumb
function icompany_breadcrumb($breadcrumb) {
	    
    $bc = $breadcrumb['breadcrumb'];
	if (!empty($bc)) {
		return implode(' / ', $bc) ;
	}
}

function breadcrumb_title($br)
{
	if(strlen($br) > 22){
		$new_br = mb_substr($br, 0, 22);
		$new_br2 = str_pad($new_br, 26, ' ...', STR_PAD_RIGHT);
		$new_br3 = strip_tags($new_br2);
		return $new_br3;
	}
	else

	return $br;
}

 
// Preprocess Page
function icompany_preprocess_page(&$variables) {
  if (isset($variables['secondary_menu'])) {
    $variables['secondary_nav'] = theme('links__system_secondary_menu', array(
      'links' => $variables['secondary_menu'],
      'attributes' => array(
        'class' => array('links', 'inline', 'secondary-menu'),
      ),
      'heading' => array(
        'text' => t('Secondary menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
  }
  else {
    $variables['secondary_nav'] = FALSE;
  }
}


// Customized tabs
function icompany_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="btn-group tabs">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="btn-group">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

function icompany_menu_local_task($variables) {
  $link = $variables['element']['#link'];
  $link_text = $link['title'];

  if (!empty($variables['element']['#active'])) {
    // Add text to indicate active tab for non-visual users.
    $active = '<span class="element-invisible">' . t('(active tab)') . '</span>';

    // If the link does not contain HTML already, check_plain() it now.
    // After we set 'html'=TRUE the link will not be sanitized by l().
    if (empty($link['localized_options']['html'])) {
      $link['title'] = check_plain($link['title']);
    }
    $link['localized_options']['html'] = TRUE;
    $link_text = t('!local-task-title!active', array('!local-task-title' => $link['title'], '!active' => $active));
  }

  return '<li' . (!empty($variables['element']['#active']) ? ' class="active btn"' : ' class="btn"') . '>' . l($link_text, $link['href'], $link['localized_options']) . "</li>\n";
}

// customize node submitted text
function icompany_preprocess_node(&$variables) {
  $print_task = t('Print this page');
  if ($variables['submitted']) {
    $variables['submitted'] = t('<span class="icon-calendar"></span> on !datetime &nbsp; <span class=" icon-user"></span> !username <a class="hidden-phone hidden-tablet node-print pull-right" style="line-height:10px;"  data-original-title="!print_text" data-placement="top" rel="tooltip" href="javascript:window.print()"><span class="icon-print"></span></a>', array('!username' => $variables['name'], '!datetime' => $variables['date'], '!print_text' => $print_task));
  }
  
 
  //customize readmore, comments and comment add    
  if(array_key_exists('content', $variables) && array_key_exists('links', $variables['content']) && array_key_exists('comment', $variables['content']['links']) && array_key_exists('comment-new-comments', $variables['content']['links']['comment']['#links'])){
    $variables['content']['links']['comment']['#links']['comment-new-comments']['attributes']['class'] = array('btn',  'btn-small');
  }

  if(array_key_exists('content', $variables) && array_key_exists('links', $variables['content']) && array_key_exists('comment', $variables['content']['links']) && array_key_exists('comment-comments', $variables['content']['links']['comment']['#links'])){
  	$variables['content']['links']['comment']['#links']['comment-comments']['title'] = '<span class="icon-comment"></span> &nbsp;' . $variables['content']['links']['comment']['#links']['comment-comments']['title'] ;
    $variables['content']['links']['comment']['#links']['comment-comments']['attributes']['class'] = array('btn',  'btn-small');
  }
  
  if(array_key_exists('content', $variables) && array_key_exists('links', $variables['content']) && array_key_exists('comment', $variables['content']['links']) && array_key_exists('comment-add', $variables['content']['links']['comment']['#links'])){
 	$variables['content']['links']['comment']['#links']['comment-add']['html'] = 1;
 	$variables['content']['links']['comment']['#links']['comment-add']['title']  = '<span class="icon-plus"></span> &nbsp;' . $variables['content']['links']['comment']['#links']['comment-add']['title']  ;   
    $variables['content']['links']['comment']['#links']['comment-add']['attributes']['class'] = array('btn', 'btn-small');
  }
  
  if(array_key_exists('content', $variables) && array_key_exists('links', $variables['content']) && array_key_exists('node', $variables['content']['links']) && array_key_exists('node-readmore', $variables['content']['links']['node']['#links'])){
    $variables['content']['links']['node']['#links']['node-readmore']['attributes']['class'] = array('btn', 'btn-theme', 'btn-small');
  }
  
	
}

//shortcodes

function icompany_preprocess_field(&$variables) {
	
	if(array_key_exists('element', $variables) && array_key_exists("#field_name", $variables['element'])){
		if($variables['element']['#field_name'] == 'body'){
			if(array_key_exists('items', $variables)  && array_key_exists('0', $variables['items'])  && array_key_exists('#markup', $variables['items']['0'])){
				
				$string = $variables['items']['0']['#markup'];	
				
				// replace	
				$string = str_replace('[row]', '<div class="row-fluid">', $string);
				$string = str_replace('[/row]', '</div>', $string);
				
				$string = str_replace('[one]', '<div class="span12">', $string);
				$string = str_replace('[/one]', '</div>', $string);
					 
				$string = str_replace('[oneHalf]', '<div class="span6">', $string);
				$string = str_replace('[/oneHalf]', '</div>', $string);
				
				$string = str_replace('[oneThird]', '<div class="span4">', $string);
				$string = str_replace('[/oneThird]', '</div>', $string);
				
				$string = str_replace('[oneFourth]', '<div class="span3">', $string);
				$string = str_replace('[/oneFourth]', '</div>', $string);
				
				$string = str_replace('[oneFifth]', '<div class="span2">', $string);
				$string = str_replace('[/oneFifth]', '</div>', $string);
				
				$string = str_replace('[oneSixth]', '<div class="span2">', $string);
				$string = str_replace('[/oneSixth]', '</div>', $string);
				
				$string = str_replace('[twoThird]', '<div class="span8">', $string);
				$string = str_replace('[/twoThird]', '</div>', $string);
				
				$string = str_replace('[threeFourth]', '<div class="span9">', $string);
				$string = str_replace('[/threeFourth]', '</div>', $string);
				
				$string = str_replace('[fiveSixth]', '<div class="span10">', $string);
				$string = str_replace('[/fiveSixth]', '</div>', $string);
				
				$string = str_replace('[color]', '<span class="color">', $string);
				$string = str_replace('[/color]', '</span>', $string);
				
				$string = str_replace('[h1 bordered]', '<h1 class="bordered">', $string);
				$string = str_replace('[/h1]', '</h1>', $string);
				
				$string = str_replace('[h2 bordered]', '<h2 class="bordered">', $string);
				$string = str_replace('[/h2]', '</h2>', $string);
				
				$string = str_replace('[h3 bordered]', '<h3 class="bordered">', $string);
				$string = str_replace('[/h3]', '</h3>', $string);
				$variables['items']['0']['#markup'] = $string;
			}
		}
	}
	
 
}

// customize comment submitted text
function icompany_preprocess_comment(&$variables) {
    $created = $variables['created'];
    $author = $variables['author'];
    $variables['submitted'] = t("on !date by !author", array('!date' => $created, '!author' => $author));
}


function icompany_preprocess_table(&$variables){
	$variables['attributes']['class'] = array(' table table-striped ');
}

function icompany_preprocess_button(&$variables) {
  $variables['element']['#attributes']['class'][] = ' btn ';
}

function icompany_preprocess_simplenews_block(&$vars){
	$vars['form']['mail']['#title'] = '';
	$vars['form']['mail']['#attributes'] = array('placeholder' => 'E-mail…');
	$vars['form']['mail']['#size'] = 27;
}



//status messages
function icompany_status_messages($variables) {
  $display = $variables['display'];
  $output = '';

  $status_heading = array(
    'status' => t('Status message'), 
    'error' => t('Error message'), 
    'warning' => t('Warning message'),
  );
  foreach (drupal_get_messages($display) as $type => $messages) {
	switch ($type) {
		case 'status':
			$alert_type = '  alert-success alert-block ';
			break;
		case 'warning':
			$alert_type = '  alert-block ';
			break;
		case 'error':
			$alert_type = '  alert-error alert-block ';
			break;
		default:
			$alert_type = '  alert-block ';
			break;
	}
	
    $output .= "<div class=\" alert $alert_type\">\n <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>\n";
    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }
    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  return $output;
}



/*
 * ---------------------------------
 *  SLIDER HTML FUNCTIONS
 * ---------------------------------
 */
 
function icomp_get_slider_html($slider_type = 'nivo'){
	
	switch ($slider_type) {
		case 'nivo':
			return icomp_get_nivo_html();
			break;
			
		case 'flex':
			return icomp_get_flex_html();
			break;
			
		case 'iview':
			return icomp_get_iview_html();
			break;
			
		case 'elastic':
			return icomp_get_elastic_html();
			break;
			
		case 'piecemaker':
			return icomp_prepare_piecemaker();
			break;
		
		default:
			
			break;
	}
}

/*
 * ---------------------------------
 * Nivo slider html
 * ---------------------------------
 */
function icomp_get_nivo_html(){
	?>

	<div class="slider-wrapper theme-bar">  
		<div id="slider" class="nivoSlider">
			<!--Slide 1-->
			<?php if(theme_get_setting('slide1_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide1_image_path') ?>" data-thumb="<?php print theme_get_setting('slide1_image_path') ?>" alt="" <?php if((theme_get_setting('slide1_title') != '') || (theme_get_setting('slide1_caption') != '') || (theme_get_setting('slide1_btn_title') != '')){ print "title=\"#slide1_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 2-->
			<?php if(theme_get_setting('slide2_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide2_image_path') ?>" data-thumb="<?php print theme_get_setting('slide2_image_path') ?>" alt="" <?php if((theme_get_setting('slide2_title') != '') || (theme_get_setting('slide2_caption') != '') || (theme_get_setting('slide2_btn_title') != '')){ print "title=\"#slide2_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 3-->
			<?php if(theme_get_setting('slide3_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide3_image_path') ?>" data-thumb="<?php print theme_get_setting('slide3_image_path') ?>" alt="" <?php if((theme_get_setting('slide3_title') != '') || (theme_get_setting('slide3_caption') != '') || (theme_get_setting('slide3_btn_title') != '')){ print "title=\"#slide3_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 4-->
			<?php if(theme_get_setting('slide4_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide4_image_path') ?>" data-thumb="<?php print theme_get_setting('slide4_image_path') ?>" alt="" <?php if((theme_get_setting('slide4_title') != '') || (theme_get_setting('slide4_caption') != '') || (theme_get_setting('slide4_btn_title') != '')){ print "title=\"#slide4_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 5-->
			<?php if(theme_get_setting('slide5_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide5_image_path') ?>" data-thumb="<?php print theme_get_setting('slide5_image_path') ?>" alt="" <?php if((theme_get_setting('slide5_title') != '') || (theme_get_setting('slide5_caption') != '') || (theme_get_setting('slide5_btn_title') != '')){ print "title=\"#slide5_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 6-->
			<?php if(theme_get_setting('slide6_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide6_image_path') ?>" data-thumb="<?php print theme_get_setting('slide6_image_path') ?>" alt="" <?php if((theme_get_setting('slide6_title') != '') || (theme_get_setting('slide6_caption') != '') || (theme_get_setting('slide6_btn_title') != '')){ print "title=\"#slide6_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 7-->
			<?php if(theme_get_setting('slide7_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide7_image_path') ?>" data-thumb="<?php print theme_get_setting('slide7_image_path') ?>" alt="" <?php if((theme_get_setting('slide7_title') != '') || (theme_get_setting('slide7_caption') != '') || (theme_get_setting('slide7_btn_title') != '')){ print "title=\"#slide7_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 8-->
			<?php if(theme_get_setting('slide8_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide8_image_path') ?>" data-thumb="<?php print theme_get_setting('slide8_image_path') ?>" alt="" <?php if((theme_get_setting('slide8_title') != '') || (theme_get_setting('slide8_caption') != '') || (theme_get_setting('slide8_btn_title') != '')){ print "title=\"#slide8_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 9-->
			<?php if(theme_get_setting('slide9_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide9_image_path') ?>" data-thumb="<?php print theme_get_setting('slide9_image_path') ?>" alt="" <?php if((theme_get_setting('slide9_title') != '') || (theme_get_setting('slide9_caption') != '') || (theme_get_setting('slide9_btn_title') != '')){ print "title=\"#slide9_caption\""; } ?> />
			<?php } ?>
			
			<!--Slide 10-->
			<?php if(theme_get_setting('slide10_image_path') != ''){ ?>
				<img src="<?php print theme_get_setting('slide10_image_path') ?>" data-thumb="<?php print theme_get_setting('slide10_image_path') ?>" alt="" <?php if((theme_get_setting('slide10_title') != '') || (theme_get_setting('slide10_caption') != '') || (theme_get_setting('slide10_btn_title') != '')){ print "title=\"#slide10_caption\""; } ?> />
			<?php } ?>
			
			<!--captions-->
			<?php 
				$caption = '';
				for ($i=1; $i < 10; $i++) { 
					$title = t(theme_get_setting('slide' . $i . '_title'));
					$caption_text = t(theme_get_setting('slide' . $i . '_caption'));
					$btn_text = t(theme_get_setting('slide' . $i . '_btn_title'));
					$btn_link = t(theme_get_setting('slide' . $i . '_btn_link'));
					
					if($title != '' || $caption_text != '' || $btn_text != ''){
						$caption .= "<div id='slide" . $i ."_caption' class='nivo-html-caption'><div class='nivo-caption-inner'>";
								
						if($title != '')
						// apple shortcode
						$title = str_replace('[color]', '<span class="color">', $title);
						$title = str_replace('[/color]', '</span>', $title);
						
						$caption .= "<div class='nivo-caption-title slider-title '>" . $title . "</div>";
						
						if($caption_text != '')
						
						// apple shortcode
						$caption_text = str_replace('[color]', '<span class="color">', $caption_text);
						$caption_text = str_replace('[/color]', '</span>', $caption_text);
						
						$caption .= "<div class='slider-body nivo-caption-body hidden-phone'>" . $caption_text . "</div>";
						
						if($btn_text != '')
						$caption .= "<div class='nivo-caption-link slider-link '><a class='btn btn-theme btn-large' href='" . $btn_link . "'>" . $btn_text . "</a></div>";
						
						$caption .= '</div></div>';
						
					}
				}
				
				
			?>
					
		</div>
	</div><!--slider-wrapper-->
	<?php
	
	print $caption;
}

if(theme_get_setting('slider_type') == 'nivo'){
	drupal_add_css(drupal_get_path('theme', 'icompany') .'/sliders/nivo/themes/bar/bar.css', 'theme');
	drupal_add_css(drupal_get_path('theme', 'icompany') .'/sliders/nivo/nivo-slider.css', 'theme');
	drupal_add_js(drupal_get_path('theme', 'icompany') . '/sliders/nivo/jquery.nivo.slider.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 27));
	drupal_add_js('
	(function ($) {
	   $(window).load(function() {  $(\'#slider\').nivoSlider({effect: \'random\', slices: 15, boxCols: 6, boxRows: 4, pauseTime: 5000, animSpeed: 500,  });});
	})(jQuery);
	', array('type' => 'inline', 'scope' => 'header', 'weight' => 50));
}

/*
 * ---------------------------------
 * Flex slider html
 * ---------------------------------
 */
function icomp_get_flex_html(){
	?>
	<div class="flex-container">
		<div class="flexslider">
			<ul class="slides">
				<?php
				
					$output = '';
				
					for ($i=1; $i < 10; $i++) {						
						
						$img = theme_get_setting('slide' . $i . '_image_path');
						$title = t(theme_get_setting('slide' . $i . '_title'));
						$caption_text = t(theme_get_setting('slide' . $i . '_caption'));
						$btn_text = t(theme_get_setting('slide' . $i . '_btn_title'));
						$btn_link = t(theme_get_setting('slide' . $i . '_btn_link'));
						
						if($img != ''){
							
							// each slide
							$output .= '<li>';
							
							// slide image
							$output .= "<img alt='' src='" . $img . "' />";
							
							// slide caption
							if($title != '' || $caption_text != '' || $btn_text != ''){
								
								$output .= "<p class='hidden-phone flex-caption'>";
								
								//caption title
								if($title != '')
								
								// apple shortcode
								$title = str_replace('[color]', '<span class="color">', $title);
								$title = str_replace('[/color]', '</span>', $title);
								
								$output .= "<span class='flex-caption-title'>". $title ."</span>";
								
								// caption text
								if($caption_text != '')
								$caption_text = str_replace('[color]', '<span class="color">', $caption_text);
								$caption_text = str_replace('[/color]', '</span>', $caption_text);
								
								$output .= "<span class='flex-caption-body slider-body hidden-tablet'>". $caption_text ."</span>";
								
								// link
								if($btn_text != '')
								$output .= "<span class='slider-body flex-caption-link'><a class ='btn btn-theme btn-large' href='" . $btn_link ."'>". $btn_text ."</a></span>";
								
								$output .= "</p>";
							}
							
							$output .= '</li>';
						}
					} 

					print $output;
				
				?>
			</ul>
		</div>
	</div>
	<?php 
}

if(theme_get_setting('slider_type') == 'flex'){
	// load css and js
	drupal_add_css(drupal_get_path('theme', 'icompany') .'/sliders/flex/flexslider.css', 'theme');
	drupal_add_js(drupal_get_path('theme', 'icompany') . '/sliders/flex/jquery.flexslider-min.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 6));
	drupal_add_js('
	(function ($) {
	     $(window).load(function() {  $(\'.flexslider\').flexslider({  animation: "slide", slideshowSpeed: 7000});});
     })(jQuery);
	', array('type' => 'inline', 'scope' => 'header', 'weight' => 3));
}


/*
 * ---------------------------------
 * iView slider html
 * ---------------------------------
 */
 
function icomp_get_iview_html(){
	?>
	<div class="container_i">
		<div id="iview">
			<?php
			$output = '';
				
			for ($i=1; $i < 10; $i++) {						
				
				$img = theme_get_setting('slide' . $i . '_image_path');
				$title = t(theme_get_setting('slide' . $i . '_title'));
				$caption_text = t(theme_get_setting('slide' . $i . '_caption'));
				$btn_text = t(theme_get_setting('slide' . $i . '_btn_title'));
				$btn_link = t(theme_get_setting('slide' . $i . '_btn_link'));
				
				// each slide
				if($img != ''){
					
					// slide image
					$output .= "<div  data-iview:image='" . $img ."'>";
					
					if($title != '' || $caption_text != '' || $btn_text != ''){
						
						//slide caption container
						$output .= "<div class='iview-caption caption7' data-x='0' data-y='0' data-width='300' data-height='390' data-transition='wipeRight'>";
							
							
						//caption title
						if($title != '')
						
						// appply shortcode
						$title = str_replace('[color]', '<span class="color">', $title);
						$title = str_replace('[/color]', '</span>', $title);
						
						$output .= "<h2><span>". $title ."</span></h2>";
					
						// caption text
						if($caption_text != '')
						
						$caption_text = str_replace('[color]', '<span class="color">', $caption_text);
						$caption_text = str_replace('[/color]', '</span>', $caption_text);
						
						$output .= "<p class='hidden-phone slider-body'>". $caption_text ."</p> <br/>";
								
						// link
						if($btn_text != '')
						$output .= "<span class='slider-body'><a href='". $btn_link ."' class='btn btn-large btn-theme'>". $btn_text ."</a></span>";
								
					
						//slide caption closure
						$output .= "</div>";
					}
					
					// slide image closure
					$output .= "</div>";
				}
			}
				
			print $output;
			?>	
		</div>
	</div>
	<?php
}

if(theme_get_setting('slider_type') == 'iview'){
	// load css and js
	drupal_add_css(drupal_get_path('theme', 'icompany') .'/sliders/iview/css/iview.css', 'theme');
	drupal_add_css(drupal_get_path('theme', 'icompany') .'/sliders/iview/css/skin4/style.css', 'theme');
		
	drupal_add_js(drupal_get_path('theme', 'icompany') . '/sliders/iview/js/raphael-min.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 6));
	drupal_add_js(drupal_get_path('theme', 'icompany') . '/sliders/iview/js/jquery.easing.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 7));
	drupal_add_js(drupal_get_path('theme', 'icompany') . '/sliders/iview/js/iview.min.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 8));

	drupal_add_js("
	(function ($) {
		$(function() {
			$('#iview').iView({
					pauseTime: 7000,
					pauseOnHover: true,
					directionNavHoverOpacity: 0,
					timer: 'Bar',
					timerDiameter: '15%',
					timerPadding: 0,
					timerStroke: 7,
					timerBarStroke: 0,
					timerColor: '#FFF',
					timerPosition: 'bottom-right',
					fx: 'strip-up-down, strip-down-left, zigzag-drop-top, right-curtain, block-expand',
			});
		});
    })(jQuery);
    	", array('type' => 'inline', 'scope' => 'header', 'weight' => 8)
	);
}


/*
 * ---------------------------------
 * Elastic slider html
 * ---------------------------------
 */
 
function icomp_get_elastic_html(){
	?>
	<div id="ei-slider" class="ei-slider">		
		<ul class="ei-slider-large">
			<?php 
			$output = '';
			for ($i=1; $i < 10; $i++) {						
				
				$img = theme_get_setting('slide' . $i . '_image_path');
				$title = t(theme_get_setting('slide' . $i . '_title'));
				$caption_text = t(theme_get_setting('slide' . $i . '_caption'));
				$btn_text = t(theme_get_setting('slide' . $i . '_btn_title'));
				$btn_link = t(theme_get_setting('slide' . $i . '_btn_link'));
				
				// each slide
				if($img != ''){
					
					// each slide
					$output .= '<li>';
					
					$output .= '<img src="'. $img .'" alt="" />';
					
					if($title != '' || $caption_text != '' || $btn_text != ''){
						
						// each caption
						$output .= '<div class="ei-title">';
						
						
						//caption title
						if($title != '')
						$output .= "<h2 class=' clearfix '><span class='theme-scheme elastic-title-inner'>". $title ."</span></h2>";
						
						// caption text
						if($caption_text != '' || $btn_text != ''){
							
							$output .= "<h3>";
							
							// caption text
							if($caption_text != '')
							$output .= "<span class='elastic-body-inner slider-body '>". $caption_text ."</span>";
							
							// link
							if($btn_text != '')
							$output .= "<br/><a class='hidden-phone ei-caption-link btn btn-theme' href='". $btn_link ."'>". $btn_text ."</a>";
							
							$output .= "</h3>";
							
						}
						
						
						$output .= '</div>';
						
					}
					
					// each slide closure
					$output .= '</li>';
					
					
					
				}
			}

			print $output
			
			?>
		</ul>
		
		<ul class="ei-slider-thumbs">
			<?php 
			$thumb_output = '';
				for ($i=1; $i < 10; $i++) {
					$img_for_thumb = theme_get_setting('slide' . $i . '_image_path');
					$title_for_thumb = t(theme_get_setting('slide' . $i . '_title'));
					
					if($img_for_thumb != ''){
							
						if($i == 1){
							$thumb_output .= '<li class="ei-slider-element">' . t('Current') . '</li>';							
						}
							
						$thumb_output .= '<li>';
						
						$thumb_output .= '<a href="#">'. $title_for_thumb .'</a>';
						
						$thumb_output .= '<img src="'. drupal_get_path('theme', 'icompany') .'/timthumb.php?src='. $img_for_thumb .'&h=90&w=120" />';
						
						$thumb_output .= '</li>';
							
					}
				}
				
				print $thumb_output;
			?>
		</ul>
	</div>
	<?php
	
}

if(theme_get_setting('slider_type') == 'elastic'){
	// load css and js
	drupal_add_css(drupal_get_path('theme', 'icompany') .'/sliders/elastic/css/style.css', 'theme');
	drupal_add_js(drupal_get_path('theme', 'icompany') . '/sliders/elastic/js/jquery.eislideshow.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 6));
	drupal_add_js(drupal_get_path('theme', 'icompany') . '/sliders/elastic/js/jquery.easing.1.3.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_LIBRARY', 'weight' => 7));	
	drupal_add_js("
	(function ($) {
    	$(function() {
            $('#ei-slider').eislideshow({
    			easing		: 'easeOutExpo',
    			titleeasing	: 'easeOutExpo',
    			titlespeed	: 1200,
    			autoplay			: true,
    			slideshow_interval	: 7000,
            });
        });
    })(jQuery);
    ", array('type' => 'inline', 'scope' => 'footer', 'weight' => 3));
}

/* 
 * example elastic markup 
 * 
 * <div id="slider-inner-shadow"></div>
<div id="ei-slider" class="ei-slider">
	<ul class="ei-slider-large">
		<li><img src="http://localhost/icompany/themeforest_package/sites/all/themes/icompany/img/slides/slide1.jpg" alt="" />
			<div class="ei-title">
				<h2 class=' clearfix '><span class='theme-scheme elastic-title-inner'>Lorem Ipsum consequat</span></h2><h3><span class='elastic-body-inner slider-body '>Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				<br/>
				<a class='hidden-phone ei-caption-link btn btn-theme' href='http://example.com'>Get Started</a></h3>
			</div>
		</li>
		<li><img src="http://localhost/icompany/themeforest_package/sites/all/themes/icompany/img/slides/slide2.jpg" alt="" />
			<div class="ei-title">
				<h2 class=' clearfix '><span class='theme-scheme elastic-title-inner'>Lorem Ipsum dolor amet</span></h2><h3><span class='elastic-body-inner slider-body '>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </span>
				<br/>
				<a class='hidden-phone ei-caption-link btn btn-theme' href='#'>Sign up</a></h3>
			</div>
		</li>
		<li><img src="http://localhost/icompany/themeforest_package/sites/all/themes/icompany/img/slides/slide3.jpg" alt="" />
			<div class="ei-title">
				<h2 class=' clearfix '><span class='theme-scheme elastic-title-inner'>Quis nostrud exercitation ullamco</span></h2><h3><span class='elastic-body-inner slider-body '>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </span>
				<br/>
				<a class='hidden-phone ei-caption-link btn btn-theme' href='http://google.com'>Read More</a></h3>
			</div>
		</li>
	</ul>

	<ul class="ei-slider-thumbs">
		<li class="ei-slider-element">
			Current
		</li>
		<li>
			<a href="#">Lorem Ipsum dolor amet</a>
		</li>
		<li>
			<a href="#">Quis nostrud exercitation ullamco</a>
		</li>
	</ul>
</div>
 */
 

/*
 * ---------------------------------
 * Piecemaker slider 
 * Note: addition callback funtion for submit button has been added in slider-options.php (piecemaker_slider_helper)
 * ---------------------------------
 */



function icomp_prepare_piecemaker(){
	
	// Open file and write XML stuffs in it	
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path = rtrim($path, "/\\");
	$file = $path . '/' . base_path()  . drupal_get_path('theme', 'icompany') . '/sliders/piecemaker/piecemaker.xml';

	$fp = fopen($file, 'r+');
	$fstring = fread($fp, filesize($file));	
	
	// every timy when theme settings form is submitted, piecemaker_slider_helper() from icompany_module.module function writes 'empty' keyword in it
	if($fstring == 'empty'){
		$output = '';
		
		$output .= '<?xml version="1.0" encoding="utf-8"?>';
		$output .= '<Piecemaker>';
		$output .= '<Contents>';
		for ($i=1; $i < 10; $i++) {						
				
			$img = theme_get_setting('slide' . $i . '_image_path');
			$title = t(theme_get_setting('slide' . $i . '_title'));
			$caption_text = t(theme_get_setting('slide' . $i . '_caption'));
			$btn_text = t(theme_get_setting('slide' . $i . '_btn_title'));
			$btn_link = t(theme_get_setting('slide' . $i . '_btn_link'));
			
			if($img != ''){
				
				
				// IMAGE URL
				$output .= '<Image Source="'. $img .'" Title="'. $title .'">';
				
					//caption
					$output .= '<Text><p class="piecemaker-caption-body">';
					
					$output .= '<h2>'. $title .'</h2>'. $caption_text ;
					
					$output .= '</p></Text>';
					
					// link
					if($btn_link != '')
					$output .= '<Hyperlink URL="'. $btn_link .'" />';
					
				$output .= '</Image>';
				
			}
		}
		$output .= '</Contents>';
		
		$output .= '<Settings ImageWidth="1050" ImageHeight="400" LoaderColor="0x333333" InnerSideColor="0x222222" SideShadowAlpha="0.5" DropShadowAlpha="0.4" DropShadowDistance="25" DropShadowScale=".95" DropShadowBlurX="50" DropShadowBlurY="6" MenuDistanceX="20" MenuDistanceY="50" MenuColor1="0x999999" MenuColor2="0x333333" MenuColor3="0xFFFFFF" ControlSize="100" ControlDistance="20" ControlColor1="0x222222" ControlColor2="0xFFFFFF" ControlAlpha="0.8" ControlAlphaOver="0.95" ControlsX="450" ControlsY="280&#xD;&#xA;" ControlsAlign="center" TooltipHeight="30" TooltipColor="0x222222" TooltipTextY="5" TooltipTextStyle="P-Italic" TooltipTextColor="0xFFFFFF" TooltipMarginLeft="5" TooltipMarginRight="7" TooltipTextSharpness="50" TooltipTextThickness="-100" InfoWidth="400" InfoBackground="0xFFFFFF" InfoBackgroundAlpha="0.95" InfoMargin="15" InfoSharpness="0" InfoThickness="0" Autoplay="10" FieldOfView="45"></Settings>';
		
		
		// add transition rules
		$output .= '<Transitions>';

		for ($i=1; $i < 10; $i++) {
			$img_for_thumb = theme_get_setting('slide' . $i . '_image_path');
			
			if($img_for_thumb != ''){

				if($i == 1){
					$output .= '<Transition Pieces="9" Time="1.2" Transition="easeInOutBack" Delay="0.1" DepthOffset="300" CubeDistance="30"></Transition>';
				}
				if($i == 2){
					$output .= '<Transition Pieces="15" Time="3" Transition="easeInOutElastic" Delay="0.03" DepthOffset="200" CubeDistance="10"></Transition>';
				}
				if($i == 3){
					$output .= '<Transition Pieces="5" Time="1.3" Transition="easeInOutCubic" Delay="0.1" DepthOffset="500" CubeDistance="50"></Transition>';
				}
				if($i == 4){
					$output .= '<Transition Pieces="9" Time="1.25" Transition="easeInOutBack" Delay="0.1" DepthOffset="900" CubeDistance="5"></Transition>';
				}
				else{
					
				}
					
			}
		}
		
		$output .= '</Transitions>';
		
		$output .= '</Piecemaker>';
		
		// if file is epmty wraite output to it
		fclose($fp);
		$fp = fopen($file, 'w+') or print("Can’t open file $file");
		
		//writes first line
		$fout = fwrite($fp, $output);
		
	}
}
 
if(theme_get_setting('slider_type')  == 'piecemaker'){
	drupal_add_js(drupal_get_path('theme', 'icompany') . '/sliders/piecemaker/scripts/swfobject/swfobject.js', array('type' => 'file', 'scope' => 'header', 'group' => 'JS_DEFAULT', 'weight' => 25));
}

/*
 * PIECEMAER EXAMPLE MARKUP
 * 
 * <?xml version="1.0" encoding="utf-8"?>
<Piecemaker>
	<Contents>
		<Image Source="http://localhost/icompany/upgrade/sites/default/files/styles/slider/public/0008020422O-1920x1280.jpg" Title="Unlimited Colors and Easy to customize">
			<Text>
				<p class="piecemaker-caption-body">
					<h2>Unlimited Colors and Easy to customize</h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis ...
				</p>
			</Text>
			<Hyperlink URL="#" />
		</Image>
		<Image Source="http://localhost/icompany/upgrade/sites/default/files/styles/slider/public/triworks_arch2.jpg" Title="Lorem ipsum dolor sit amet">
			<Text>
				<p class="piecemaker-caption-body">
					<h2>Lorem ipsum dolor sit amet</h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis ...
				</p>
			</Text>
			<Hyperlink URL="http://www.example.com" />
		</Image>
	</Contents>
	<Settings ImageWidth="1050" ImageHeight="400" LoaderColor="0x333333" InnerSideColor="0x222222" SideShadowAlpha="0.5" DropShadowAlpha="0.4" DropShadowDistance="25" DropShadowScale=".95" DropShadowBlurX="50" DropShadowBlurY="6" MenuDistanceX="20" MenuDistanceY="50" MenuColor1="0x999999" MenuColor2="0x333333" MenuColor3="0xFFFFFF" ControlSize="100" ControlDistance="20" ControlColor1="0x222222" ControlColor2="0xFFFFFF" ControlAlpha="0.8" ControlAlphaOver="0.95" ControlsX="450" ControlsY="280&#xD;&#xA;" ControlsAlign="center" TooltipHeight="30" TooltipColor="0x222222" TooltipTextY="5" TooltipTextStyle="P-Italic" TooltipTextColor="0xFFFFFF" TooltipMarginLeft="5" TooltipMarginRight="7" TooltipTextSharpness="50" TooltipTextThickness="-100" InfoWidth="400" InfoBackground="0xFFFFFF" InfoBackgroundAlpha="0.95" InfoMargin="15" InfoSharpness="0" InfoThickness="0" Autoplay="10" FieldOfView="45"></Settings>
	<Transitions>
		<Transition Pieces="9" Time="1.2" Transition="easeInOutBack" Delay="0.1" DepthOffset="300" CubeDistance="30"></Transition>
		<Transition Pieces="15" Time="3" Transition="easeInOutElastic" Delay="0.03" DepthOffset="200" CubeDistance="10"></Transition>
		<Transition Pieces="5" Time="1.3" Transition="easeInOutCubic" Delay="0.1" DepthOffset="500" CubeDistance="50"></Transition>
		<Transition Pieces="9" Time="1.25" Transition="easeInOutBack" Delay="0.1" DepthOffset="900" CubeDistance="5"></Transition>
	</Transitions>
</Piecemaker>	
 */ 
