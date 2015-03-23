<?php
	include_once "header.php";
?>
<div class="chart col-md-12">
	<h1>WRB Extension - Expired Reservations</h1>
<h3 style="
    text-align: left;
">Select your lecture room:</h3>



<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#bastille" aria-controls="bastille" role="tab" data-toggle="tab">Bastille</a></li>
    <li role="presentation"><a href="#horsttoren" aria-controls="horsttoren" role="tab" data-toggle="tab">Horsttoren</a></li>
    <li role="presentation"><a href="#itc" aria-controls="itc" role="tab" data-toggle="tab">ITC</a></li>
    <li role="presentation"><a href="#ravelijn" aria-controls="ravelijn" role="tab" data-toggle="tab">Ravelijn</a></li>
    <li role="presentation"><a href="#spiegel" aria-controls="spiegel" role="tab" data-toggle="tab">Spiegel</a></li>
    <li role="presentation"><a href="#vrijhof" aria-controls="vrijhof" role="tab" data-toggle="tab">Vrijhof</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content active" style="padding: 15px 0;">
    <div role="tabpanel" class="tab-pane active" id="bastille">

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Expires in</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>BS 1154</td>
    <td>Expired</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>BS 1155</td>
    <td>Expired</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
    <tr class="bg-success">
    <td>BS 1156</td>
    <td>Expired</td>
    <td>20:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
     <tr class="bg-success">
    <td>BS 1156</td>
    <td>Expired</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr> 
  <tr class="bg-warning">
    <td>BS 3104</td>
    <td>3 minutes</td>
    <td>16:15</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>BS 3207</td>
    <td>15 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>BS 3208</td>
    <td>20 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>BS 3101</td>
    <td>3 hours</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
   <tr class="bg-danger">
    <td>BS 3211</td>
    <td>Not avaibalble</td>
    <td>N.a.</td>
    <td><button type="button" class="btn btn-danger disabled btnw">Not available</button></td>
  </tr>
     <tr class="bg-danger">
    <td>BS 3251</td>
    <td>Not avaibalble</td>
    <td>N.a.</td>
    <td><button type="button" class="btn btn-danger disabled btnw">Not available</button></td>
  </tr>

  </table>
</div>
<!-- RESPONSIVE TABLE -->






<br><br>


<h3 style="text-align: left;">Room Sharing:</h3>

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Occupation</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>BS 1154</td>
    <td>1/6</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
  <tr class="bg-success">
    <td>BS 1155</td>
    <td>2/6</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
    <tr class="bg-success">
    <td>BS 1156</td>
    <td>3/6</td>
    <td>20:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
     <tr class="bg-success">
     <td>BS 1156</td>
    <td>4/6</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr> 
  

  </table>
</div>
<!-- RESPONSIVE TABLE -->







    </div>

    <div role="tabpanel" class="tab-pane" id="horsttoren">

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Expires in</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>HT 2201</td>
    <td>Expired</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>HT 2204</td>
    <td>Expired</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-warning">
    <td>HT 3104</td>
    <td>2 minutes</td>
    <td>16:15</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>HT 3106</td>
    <td>3 minutes</td>
    <td>16:15</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>HT 3207</td>
    <td>7 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
   <tr class="bg-danger">
    <td>HT 3211</td>
    <td>Not avaibalble</td>
    <td>N.a.</td>
    <td><button type="button" class="btn btn-danger disabled btnw">Not available</button></td>
  </tr>

  </table>
</div>
<!-- RESPONSIVE TABLE -->






<br><br>


<h3 style="text-align: left;">Room Sharing:</h3>

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Occupation</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>HT 1154</td>
    <td>1/6</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
  <tr class="bg-success">
    <td>HT 1155</td>
    <td>2/6</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
    <tr class="bg-success">
    <td>HT 1156</td>
    <td>3/6</td>
    <td>20:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
     <tr class="bg-success">
     <td>HT 1156</td>
    <td>4/6</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr> 
  

  </table>
</div>
<!-- RESPONSIVE TABLE -->





    </div>

    <div role="tabpanel" class="tab-pane" id="itc">

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Expires in</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>ITC 2201</td>
    <td>Expired</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>ITC 2204</td>
    <td>Expired</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
    <tr class="bg-success">
    <td>ITC 2309</td>
    <td>Expired</td>
    <td>16:15</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-warning">
    <td>ITC 3104</td>
    <td>2 minutes</td>
    <td>16:15</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>ITC 3207</td>
    <td>7 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>

   <tr class="bg-danger">
    <td>ITC 3211</td>
    <td>Not avaibalble</td>
    <td>N.v.</td>
    <td><button type="button" class="btn btn-danger disabled btnw">Not available</button></td>
  </tr>

  </table>
</div>
<!-- RESPONSIVE TABLE -->




<br><br>


<h3 style="text-align: left;">Room Sharing:</h3>

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Occupation</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>ITC 1154</td>
    <td>1/6</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
  <tr class="bg-success">
    <td>ITC 1155</td>
    <td>2/6</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
    <tr class="bg-success">
    <td>ITC 1156</td>
    <td>3/6</td>
    <td>20:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
     <tr class="bg-success">
     <td>ITC 1156</td>
    <td>4/6</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr> 
  

  </table>
