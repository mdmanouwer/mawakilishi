<?php
/* COPYRIGHT
------------------------------------------------------------------  
  Omni Magazine for Drupal 8.x - Version 1.0                           
  Copyright (C) 2016 esors.com All Rights Reserved.           
  @license - Copyrighted Commercial Software                   
------------------------------------------------------------------  
  Theme Name: Omni Magazine                                            
  Author: ESORS                                           
  Date: 15th February 2016                                        
  Website: http://www.esors.com/                              
------------------------------------------------------------------  
  This file may not be redistributed in whole or   
  significant part.                                            
----------------------------------------------------------------*/   
?>

<?php

$info = array(
  'fields' => array(
    'title'          => t('Title'),
    'text'           => t('Text'),
    'metatext'       => t('Meta Text'),
    'link'           => t('Link'),  
    'linkactive'     => t('Link Active'),    
    'border'         => t('Border'),
    'base'           => t('Background'),
    'fg'             => t('Foreground'),
    'headertext'     => t('Header Text'),
    'headerbg'       => t('Header Background'),
    'footertext'     => t('Footer Text'),
    'footerbg'       => t('Footer Background'),    
    'commentbg'      => t('Comment Background'),
    'pmlink'         => t('Primary Menu Link'),
    'pmlinkactive'   => t('Primary Menu Active Link'),
    'pmbg'           => t('Primary Menu Background'),
    'pmbgactive'     => t('Primary Menu Active Background'),
    'mmtext'         => t('Mega Menu Text'),
    'mmbg'           => t('Mega Menu Background'),
    'smlink'         => t('Secondary Menu Link'),
    'smlinkactive'   => t('Secondary Menu Active Link'),
    'smbg'           => t('Secondary Menu Background'),
    'smbgactive'     => t('Secondary Menu Active Background'),
    'sbtext'         => t('Search Box Text'),
    'sbtextactive'   => t('Search Box Active Text'),
    'sbbg'           => t('Search Box Background'),
    'sbbgactive'     => t('Search Box Active Background'),
    'forumtext'      => t('Forum Container Text'),
    'forumlink'      => t('Forum Container Link'),
    'forumbg'        => t('Forum Container Background'),
    'forumsubtext'   => t('Forum Sub-container text'),
    'forumsubbg'     => t('Forum Sub-container Background'),
  ),
  'schemes' => array(
    'default' => array(
      'title' => t('Default Compact'),
      'colors' => array(
        'title'          => '#333333',
        'text'           => '#686868',
        'metatext'       => '#999999',
        'link'           => '#38b1eb',  
        'linkactive'     => '#f09943',
        'border'         => '#eeeeee', 
        'base'           => '#fafafa',
        'fg'             => '#ffffff',
        'headertext'     => '#f1f1f1',
        'headerbg'       => '#222333',
        'footertext'     => '#676767',
        'footerbg'       => '#222334',        
        'commentbg'      => '#f9f9f9',
        'pmlink'         => '#fcfcfc',
        'pmlinkactive'   => '#fdfdfd',
        'pmbg'           => '#222335',
        'pmbgactive'     => '#38b1ec',
        'mmtext'         => '#666666',
        'mmbg'           => '#fefefe',
        'smlink'         => '#696969',
        'smlinkactive'   => '#f2f2f2', 
        'smbg'           => '#000000',
        'smbgactive'     => '#222336',
        'sbtext'         => '#888888',
        'sbtextactive'   => '#fbfbfb',
        'sbbg'           => '#333444',
        'sbbgactive'     => '#444555',
        'forumtext'      => '#f3f3f3',
        'forumlink'      => '#f09944',
        'forumbg'        => '#38b1ed',
        'forumsubtext'   => '#38b1ee',
        'forumsubbg'     => '#e8f8ff',
      ),
    ),
    'default_full' => array(
      'title' => t('Default Full'),
      'colors' => array(
        'title'          => '#333333',
        'text'           => '#686868',
        'metatext'       => '#999999',
        'link'           => '#38b1eb',  
        'linkactive'     => '#f09943',
        'border'         => '#eeeeee', 
        'base'           => '#fafafa',
        'fg'             => '#ffffff',
        'headertext'     => '#ffffff',
        'headerbg'       => '#222333',
        'footertext'     => '#686868',
        'footerbg'       => '#222333',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#ffffff',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#333444',
        'pmbgactive'     => '#38b1eb',
        'mmtext'         => '#686868',
        'mmbg'           => '#ffffff',
        'smlink'         => '#686868',
        'smlinkactive'   => '#ffffff', 
        'smbg'           => '#000000',
        'smbgactive'     => '#222333',
        'sbtext'         => '#888888',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#444555',
        'sbbgactive'     => '#444555',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#f09943',
        'forumbg'        => '#38b1eb',
        'forumsubtext'   => '#38b1eb',
        'forumsubbg'     => '#e8f8ff',
      ),
    ),
    'default_box' => array(
      'title' => t('Default Box'),
      'colors' => array(
        'title'          => '#333333',
        'text'           => '#686868',
        'metatext'       => '#999999',
        'link'           => '#38b1eb',  
        'linkactive'     => '#f09943',
        'border'         => '#eeeeee', 
        'base'           => '#fafafa',
        'fg'             => '#ffffff',
        'headertext'     => '#686868',
        'headerbg'       => '#fafafa',
        'footertext'     => '#686868',
        'footerbg'       => '#222333',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#ffffff',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#222333',
        'pmbgactive'     => '#38b1eb',
        'mmtext'         => '#686868',
        'mmbg'           => '#ffffff',
        'smlink'         => '#686868',
        'smlinkactive'   => '#686868', 
        'smbg'           => '#000000',
        'smbgactive'     => '#fafafa',
        'sbtext'         => '#888888',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#333444',
        'sbbgactive'     => '#444555',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#f09943',
        'forumbg'        => '#38b1eb',
        'forumsubtext'   => '#38b1eb',
        'forumsubbg'     => '#e8f8ff',
      ),
    ),
    'midnight_compact' => array(
      'title' => t('Midnight Compact'),
      'colors' => array(
        'title'          => '#888888',
        'text'           => '#888888',
        'metatext'       => '#555555',
        'link'           => '#f09943',  
        'linkactive'     => '#38b1eb',
        'border'         => '#222222', 
        'base'           => '#191919',
        'fg'             => '#0a0a0a',
        'headertext'     => '#888888',
        'headerbg'       => '#0a0a0a',
        'footertext'     => '#888888',
        'footerbg'       => '#0a0a0a',        
        'commentbg'      => '#000000',
        'pmlink'         => '#f09943',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#0a0a0a',
        'pmbgactive'     => '#38b1eb',
        'mmtext'         => '#888888',
        'mmbg'           => '#0a0a0a',
        'smlink'         => '#686868',
        'smlinkactive'   => '#f09943', 
        'smbg'           => '#000000',
        'smbgactive'     => '#0a0a0a',
        'sbtext'         => '#888888',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#191919',
        'sbbgactive'     => '#222222',
        'forumtext'      => '#38b1eb',
        'forumlink'      => '#f09943',
        'forumbg'        => '#191919',
        'forumsubtext'   => '#38b1eb',
        'forumsubbg'     => '#191919',
      ),
    ),
    'midnight_full' => array(
      'title' => t('Midnight Full'),
      'colors' => array(
        'title'          => '#888888',
        'text'           => '#888888',
        'metatext'       => '#555555',
        'link'           => '#f09943',  
        'linkactive'     => '#38b1eb',
        'border'         => '#222222', 
        'base'           => '#191919',
        'fg'             => '#0a0a0a',
        'headertext'     => '#888888',
        'headerbg'       => '#0a0a0a',
        'footertext'     => '#888888',
        'footerbg'       => '#0a0a0a',        
        'commentbg'      => '#000000',
        'pmlink'         => '#f09943',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#0a0a0a',
        'pmbgactive'     => '#38b1eb',
        'mmtext'         => '#888888',
        'mmbg'           => '#0a0a0a',
        'smlink'         => '#686868',
        'smlinkactive'   => '#f09943', 
        'smbg'           => '#000000',
        'smbgactive'     => '#0a0a0a',
        'sbtext'         => '#888888',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#191919',
        'sbbgactive'     => '#222222',
        'forumtext'      => '#38b1eb',
        'forumlink'      => '#f09943',
        'forumbg'        => '#191919',
        'forumsubtext'   => '#38b1eb',
        'forumsubbg'     => '#191919',
      ),
    ),
    'midnight_box' => array(
      'title' => t('Midnight Box'),
      'colors' => array(
        'title'          => '#888888',
        'text'           => '#888888',
        'metatext'       => '#555555',
        'link'           => '#f09943',  
        'linkactive'     => '#38b1eb',
        'border'         => '#222222', 
        'base'           => '#191919',
        'fg'             => '#0a0a0a',
        'headertext'     => '#888888',
        'headerbg'       => '#191919',
        'footertext'     => '#888888',
        'footerbg'       => '#0a0a0a',        
        'commentbg'      => '#000000',
        'pmlink'         => '#f09943',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#0a0a0a',
        'pmbgactive'     => '#38b1eb',
        'mmtext'         => '#888888',
        'mmbg'           => '#0a0a0a',
        'smlink'         => '#686868',
        'smlinkactive'   => '#ffffff', 
        'smbg'           => '#000000',
        'smbgactive'     => '#191919',
        'sbtext'         => '#888888',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#191919',
        'sbbgactive'     => '#222222',
        'forumtext'      => '#38b1eb',
        'forumlink'      => '#f09943',
        'forumbg'        => '#191919',
        'forumsubtext'   => '#38b1eb',
        'forumsubbg'     => '#191919',
      ),
    ),
    'cream_compact' => array(
      'title' => t('Cream Compact'),
      'colors' => array(
        'title'          => '#6C6164',
        'text'           => '#6C6164',
        'metatext'       => '#999999',
        'link'           => '#B96B6B',  
        'linkactive'     => '#BF956F',
        'border'         => '#E5DDD3', 
        'base'           => '#E5DDD3',
        'fg'             => '#F5F1EB',
        'headertext'     => '#ffffff',
        'headerbg'       => '#6C6164',
        'footertext'     => '#BF956F',
        'footerbg'       => '#32262C',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#32262C',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#ffffff',
        'pmbgactive'     => '#B96B6B',
        'mmtext'         => '#6C6164',
        'mmbg'           => '#F5F1EB',
        'smlink'         => '#686868',
        'smlinkactive'   => '#32262C', 
        'smbg'           => '#32262C',
        'smbgactive'     => '#6C6164',
        'sbtext'         => '#888888',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#191919',
        'sbbgactive'     => '#222222',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#B96B6B',
        'forumbg'        => '#6C6164',
        'forumsubtext'   => '#BF956F',
        'forumsubbg'     => '#E5DDD3',
      ),
    ),
    'glory_compact' => array(
      'title' => t('Glory Compact'),
      'colors' => array(
        'title'          => '#333333',
        'text'           => '#686868',
        'metatext'       => '#999999',
        'link'           => '#E0162B',  
        'linkactive'     => '#0052A5',
        'border'         => '#eeeeee', 
        'base'           => '#fafafa',
        'fg'             => '#ffffff',
        'headertext'     => '#686868',
        'headerbg'       => '#ffffff',
        'footertext'     => '#ffffff',
        'footerbg'       => '#202A5D',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#0052A5',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#ffffff',
        'pmbgactive'     => '#0052A5',
        'mmtext'         => '#0052A5',
        'mmbg'           => '#ffffff',
        'smlink'         => '#ffffff',
        'smlinkactive'   => '#686868', 
        'smbg'           => '#941324',
        'smbgactive'     => '#ffffff',
        'sbtext'         => '#999999',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#fafafa',
        'sbbgactive'     => '#eeeeee',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#E0162B',
        'forumbg'        => '#0052A5',
        'forumsubtext'   => '#686868',
        'forumsubbg'     => '#fafafa',
      ),
    ),
    'sky_compact' => array(
      'title' => t('Sky Compact'),
      'colors' => array(
        'title'          => '#525453',
        'text'           => '#686868',
        'metatext'       => '#949ba1',
        'link'           => '#ff774f',  
        'linkactive'     => '#f09943',
        'border'         => '#f1f1f1', 
        'base'           => '#fafafa',
        'fg'             => '#ffffff',
        'headertext'     => '#ffffff',
        'headerbg'       => '#53abee',
        'footertext'     => '#686868',
        'footerbg'       => '#222333',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#ffffff',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#53abee',
        'pmbgactive'     => '#f09943',
        'mmtext'         => '#686868',
        'mmbg'           => '#ffffff',
        'smlink'         => '#ffffff',
        'smlinkactive'   => '#ffffff', 
        'smbg'           => '#4ea1e0',
        'smbgactive'     => '#53abee',
        'sbtext'         => '#888888',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#333444',
        'sbbgactive'     => '#444555',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#ff774f',
        'forumbg'        => '#53abee',
        'forumsubtext'   => '#949ba1',
        'forumsubbg'     => '#fafafa',
      ),
    ),
    'sky_full' => array(
      'title' => t('Sky Full'),
      'colors' => array(
        'title'          => '#525453',
        'text'           => '#686868',
        'metatext'       => '#949ba1',
        'link'           => '#ff774f',  
        'linkactive'     => '#f09943',
        'border'         => '#f1f1f1', 
        'base'           => '#fafafa',
        'fg'             => '#ffffff',
        'headertext'     => '#ffffff',
        'headerbg'       => '#53abee',
        'footertext'     => '#686868',
        'footerbg'       => '#222333',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#53abee',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#ffffff',
        'pmbgactive'     => '#f09943',
        'mmtext'         => '#686868',
        'mmbg'           => '#ffffff',
        'smlink'         => '#ffffff',
        'smlinkactive'   => '#ffffff', 
        'smbg'           => '#4ea1e0',
        'smbgactive'     => '#53abee',
        'sbtext'         => '#ffffff',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#53abee',
        'sbbgactive'     => '#4ea1e0',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#ff774f',
        'forumbg'        => '#53abee',
        'forumsubtext'   => '#949ba1',
        'forumsubbg'     => '#fafafa',
      ),
    ),
    'snow_compact' => array(
      'title' => t('Snow Mountain Compact'),
      'colors' => array(
        'title'          => '#433e4b',
        'text'           => '#686868',
        'metatext'       => '#949ba1',
        'link'           => '#3ba0b9',  
        'linkactive'     => '#f4c950',
        'border'         => '#f1f1f1', 
        'base'           => '#caf2fb',
        'fg'             => '#ffffff',
        'headertext'     => '#ffffff',
        'headerbg'       => '#80d2e6',
        'footertext'     => '#ffffff',
        'footerbg'       => '#80d2e6',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#ffffff',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#80d2e6',
        'pmbgactive'     => '#3ba0b9',
        'mmtext'         => '#686868',
        'mmbg'           => '#ffffff',
        'smlink'         => '#ffffff',
        'smlinkactive'   => '#ffffff', 
        'smbg'           => '#9ce4f6',
        'smbgactive'     => '#80d2e6',
        'sbtext'         => '#3ba0b9',
        'sbtextactive'   => '#3ba0b9',
        'sbbg'           => '#9ce4f6',
        'sbbgactive'     => '#caf2fb',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#ffffff',
        'forumbg'        => '#80d2e6',
        'forumsubtext'   => '#80d2e6',
        'forumsubbg'     => '#caf2fb',
      ),
    ),
    'snow_box' => array(
      'title' => t('Snow Mountain Box'),
      'colors' => array(
        'title'          => '#433e4b',
        'text'           => '#686868',
        'metatext'       => '#949ba1',
        'link'           => '#3ba0b9',  
        'linkactive'     => '#f4c950',
        'border'         => '#f1f1f1', 
        'base'           => '#caf2fb',
        'fg'             => '#ffffff',
        'headertext'     => '#3ba0b9',
        'headerbg'       => '#caf2fb',
        'footertext'     => '#ffffff',
        'footerbg'       => '#80d2e6',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#ffffff',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#80d2e6',
        'pmbgactive'     => '#3ba0b9',
        'mmtext'         => '#686868',
        'mmbg'           => '#ffffff',
        'smlink'         => '#ffffff',
        'smlinkactive'   => '#3ba0b9', 
        'smbg'           => '#9ce4f6',
        'smbgactive'     => '#caf2fb',
        'sbtext'         => '#3ba0b9',
        'sbtextactive'   => '#3ba0b9',
        'sbbg'           => '#9ce4f6',
        'sbbgactive'     => '#caf2fb',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#ffffff',
        'forumbg'        => '#80d2e6',
        'forumsubtext'   => '#80d2e6',
        'forumsubbg'     => '#caf2fb',
      ),
    ),
    'dark_blue' => array(
      'title' => t('Dark Blue Compact'),
      'colors' => array(
        'title'          => '#ffffff',
        'text'           => '#aaaaaa',
        'metatext'       => '#999999',
        'link'           => '#7299d5',  
        'linkactive'     => '#e72e1c',
        'border'         => '#3d5063', 
        'base'           => '#253342',
        'fg'             => '#304358',
        'headertext'     => '#ffffff',
        'headerbg'       => '#2d3947',
        'footertext'     => '#ffffff',
        'footerbg'       => '#1e2834',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#ffffff',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#2d3947',
        'pmbgactive'     => '#e72e1c',
        'mmtext'         => '#aaaaaa',
        'mmbg'           => '#304358',
        'smlink'         => '#ffffff',
        'smlinkactive'   => '#ffffff', 
        'smbg'           => '#1e2834',
        'smbgactive'     => '#2d3947',
        'sbtext'         => '#7299d5',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#1e2834',
        'sbbgactive'     => '#253342',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#ffffff',
        'forumbg'        => '#253342',
        'forumsubtext'   => '#7299d5',
        'forumsubbg'     => '#2d3947',
      ),
    ),
    'deep_blue_compact' => array(
      'title' => t('Deep Blue Compact'),
      'colors' => array(
        'title'          => '#ffffff',
        'text'           => '#aaaaaa',
        'metatext'       => '#999999',
        'link'           => '#2da8e1',  
        'linkactive'     => '#f04b48',
        'border'         => '#40404a', 
        'base'           => '#2d2d37',
        'fg'             => '#363640',
        'headertext'     => '#ffffff',
        'headerbg'       => '#f04b48',
        'footertext'     => '#ffffff',
        'footerbg'       => '#24242c',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#ffffff',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#f04b48',
        'pmbgactive'     => '#2da8e1',
        'mmtext'         => '#ffffff',
        'mmbg'           => '#363640',
        'smlink'         => '#ffffff',
        'smlinkactive'   => '#ffffff', 
        'smbg'           => '#2d2d37',
        'smbgactive'     => '#f04b48',
        'sbtext'         => '#2da8e1',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#363640',
        'sbbgactive'     => '#2d2d37',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#ffffff',
        'forumbg'        => '#f04b48',
        'forumsubtext'   => '#2da8e1',
        'forumsubbg'     => '#3f414d',
      ),
    ),
    'deep_blue_box' => array(
      'title' => t('Deep Blue Box'),
      'colors' => array(
        'title'          => '#ffffff',
        'text'           => '#aaaaaa',
        'metatext'       => '#999999',
        'link'           => '#2da8e1',  
        'linkactive'     => '#f04b48',
        'border'         => '#40404a', 
        'base'           => '#2d2d37',
        'fg'             => '#363640',
        'headertext'     => '#ffffff',
        'headerbg'       => '#2d2d37',
        'footertext'     => '#ffffff',
        'footerbg'       => '#24242c',        
        'commentbg'      => '#fafafa',
        'pmlink'         => '#ffffff',
        'pmlinkactive'   => '#ffffff',
        'pmbg'           => '#f04b48',
        'pmbgactive'     => '#2da8e1',
        'mmtext'         => '#ffffff',
        'mmbg'           => '#363640',
        'smlink'         => '#ffffff',
        'smlinkactive'   => '#ffffff', 
        'smbg'           => '#24242c',
        'smbgactive'     => '#2d2d37',
        'sbtext'         => '#2da8e1',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#363640',
        'sbbgactive'     => '#2d2d37',
        'forumtext'      => '#ffffff',
        'forumlink'      => '#ffffff',
        'forumbg'        => '#f04b48',
        'forumsubtext'   => '#2da8e1',
        'forumsubbg'     => '#3f414d',
      ),
    ),
    'brown_compact' => array(
      'title' => t('Brown Compact'),
      'colors' => array(
        'title'          => '#8d6f54',
        'text'           => '#888888',
        'metatext'       => '#777777',
        'link'           => '#8d6f54',  
        'linkactive'     => '#f09943',
        'border'         => '#392d2a', 
        'base'           => '#27201f',
        'fg'             => '#1e1816',
        'headertext'     => '#888888',
        'headerbg'       => '#0a0a0a',
        'footertext'     => '#888888',
        'footerbg'       => '#1e1816',        
        'commentbg'      => '#27201f',
        'pmlink'         => '#8d6f54',
        'pmlinkactive'   => '#1e1816',
        'pmbg'           => '#0a0a0a',
        'pmbgactive'     => '#8d6f54',
        'mmtext'         => '#888888',
        'mmbg'           => '#1e1816',
        'smlink'         => '#686868',
        'smlinkactive'   => '#8d6f54', 
        'smbg'           => '#000000',
        'smbgactive'     => '#0a0a0a',
        'sbtext'         => '#8d6f54',
        'sbtextactive'   => '#ffffff',
        'sbbg'           => '#191919',
        'sbbgactive'     => '#222222',
        'forumtext'      => '#8d6f54',
        'forumlink'      => '#f09943',
        'forumbg'        => '#27201f',
        'forumsubtext'   => '#888888',
        'forumsubbg'     => '#27201f',
      ),
    ),
  ),

  'css' => array(
    'css/theme/omni-color-dynamic.css',
  ),

  'copy' => array(
    'logo.png',
  ),

  'gradients' => array(
  ),

  'preview_html' => 'color/preview.html',
);
