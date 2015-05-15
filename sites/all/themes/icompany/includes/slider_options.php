<?php 
/*
 * this file will add form on them settings page
 */

$form['slider_settings'] = array(
    '#type' => 'vertical_tabs',
    '#weight' => -1,
); 

$form['slider_settings']['slider_type_tab'] = array(
	'#type' => 'fieldset',
	'#title' => t('Slider setting'),
	'#weight' => 0,
	'#collapsible' => TRUE,
	'#collapsed' => FALSE,
	'#group' => 'slider_settings',
);

$form['slider_settings']['slider_type_tab']['slider_type'] = array(
	'#type' => 'select',
	'#title' => t('Which Slider you want to use?'),
	'#description' => t('Select slider type that you want to use '),
	'#default_value' => theme_get_setting('slider_type'),
	'#options' => array(
	'nivo' => t('Nivo Slider'),
	'piecemaker' => t('Piecemaker Slider'),
	'flex' => t('Flex Slider'),	
	'elastic' => t('Elastic Slider'),	
	'iview' => t('iView Slider'),
	),
);

$form['slider_settings']['slider_type_tab']['slider_info'] = array(
	'#markup' => t('<p>You can add upto 10 slides by filling forms in each tabs i.e. Slide 1, Slide 2....</p>
					<p>After adding slides here, go to block management page and place "iCompany Slider" block in 
					"Slider" region. You can set on which page, slider should appear by configuring this block. </p>
					'),
);

/*
 * --------------------------------------
 *  SLIDE 1
 * --------------------------------------
 */
$form['slider_settings']['slide1'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 1'),
  '#weight' => 1,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide1']['slide1_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide1_image_path'),
);

$form['slider_settings']['slide1']['slide1_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide1_title'),
);

$form['slider_settings']['slide1']['slide1_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide1_caption'),
);

$form['slider_settings']['slide1']['slide1_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide1_btn_title'),
);

$form['slider_settings']['slide1']['slide1_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide1_btn_link'),
);

/*
 * --------------------------------------
 *  SLIDE 2
 * --------------------------------------
 */
$form['slider_settings']['slide2'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 2'),
  '#weight' => 2,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide2']['slide2_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide2_image_path'),
);

$form['slider_settings']['slide2']['slide2_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide2_title'),
);

$form['slider_settings']['slide2']['slide2_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide2_caption'),
);

$form['slider_settings']['slide2']['slide2_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide2_btn_title'),
);

$form['slider_settings']['slide2']['slide2_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide2_btn_link'),
);

/*
 * --------------------------------------
 *  SLIDE 3
 * --------------------------------------
 */
$form['slider_settings']['slide3'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 3'),
  '#weight' => 3,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide3']['slide3_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide3_image_path'),
);

$form['slider_settings']['slide3']['slide3_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide3_title'),
);

$form['slider_settings']['slide3']['slide3_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide3_caption'),
);

$form['slider_settings']['slide3']['slide3_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide3_btn_title'),
);

$form['slider_settings']['slide3']['slide3_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide3_btn_link'),
);

/*
 * --------------------------------------
 *  SLIDE 4
 * --------------------------------------
 */
$form['slider_settings']['slide4'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 4'),
  '#weight' => 4,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide4']['slide4_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide4_image_path'),
);

$form['slider_settings']['slide4']['slide4_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide4_title'),
);

$form['slider_settings']['slide4']['slide4_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide4_caption'),
);

$form['slider_settings']['slide4']['slide4_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide4_btn_title'),
);

$form['slider_settings']['slide4']['slide4_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide4_btn_link'),
);

/*
 * --------------------------------------
 *  SLIDE 5
 * --------------------------------------
 */
$form['slider_settings']['slide5'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 5'),
  '#weight' => 5,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide5']['slide5_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide5_image_path'),
);

$form['slider_settings']['slide5']['slide5_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide5_title'),
);

$form['slider_settings']['slide5']['slide5_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide5_caption'),
);

$form['slider_settings']['slide5']['slide5_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide5_btn_title'),
);

