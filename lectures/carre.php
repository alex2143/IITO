


<script>
    $(function () { 
    $('#container').highcharts({

        xAxis: {
            categories: ['1', '2', '3', '4']
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




        title: {
            text: 'Daily view / Carré 2H'
        },
        series: [{
            type: 'column',
            name: 'Number of Students',
            data: [40, 35, 40, 25]
        }, {
            type: 'column',
            name: 'Utilization',
            data: [75, 65, 74, 46],
        }, {
            yAxis: 1,
            name: 'Utilization line',
            data: [75, 65, 74, 46],
        }]



    });
});
</script>


<!-- WEEKLY VIEW -->

<script>
    $(function () { 
    $('#container2').highcharts({


        xAxis: {
            categories: ['36', '37', '38', '39']
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


        title: {
            text: 'Weekly view / Carré 2H'
        },
        series: [{
            type: 'column',
            name: 'Number of Students',
            data: [42, 40, 42, 35]
        }, {
            type: 'column',
            name: 'Utilization',
            data: [78, 74, 78, 65],
        }, {
            yAxis: 1,
            name: 'Utilization line',
            data: [78, 74, 78, 65]
        }]


    });
});
</script>


<!-- MONTHLY VIEW -->

<script>
    $(function () { 
    $('#container3').highcharts({


        xAxis: {
            categories: ['January', 'February', 'March', 'April']
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


        title: {
            text: 'Weekly view / Carré 2H'
        },
        series: [{
            type: 'column',
            name: 'Number of Students',
            data: [40, 40, 34, 36]
        }, {
            type: 'column',
            name: 'Utilization',
            data: [76, 74, 63, 67],
        }, {
            yAxis: 1,
            name: 'Utilization line',
            data: [76, 74, 63, 67]
        }]


    });
});
</script>




    <div class="chart">
        <h2>Daily View</h2>
        <div id="container" style="width:100%; height:400px;padding:20px;"></div>

        <h3>Overview Carre 2G</h3>
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


<h3>Overview Carre 2G</h3>
<table class="table">
  <tr>
    <td>Week</td>
    <td>36</td>
    <td>37</td>
    <td>38</td>
    <td>39</td>
  </tr>
  <tr>
    <td>Numer of students</td>
    <td>42</td>
    <td>40</td>
    <td>42</td>
    <td>35</td>
  </tr>
  <tr>
    <td>Utilization</td>
    <td>78%</td>
    <td>74%</td>
    <td>78%</td>
    <td>65%</td>
  </tr>
</table>



    </div>

    <div class="chart">
        <h2>Montly View</h2>
        <div id="container3" style="width:100%; height:400px;padding:20px;"></div>

        <h3>Overview Carre 2G</h3>


    </div>











