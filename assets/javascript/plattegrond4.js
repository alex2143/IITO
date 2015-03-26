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
	
	//set the roomtypes as class for the text and 

	

	if (roomtype === "Collegezaal") {
		//ID's
		var currId = id + "curr";
		var maxId = id + "max";
		var polyId = id + "poly";
		var textId = id + "text";

		//classnames
		var textClass = "type"+roomtype+"text";
		var polyClass = "type"+roomtype+"poly";

		
		//alert(textId);
		var poly = document.getElementById(polyId);
		document.getElementById(currId).textContent = currpeople;
		document.getElementById(maxId).textContent = maxpeople;
		//document.getElementById(textId).className += textClass;
		//document.getElementById(polyId).className += polyClass;

		document.getElementById(textId).setAttribute("class",textClass);
		poly.setAttribute("class",polyClass);
		var redness = Math.round((currpeople/maxpeople)*255);
		var greenness = 255 - redness;
		var color = "rgb(" + redness + "," + greenness + ",0)";
		//poly.style.backgroundColor = color;
		poly.setAttribute("fill",color);



	}
	/*
	var idDiv = "classroom_" + numbers[0];
	var redness = Math.round((currpeople/maxpeople)*255);
	
	var greenness = 255 - redness;
	var color = "rgb(" + redness + "," + greenness + ",0)";
	//alert(color);
	document.getElementById(idDiv).style.backgroundColor = color;*/
}

















