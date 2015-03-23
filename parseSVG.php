<?php
/**
 * Dit script moet ge-include worden op pagina's die een plattegrond weergeven.
 * Vlak VOOR het aanroepen van dit script moet een variabele $svgURL aangemaakt worden
 * die verwijst naar de juiste SVG.
 * Deze SVG moet correct geformatteerd zijn.
 * 
 * Vlak NA het aanroepen van dit script bestaat er een variabele $xml
 * met daarin de volgende opmaak:
 * <rooms>
 * 		<room>
 * 			<id>RA1234</id> //ID van de room, moet unique zijn.
 * 			<points>12,34 12,56 34,56 34,34</points> //coördinaten van hoekpunten.
 * 		</room>
 * 		<room>(...)</room>
 * </rooms>
 * 
 * Deze gegevens worden gegenereerd aan de hand van een onzichtbare layer met als label "Rooms" in de SVG 
 * waarin de rooms gerepresenteerd worden door paths.
**/

$svg = file_get_contents($svgURL);
$start1 = strpos($svg,'"Rooms"');
$start2 = strpos($svg,"<path",$start1);
$end = strpos($svg,"</g>",$start1);
$len = $end - $start2;

$pathsStr = substr($svg,$start2,$len);
$paths = explode("<path",$pathsStr); //array containing a dirty string for each room, containing room ID and points

$xml = new SimpleXMLElement('<rooms></rooms>');

foreach($paths as $path) {
	$lines = explode("\n",$path); //for one room, contains all individual data lines
	$id;
	$points;
	foreach($lines as $line) {
		if (strpos($line,'id=') !== false) { //id
			$startid = strpos($line,'"')+1;
			$endid = strpos($line,'"',$startid);
			
			$len = $endid - $startid;
			$id = substr($line,$startid,$len);
		} elseif (strpos($line,'d=') !== false) { //d, or points
			$startid = strpos($line,'"')+3;
			$endid = strpos($line,'"',$startid) -2;
			
			$len = $endid - $startid;
			$points = substr($line,$startid,$len);
		}
	}
	if (isset($points) & isset($id)) {
	$room = $xml->addChild("room");
	$room->addChild("id",$id);
	$room->addChild("points",$points);
	}
}

function xmlResponse() {
	return $xml->asXML();
}


?>
