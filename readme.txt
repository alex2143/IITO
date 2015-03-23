Hee,

Klein beetje uitleg over de structuur en hoe alles is ingedeeld en zo.

Mapstructuur: de php-bestanden zelf, waar de website uit bestaat, staan in de root-directory. In assets staan alle hulpbestanden, afbeeldingen, plugins, data en andere shizzle. Eén mapje per "ding". Afbeeldingen staan in assets/images, en je refereert hier op de volgende manier naar:
<img src="assets/images/afbeelding.png" />

De stukken code die op elke pagina terugkomen, staan in header.php en footer.php. Elke andere pagina (inclusief index.php) begint op de volgende manier:

<?php
	include_once "header.php";
?>

en eindigt op de volgende manier:

<?php
	include_once "footer.php";
?>

Hier tussenin hoef je dus alleen het spul te zetten wat op jouw pagina komt te staan.

Alles wat in php-bestanden niet tussen <?php ... ?> staat, wordt geïnterpreteerd als html. Je kunt html hier dus gewoon in zetten.

Ik heb geprobeerd alles enigszins duidelijk te documenteren en een goede structuur aan te brengen. Mocht je vragen of opmerkingen hebben, vraag raak. Als je dingen aanpast, zou het tof zijn als je dit goed documenteert en/of het mij even meldt (Alexander). Zorg ook voor een lokale back-up zodat je je werk niet onverwacht kwijtraakt als twee edits elkaar kruisen.