$form['slider_settings']['slide5']['slide5_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide5_btn_link'),
);


/*
 * --------------------------------------
 *  SLIDE 6
 * --------------------------------------
 */
$form['slider_settings']['slide6'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 6'),
  '#weight' => 6,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide6']['slide6_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide6_image_path'),
);

$form['slider_settings']['slide6']['slide6_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide6_title'),
);

$form['slider_settings']['slide6']['slide6_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide6_caption'),
);

$form['slider_settings']['slide6']['slide6_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide6_btn_title'),
);

$form['slider_settings']['slide6']['slide6_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide6_btn_link'),
);

/*
 * --------------------------------------
 *  SLIDE 7
 * --------------------------------------
 */
$form['slider_settings']['slide7'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 7'),
  '#weight' => 7,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide7']['slide7_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide7_image_path'),
);

$form['slider_settings']['slide7']['slide7_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide7_title'),
);

$form['slider_settings']['slide7']['slide7_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide7_caption'),
);

$form['slider_settings']['slide7']['slide7_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide7_btn_title'),
);

$form['slider_settings']['slide7']['slide7_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide7_btn_link'),
);

/*
 * --------------------------------------
 *  SLIDE 8
 * --------------------------------------
 */
$form['slider_settings']['slide8'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 8'),
  '#weight' => 8,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide8']['slide8_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide8_image_path'),
);

$form['slider_settings']['slide8']['slide8_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide8_title'),
);

$form['slider_settings']['slide8']['slide8_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide8_caption'),
);

$form['slider_settings']['slide8']['slide8_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide8_btn_title'),
);

$form['slider_settings']['slide8']['slide8_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide8_btn_link'),
);


/*
 * --------------------------------------
 *  SLIDE 9
 * --------------------------------------
 */
$form['slider_settings']['slide9'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 9'),
  '#weight' => 9,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide9']['slide9_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide9_image_path'),
);

$form['slider_settings']['slide9']['slide9_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide9_title'),
);

$form['slider_settings']['slide9']['slide9_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide9_caption'),
);

$form['slider_settings']['slide9']['slide9_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide9_btn_title'),
);

$form['slider_settings']['slide9']['slide9_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide9_btn_link'),
);

/*
 * --------------------------------------
 *  SLIDE 10
 * --------------------------------------
 */
$form['slider_settings']['slide10'] = array(
  '#type' => 'fieldset',
  '#title' => t('Slide 10'),
  '#weight' => 10,
  '#collapsible' => TRUE,
  '#collapsed' => FALSE,
  '#group' => 'slider_settings',
);

$form['slider_settings']['slide10']['slide10_image_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide image: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter full url to image for this slide. Recommended size is 1170x450px. This field is required for this slide to work. (required field)'),
    '#default_value' => theme_get_setting('slide10_image_path'),
);

$form['slider_settings']['slide10']['slide10_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Title: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter a title text for this slide. It will be used as heading caption. (optional field)'),
    '#default_value' => theme_get_setting('slide10_title'),
);

$form['slider_settings']['slide10']['slide10_caption'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide caption text: '),
    '#size' => 40,
    '#required' => FALSE,
 	'#description' => t('Please enter caption text for this slide. Dont enter too long or too short description. (optional field)'),
    '#default_value' => theme_get_setting('slide10_caption'),
);

$form['slider_settings']['slide10']['slide10_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Add a button to this slide with following text (button text):'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('It is supposed to be a text like \'Read more\'. Leave it blank to stop it from appearing on slide. Target for this button link must be specified  below. (optional field)'),
    '#default_value' => theme_get_setting('slide10_btn_title'),
);

$form['slider_settings']['slide10']['slide10_btn_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Target link for button:'),
    '#size' => 10,
    '#required' => FALSE,
 	'#description' => t('If you added button text above, add a link for that button here. (optional field)'),
    '#default_value' => theme_get_setting('slide10_btn_link'),
);

if(theme_get_setting('slider_type') == 'piecemaker'){
	$form['#submit'][] = 'piecemaker_slider_helper';
}

