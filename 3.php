<?php
	include_once "header.php";
?>

<!-- Script voor het auto-refreshen van aantallen -->
<script>
window.onload = function() {
	window.setInterval("refreshNumbers()",200);
}

function refreshNumbers() {
	getFileFromServer(function(text) {
    if (text === null) {
        // An error occurred
        alert("It didn't load!");
    }
    else {
        //alert(text);
        var lines = text.split('\n');
        for (var i = 1; i < lines.length - 1; i++) {
			//alert(lines[i]);
			updateClass(lines[i]);
		}
    }
});
}

function getFileFromServer(doneCallback) {
    var xhr;
	var url = "assets/plattegrond-data/plattegrond2.csv";

    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = handleStateChange;
    xhr.open("GET", url, true);
    xhr.send();

    function handleStateChange() {
        if (xhr.readyState === 4) {
            doneCallback(xhr.status == 200 ? xhr.responseText : null);
        }
    }
}

function updateClass(data) {
	var numbers = data.split(",");
	var currpeople = numbers[3];
	var maxpeople = numbers[4];
	var id = "currpeople_" + numbers[0];
	document.getElementById(id).innerHTML = currpeople;
	
	
	var idDiv = "classroom_" + numbers[0];
	var redness = Math.round((currpeople/maxpeople)*255);
	
	var greenness = 255 - redness;
	var color = "rgb(" + redness + "," + greenness + ",0)";
	//alert(color);
	document.getElementById(idDiv).style.backgroundColor = color;
}

</script>

<div class="col-md-12">
	<h1 id="title">Calamities</h1>
</div>
<div class="col-md-12">
	<div class="plattegrond_container">
		<img src="assets/images/plattegrond2.jpg" class="plattegrond" />
	</div>
	
	<div class="overlay_container">
<?php

//open file with rooms
$coordinates = fopen("assets/plattegrond-data/plattegrond2.csv", "r") or die("Unable to open file!");

$coordheader = fgets($coordinates);
while (!feof($coordinates)) {
	$coordsOfItem = explode(",",fgets($coordinates)); //LET OP - delimiter is komma.
	//echo $coordsOfItem[0] . " " . $coordsOfItem[1] . "<br />";
	$id = $coordsOfItem[0];
	$name = $coordsOfItem[1];
	$subject = $coordsOfItem[2];
	$currpeople = $coordsOfItem[3];
	$maxpeople = $coordsOfItem[4];
	$left = $coordsOfItem[5];
	$top = $coordsOfItem[6];
	$width = $coordsOfItem[7];
	$height = $coordsOfItem[8];
	$rotate = (int)$coordsOfItem[9];
	
	echo '
		<div id="classroom_' . $id . '" class="plattegrond_item plattegrond_empty" style="left: ' . $left . 'px; top: ' . $top . 'px; width: ' . $width . 'px; height: ' . $height . 'px; transform: rotate(' . $rotate . 'deg);">
			<div class="classroom_span">
			' . $name .'<br />
			' . $subject . '<br />
			<span id="currpeople_'.$id.'">' . $currpeople . '</span>/<span id="maxpeople'.$id.'">' . $maxpeople . '</span>
			</div>
		</div>
		';
}

fclose($coordinates);

?>
</div>
</div>

<?php
	include_once "footer.php";
?>