</div>
<!-- RESPONSIVE TABLE -->
    </div>

    <div role="tabpanel" class="tab-pane" id="ravelijn">



<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Expires in</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>RA 2201</td>
    <td>Expired</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>RA 2204</td>
    <td>Expired</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-warning">
    <td>RA 3104</td>
    <td>2 minutes</td>
    <td>16:15</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>RA 3207</td>
    <td>7 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>RA 3208</td>
    <td>10 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>RA 3101</td>
    <td>2 hours</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
   <tr class="bg-danger">
    <td>RA 3211</td>
    <td>Not avaibalble</td>
    <td>N.v.</td>
    <td><button type="button" class="btn btn-danger disabled btnw">Not available</button></td>
  </tr>

  </table>
</div>
<!-- RESPONSIVE TABLE -->




<br><br>


<h3 style="text-align: left;">Room Sharing:</h3>

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Occupation</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>RA 1154</td>
    <td>1/6</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
  <tr class="bg-success">
    <td>RA 1155</td>
    <td>2/6</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
    <tr class="bg-success">
    <td>RA 1156</td>
    <td>3/6</td>
    <td>20:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
     <tr class="bg-success">
     <td>RA 1156</td>
    <td>4/6</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr> 
  

  </table>
</div>
<!-- RESPONSIVE TABLE -->


    </div>

    <div role="tabpanel" class="tab-pane" id="spiegel">

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Expires in</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>SP 2201</td>
    <td>Expired</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>SP 2204</td>
    <td>Expired</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
   <tr class="bg-success">
    <td>SP 2205</td>
    <td>Expired</td>
    <td>16:30</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>SP 2206</td>
    <td>Expired</td>
    <td>17:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>   
  <tr class="bg-warning">
    <td>SP 3103</td>
    <td>2 minutes</td>
    <td>18:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>SP 3207</td>
    <td>7 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>SP 3208</td>
    <td>10 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>SP 3101</td>
    <td>2 hours</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>SP 3103</td>
    <td>2 hours</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>  
   <tr class="bg-danger">
    <td>SP 3211</td>
    <td>Not avaibalble</td>
    <td>N.v.</td>
    <td><button type="button" class="btn btn-danger disabled btnw">Not available</button></td>
  </tr>

  </table>
</div>
<!-- RESPONSIVE TABLE -->




<br><br>


<h3 style="text-align: left;">Room Sharing:</h3>

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Occupation</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>SP 1154</td>
    <td>1/6</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
  <tr class="bg-success">
    <td>SP 1155</td>
    <td>2/6</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
    <tr class="bg-success">
    <td>SP 1156</td>
    <td>3/6</td>
    <td>20:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
     <tr class="bg-success">
     <td>SP 1156</td>
    <td>4/6</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr> 
  

  </table>
</div>
<!-- RESPONSIVE TABLE -->
    </div>



  <div role="tabpanel" class="tab-pane" id="vrijhof">

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Expires in</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>VR 2201</td>
    <td>Expired</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>VR 2204</td>
    <td>Expired</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>VR 2255</td>
    <td>Expired</td>
    <td>20:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>VR 2256</td>
    <td>Expired</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>
  <tr class="bg-success">
    <td>VR 2277</td>
    <td>Expired</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Reserve Now</button></td>
  </tr>


  <tr class="bg-warning">
    <td>VR 3104</td>
    <td>2 minutes</td>
    <td>16:15</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>VR 3207</td>
    <td>7 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>VR 3208</td>
    <td>10 minutes</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
  <tr class="bg-warning">
    <td>VR 3101</td>
    <td>2 hours</td>
    <td>15:00</td>
    <td><button type="button" class="btn btn-warning btnw">Wait till expiration</button></td>
  </tr>
   <tr class="bg-danger">
    <td>VR 3211</td>
    <td>Not avaibalble</td>
    <td>N.v.</td>
    <td><button type="button" class="btn btn-danger disabled btnw">Not available</button></td>
  </tr>

  </table>
</div>
<!-- RESPONSIVE TABLE -->




<br><br>


<h3 style="text-align: left;">Room Sharing:</h3>

<!-- Responsive table -->
<div class="table-responsive">
  <table class="table">
    
  <tr>
    <th>Room</th>
    <th>Occupation</th>
    <th>Available Till</th>
    <th></th>
  </tr>
  <tr class="bg-success">
    <td>VR 1154</td>
    <td>1/6</td>
    <td>

	15:00
    </td>
    <td ><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
  <tr class="bg-success">
    <td>VR 1155</td>
    <td>2/6</td>
    <td>16:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
    <tr class="bg-success">
    <td>VR 1156</td>
    <td>3/6</td>
    <td>20:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr>
     <tr class="bg-success">
     <td>VR 1156</td>
    <td>4/6</td>
    <td>22:00</td>
    <td><button type="button" class="btn btn-success btnw">Join</button></td>
  </tr> 
  

  </table>
</div>
<!-- RESPONSIVE TABLE -->
    </div>








  </div>

</div>









</div>




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
