<?php 

/*Css widths for Feature Blocks*/

$featureBlocks = 0;
if ($feature1 != '') $featureBlocks += 1;
if ($feature2 != '') $featureBlocks += 1;
if ($feature3 != '') $featureBlocks += 1;
if ($feature4 != '') $featureBlocks += 1;

switch ($featureBlocks) {
	case 1:
		$featureBlocks = "width100";
		break;
	case 2:
		$featureBlocks = "width50";
		break;
	case 3:
		$featureBlocks = "width33";
		break;
	case 4:
		$featureBlocks = "width25";
		break;
	default:
		$featureBlocks = "";
}

/*Css widths for Column Blocks*/

if ($bottom_sidebar != '') {
  
  $columnBlocks = 0;
  if ($column_1 != '') $columnBlocks += 1;
  if ($column_2 != '') $columnBlocks += 1;

  switch ($columnBlocks) {
	  case 1:
		  $columnBlocks = "width80";
		  break;
	  case 2:
		  $columnBlocks = "width40";
		  break;
	  default:
		  $columnBlocks = "";
  } 

} else {
 
  $columnBlocks = 0;
  if ($column_1 != '') $columnBlocks += 1;
  if ($column_2 != '') $columnBlocks += 1;

  switch ($columnBlocks) {
	  case 1:
		  $columnBlocks = "width100";
		  break;
	  case 2:
		  $columnBlocks = "width50";
		  break;
	  default:
		  $columnBlocks = "";
  }

}

/*Css widths for Custom Blocks*/

$customBlocks = 0;
if ($custom1 != '') $customBlocks += 1;
if ($custom2 != '') $customBlocks += 1;
if ($custom3 != '') $customBlocks += 1;
if ($custom4 != '') $customBlocks += 1;
if ($custom5 != '') $customBlocks += 1;

switch ($customBlocks) {
	case 1:
		$customBlocks = "width100";
		break;
	case 2:
		$customBlocks = "width50";
		break;
	case 3:
		$customBlocks = "width33";
		break;
	case 4:
		$customBlocks = "width25";
		break;
	case 5:
		$customBlocks = "width20";
		break;
	default:
		$customBlocks = "";
}

/*Css widths for extra right boxes*/

$rightBlocks = 0;
if ($rightleft != '') $rightBlocks += 1;
if ($rightright != '') $rightBlocks += 1;


switch ($rightBlocks) {
	case 1:
		$rightBlocks = "width100";
		break;
	case 2:
		$rightBlocks = "width50";
		break;
	default:
		$rightBlocks = "";
}

?>