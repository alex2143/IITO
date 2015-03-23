<?php
    include_once "header.php";

?>

<div style="
    padding: 20px;
    background-color: rgb(247, 247, 247);
    margin: 20px 54px;
    border: 1px solid rgb(228, 228, 228);
">

<h2>Select your lecture room: </h2>



<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#carre" aria-controls="carre" role="tab" data-toggle="tab">Carre</a></li>
    <li role="presentation"><a href="#cubicus" aria-controls="cubicus" role="tab" data-toggle="tab">Cubicus</a></li>
    <li role="presentation"><a href="#hal" aria-controls="hal" role="tab" data-toggle="tab">Hal</a></li>
    <li role="presentation"><a href="#horstsring" aria-controls="horstsring" role="tab" data-toggle="tab">Horstsring</a></li>
    <li role="presentation"><a href="#ravelijn" aria-controls="ravelijn" role="tab" data-toggle="tab">Ravelijn</a></li>
    <li role="presentation"><a href="#waaier" aria-controls="waaier" role="tab" data-toggle="tab">Waaier</a></li>
    <li role="presentation"><a href="#spiegel" aria-controls="spiegel" role="tab" data-toggle="tab">Spiegel</a></li>
    <a class="btn btn-primary" href="?lec=compare" role="button">Compare All Lecture Rooms</a>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content" style="padding: 15px 0;">
    <div role="tabpanel" class="tab-pane" id="carre">
        <a class="btn btn-default" href="?lec=Carre%202G" role="button">Carré 2G</a>
        <a class="btn btn-default" href="?lec=Carre%202H" role="button">Carré 2H</a>
        <a class="btn btn-default" href="?lec=Carre%202K" role="button">Carré 2K</a>
        <a class="btn btn-default" href="?lec=Carre%202L" role="button">Carré 2L</a>
        <a class="btn btn-default" href="?lec=Carre%202M" role="button">Carré 2M</a>
        <a class="btn btn-default" href="?lec=Carre%202N" role="button">Carré 2N</a>
        <a class="btn btn-default" href="?lec=Carre%203A" role="button">Carré 3A</a>
        <a class="btn btn-default" href="?lec=Carre%203B" role="button">Carré 3B</a>
        <a class="btn btn-default" href="?lec=Carre%203C" role="button">Carré 3C</a>
        <a class="btn btn-default" href="?lec=Carre%203D" role="button">Carré 3D</a>
        <a class="btn btn-default" href="?lec=Carre%203E" role="button">Carré 3E</a>
        <a class="btn btn-default" href="?lec=Carre%203F" role="button">Carré 3F</a>
        <a class="btn btn-default" href="?lec=Carre%203H" role="button">Carré 3H</a>
        <a class="btn btn-default" href="?lec=Carre%204A" role="button">Carré 4A</a>
    </div>

    <div role="tabpanel" class="tab-pane" id="cubicus">
        <a class="btn btn-default" href="?lec=Cubicus%20B101" role="button">Cubicus B101</a>
        <a class="btn btn-default" href="?lec=Cubicus%20B103" role="button">Cubicus B103</a>
        <a class="btn btn-default" href="?lec=Cubicus%20B209" role="button">Cubicus B209</a>
        <a class="btn btn-default" href="?lec=>Cubicus%20C238" role="button">Cubicus C238</a>
    </div>

    <div role="tabpanel" class="tab-pane" id="hal">
        <a class="btn btn-default" href="?lec=Hal%20B%202A" role="button">Hal B 2A</a>
        <a class="btn btn-default" href="?lec=Hal%20B%202B" role="button">Hal B 2B</a>
        <a class="btn btn-default" href="?lec=Hal%20B%202C" role="button">Hal B 2C</a>
        <a class="btn btn-default" href="?lec=Hal%20B%202D" role="button">Hal B 2D</a>
        <a class="btn btn-default" href="?lec=Hal%20B%202E" role="button">Hal B 2E</a>
        <a class="btn btn-default" href="?lec=Hal%20B%202F" role="button">Hal B 2F</a>
    </div>
    <div role="tabpanel" class="tab-pane" id="horstsring">
        <a class="btn btn-default" href="?lec=Horstsromg%20C101" role="button">Horstsromg C101</a>
        <a class="btn btn-default" href="?lec=Horstsromg%20N109" role="button">Horstsromg N109</a>
    </div>
    <div role="tabpanel" class="tab-pane" id="ravelijn">
        <a class="btn btn-default" href="?lec=Ravelijn%201501" role="button">Ravelijn 1501</a>
        <a class="btn btn-default" href="?lec=Ravelijn%202231" role="button">Ravelijn 2231</a>
        <a class="btn btn-default" href="?lec=Ravelijn%202237" role="button">Ravelijn 2237</a>
        <a class="btn btn-default" href="?lec=Ravelijn%202334" role="button">Ravelijn 2334</a>
        <a class="btn btn-default" href="?lec=Ravelijn%202336" role="button">Ravelijn 2336</a>
        <a class="btn btn-default" href="?lec=Ravelijn%203501" role="button">Ravelijn 2501</a>
        <a class="btn btn-default" href="?lec=Ravelijn%202502" role="button">Ravelijn 2502</a>
        <a class="btn btn-default" href="?lec=Ravelijn%202504" role="button">Ravelijn 2504</a>
        <a class="btn btn-default" href="?lec=Ravelijn%203334" role="button">Ravelijn 3334</a>
        <a class="btn btn-default" href="?lec=Ravelijn%203336" role="button">Ravelijn 3336</a>
        <a class="btn btn-default" href="?lec=Ravelijn%204343" role="button">Ravelijn 4343</a>
        <a class="btn btn-default" href="?lec=Ravelijn%204336" role="button">Ravelijn 4336</a>
    </div>
    <div role="tabpanel" class="tab-pane" id="waaier">
        <a class="btn btn-default" href="?lec=Waaier%201" role="button">Waaier 1</a>
        <a class="btn btn-default" href="?lec=Waaier%202" role="button">Waaier 2</a>
        <a class="btn btn-default" href="?lec=Waaier%203" role="button">Waaier 3</a>
        <a class="btn btn-default" href="?lec=Waaier%204" role="button">Waaier 4</a>
    </div>
    <div role="tabpanel" class="tab-pane" id="spiegel">
        <a class="btn btn-default" href="?lec=Spiegel%201" role="button">Spiegel 1</a>
        <a class="btn btn-default" href="?lec=Spiegel%202" role="button">Spiegel 2</a>
        <a class="btn btn-default" href="?lec=Spiegel%203" role="button">Spiegel 3</a>
        <a class="btn btn-default" href="?lec=Spiegel%204" role="button">Spiegel 4</a>
        <a class="btn btn-default" href="?lec=Spiegel%205" role="button">Spiegel 5</a>
        <a class="btn btn-default" href="?lec=Spiegel%206" role="button">Spiegel 6</a>
        <a class="btn btn-default" href="?lec=Spiegel%207" role="button">Spiegel 7</a>
    </div>
  </div>

</div>









</div>












<?php

$lec = isset($_GET['lec']) ? $_GET['lec'] : '';
    



    if ($lec == 'compare') {

        include 'lectures/compare.php';
    }

    elseif (isset($_GET['lec'])) {
    
    $lokaal = $lec;
    $lecture = "text: '" . $lokaal . "'";
    $lecture2 = $lokaal;
    include 'lectures/room.php';

    } 

    else {
        echo "";
    }
    
    

?>










<script>
    $('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})


$('#myTab a[href="#profile"]').tab('show') // Select tab by name
$('#myTab a:first').tab('show') // Select first tab
$('#myTab a:last').tab('show') // Select last tab
$('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
</script>






<?php
    include_once "footer.php";
?>
