

<!-- BODY CONTENT -->




 <div class="chart">
        <h2>Daily View</h2>
        <div id="container" style="width:100%; height:400px;padding:20px;"></div>

        <h3>Overview <?php echo $lecture2; ?></h3>
       <table class="table">
          <tr>
            <td>Usage nr</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Numer of students</td>
            <td>40</td>
            <td>35</td>
            <td>40</td>
            <td>25</td>
          </tr>
          <tr>
            <td>Utilization</td>
            <td>74%</td>
            <td>65%</td>
            <td>74%</td>
            <td>46%</td>
          </tr>
        </table>
    </div>














 <div class="chart">
        <h2>Weekly View</h2>
        <div id="container2" style="width:100%; height:400px;padding:20px;"></div>

        <h3>Overview <?php echo $lecture2; ?></h3>
       <table class="table">
          <tr>
            <td>Week</td>
            <td>36</td>
            <td>37</td>
            <td>38</td>
            <td>39</td>
            <td>40</td>
          </tr>
          <tr>
            <td>Numer of students</td>
            <td>40</td>
            <td>35</td>
            <td>40</td>
            <td>25</td>
            <td>39</td>
          </tr>
          <tr>
            <td>Utilization</td>
            <td>74%</td>
            <td>65%</td>
            <td>74%</td>
            <td>46%</td>
            <td>66%</td>
          </tr>
        </table>
    </div>







 <div class="chart">
        <h2>Montly View</h2>
        <div id="container3" style="width:100%; height:400px;padding:20px;"></div>

        <h3>Overview <?php echo $lecture2; ?></h3>
       <table class="table">
          <tr>
            <td>Month</td>
            <td>Jan</td>
            <td>Feb</td>
            <td>Mar</td>
            <td>Apr</td>
          </tr>
          <tr>
            <td>Numer of students</td>
            <td>40</td>
            <td>35</td>
            <td>40</td>
            <td>25</td>
          </tr>
          <tr>
            <td>Utilization</td>
            <td>74%</td>
            <td>65%</td>
            <td>74%</td>
            <td>46%</td>
          </tr>
        </table>
    </div>










<script>

Highcharts.setOptions({
  chart: {
    defaultSeriesType: 'column',
    backgroundColor: '#fff',
  }
});


$('#container').highcharts({
    data: {
        googleSpreadsheetKey: '1BPG6Pa81fPHBvUCHvNypnPyhLqT_zZfAvtCnMOcpeqM',
        googleSpreadsheetWorksheet: 1
    },
    title: {
      <?php echo $lecture; ?>
    },
        yAxis: [{ //--- Primary yAxis
            title: {
                text: 'Number of Students',
            }
        }, { //--- Secondary yAxis
            title: {
                text: 'Utilizaion',
            },
            opposite: true,
            max: 100,
            min: 0
            
        }],

});


$('#container2').highcharts({
    data: {
        googleSpreadsheetKey: '1BPG6Pa81fPHBvUCHvNypnPyhLqT_zZfAvtCnMOcpeqM',
        googleSpreadsheetWorksheet: 2
    },
    title: {
      <?php echo $lecture; ?>
    },
        yAxis: [{ //--- Primary yAxis
            title: {
                text: 'Number of Students',
            }
        }, { //--- Secondary yAxis
            title: {
                text: 'Utilizaion',
            },
            opposite: true,
            max: 100,
            min: 0
            
        }],

});

$('#container3').highcharts({
    data: {
        googleSpreadsheetKey: '1BPG6Pa81fPHBvUCHvNypnPyhLqT_zZfAvtCnMOcpeqM',
        googleSpreadsheetWorksheet: 3
    },
    title: {
      <?php echo $lecture; ?>
    },
        yAxis: [{ //--- Primary yAxis
            title: {
                text: 'Number of Students',
            }
        }, { //--- Secondary yAxis
            title: {
                text: 'Utilizaion',
            },
            opposite: true,
            max: 100,
            min: 0
            
        }],

});

</script>





<!-- END BODY -->