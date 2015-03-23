function tooltipOn(str) {
	//document.getElementById(str+"text").style.display="block";
}

function tooltipOff(str) {
	//document.getElementById(str+"text").style.display="block"; 
}

window.onload = function() {
	window.setInterval("process()",1000);
}

function process() {
	getFileFromServer(function(text) {
    if (text === null) {
        // An error occurred
        alert("It didn't load!");
    }
    else {
        var lines = text.split('\n');
        for (var i = 1; i < lines.length - 1; i++) {
			updateRoom(lines[i]);
		}
    }
});
}

function getFileFromServer(doneCallback) {
    var xhr;
	var url = "assets/plattegrond-data/plattegrond4.csv";

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

function updateRoom(data) {
	var numbers = data.split(",");
	var id = numbers[0];
	var roomtype = numbers[1];
	var currpeople = numbers[2];
	var maxpeople = numbers[3];
	
	if (roomtype === "Collegezaal") {
		var currId = id + "curr";
		var maxId = id + "max";
		document.getElementById(currId).textContent = currpeople;
		document.getElementById(maxId).textContent = maxpeople;
		
		//var polyId = id + "poly";
		
	}
	/*
	var idDiv = "classroom_" + numbers[0];
	var redness = Math.round((currpeople/maxpeople)*255);
	
	var greenness = 255 - redness;
	var color = "rgb(" + redness + "," + greenness + ",0)";
	//alert(color);
	document.getElementById(idDiv).style.backgroundColor = color;*/
}

















