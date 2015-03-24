<?php
	include_once "header.php";
?>
<script src="assets/javascript/plattegrond4.js"></script> <!-- Dit wordt de Javascript die de AJAX-afhandeling gaat doen, en waarin functies voor weergave staan -->

<div class="col-md-12">
<h1>Plattegrond</h1>
</div>

<div class="col-md-12">

	<div class="plattegrond_overlay">
		<svg height="100%" width="100%">
			<!-- Flikker hier de rooms er in adhv de xml -->
<?php
echo "<!-- start -->";

$svgURL = "assets/plattegrond-data/plattegrond4.svg";
include_once("parseSVG.php"); //hier wordt het XML-document gegenereerd.
$roomdump = '';
foreach($xml->room as $room) {
	$roomdump = $roomdump . $room->id . '<br />';
	echo '<polygon points="'.$room->points.'" id="'.$room->id.'poly" onMouseOver="tooltipOn(\''.$room->id.'\')" onMouseOut="tooltipOff(\''.$room->id.'\')" />';
}

foreach($xml->room as $room) {
	$points = explode(" ",$room->points);
	$xMin=10000;
	$xMax=-10000;
	$yMin=10000;
	$yMax=-10000;
	
	foreach($points as $p) {
		$q = explode(",",$p);
		$x = $q[0];
		$y = $q[1];
		
		if ($x < $xMin) $xMin = $x;
		if ($x > $xMax) $xMax = $x;
		if ($y < $yMin) $yMin = $y;
		if ($y > $yMax) $yMax = $y;	
	}
	
	$x = ($xMin + $xMax) / 2;
	$y = ($yMin + $yMax) / 2;
	
	echo '<text id="'.$room->id.'text" x='.$x.' y='.$y.' onMouseOver="tooltipOn(\''.$room->id.'\')" onMouseOut="tooltipOff(\''.$room->id.'\')" >'.
	'<tspan id="'.$room->id.'name" x='.$x.'>'.$room->id.'</tspan>'.
	'<tspan id="'.$room->id.'curr" x='.$x.' dy="15" class="occupationdigit">x</tspan>'.
	'<tspan class="occupationdigit">/</tspan>'.
	'<tspan id="'.$room->id.'max" class="occupationdigit">y</tspan>'.
	'</text>';
}
echo "<!-- end -->";
?>


			
		</svg>
	</div>
	<div class="plattegrond_container">
		<img src="assets/plattegrond-data/plattegrond4.svg" class="plattegrond"/>
	</div>
	
</div>
<?php

	//echo $roomdump; //Dit is handig om alle kamers uit de SVG te halen
	include_once "footer.php";
?>
