<?php

function phptemplate_settings($saved_settings) {

 $defaults = array(
    'width_style' => 0,
	'fixedwidth' => 962,
	'leftwidth' => 200,
	'rightwidth' => 200,
	'color' => 0,
	'font_family' => 'Arial, Helvetica, sans-serif',
	'font_size' => '0.8',
	'menu_style' => 0,
  );
  
  $settings = array_merge($defaults, $saved_settings);
  
  $form['color'] = array(
    '#type' => 'select',
    '#title' => t('Color'),
    '#default_value' => $settings['color'],
    '#options' => array (
      0 => t('Style 1'),
      1 => t('Style 2'),
	  2 => t('Style 3'),
	  3 => t('Style 4'),
	  4 => t('Style 5'),
    ),
  );
  
  $form['width_style'] = array(
    '#type' => 'select',
    '#title' => t('Fixed/Fluid'),
    '#default_value' => $settings['width_style'],
    '#options' => array (
      0 => t('Fixed Width'),
      1 => t('Fluid Width'),
    ),
  );
  
  $form['fixedwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Fixed Width Size'),
    '#default_value' => $settings['fixedwidth'],
    '#size' => 4,
    '#maxlength' => 4,
  ); 
  
  $form['leftwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Left Sidebar Width'),
    '#default_value' => $settings['leftwidth'],
    '#size' => 5,
    '#maxlength' => 5,
  );

  $form['rightwidth'] = array(
    '#type' => 'textfield',
    '#title' => t('Right Sidebar Width'),
    '#default_value' => $settings['rightwidth'],
    '#size' => 5,
    '#maxlength' => 5,
  );
  
  $form['font_family'] = array(
    '#type' => 'select',
    '#title' => t('Font Family'),
    '#default_value' => $settings['font_family'],
    '#options' => array (
      'Arial, Helvetica, sans-serif' => t('Arial, Helvetica, Sans-serif'),
      '"Times New Roman", Times, serif' => t('Times New Roman, Times, Serif'),
	  '"Courier New", Courier, monospace' => t('"Courier New", Courier, Monospace'),
	  'Georgia, "Times New Roman", Times, serif' => t('Georgia, "Times New Roman", Times, Serif'),
      'Verdana, Arial, Helvetica, sans-serif' => t('Verdana, Arial, Helvetica, Sans-serif'),
	  'Geneva, Arial, Helvetica, sans-serif' => t('Geneva, Arial, Helvetica, Sans-serif'),
    ),
  );
  
  $form['font_size'] = array(
    '#type' => 'select',
    '#title' => t('Font Size'),
    '#default_value' => $settings['font_size'],
    '#options' => array (
      '0.7' => t('Small'),
	  '0.8' => t('Default'),
	  '0.9' => t('Large'),
	  '1.0' => t('Largest'),  
    ),
  );
  
  $form['menu_style'] = array(
    '#type' => 'select',
    '#title' => t('Menu Style'),
    '#default_value' => $settings['menu_style'],
    '#options' => array (
      0 => t('Regular Suckerfish'),
	  1 => t('Enhanced Suckerfish'),  
    ),
  );
  
  return $form;
}

