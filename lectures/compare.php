


<script>
$(function () {
    /**
     * Create a constructor for sparklines that takes some sensible defaults and merges in the individual
     * chart options. This function is also available from the jQuery plugin as $(element).highcharts('SparkLine').
     */
    Highcharts.SparkLine = function (options, callback) {
        var defaultOptions = {
            chart: {
                renderTo: (options.chart && options.chart.renderTo) || this,
                backgroundColor: null,
                borderWidth: 0,
                type: 'area',
                margin: [2, 0, 2, 0],
                width: 120,
                height: 20,
                style: {
                    overflow: 'visible'
                },
                skipClone: true
            },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            xAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                startOnTick: false,
                endOnTick: false,
                tickPositions: []
            },
            yAxis: {
                endOnTick: false,
                startOnTick: false,
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                tickPositions: [0]
            },
            legend: {
                enabled: false
            },
            tooltip: {
                backgroundColor: null,
                borderWidth: 0,
                shadow: false,
                useHTML: true,
                hideDelay: 0,
                shared: true,
                padding: 0,
                positioner: function (w, h, point) {
                    return { x: point.plotX - w / 2, y: point.plotY - h};
                }
            },
            plotOptions: {
                series: {
                    animation: false,
                    lineWidth: 1,
                    shadow: false,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    marker: {
                        radius: 1,
                        states: {
                            hover: {
                                radius: 2
                            }
                        }
                    },
                    fillOpacity: 0.25
                },
                column: {
                    negativeColor: '#910000',
                    borderColor: 'silver'
                }
            }
        };
        options = Highcharts.merge(defaultOptions, options);

        return new Highcharts.Chart(options, callback);
    };

    var start = +new Date(),
        $tds = $("td[data-sparkline]"),
        fullLen = $tds.length,
        n = 0;

    // Creating 153 sparkline charts is quite fast in modern browsers, but IE8 and mobile
    // can take some seconds, so we split the input into chunks and apply them in timeouts
    // in order avoid locking up the browser process and allow interaction.
    function doChunk() {
        var time = +new Date(),
            i,
            len = $tds.length,
            $td,
            stringdata,
            arr,
            data,
            chart;

        for (i = 0; i < len; i += 1) {
            $td = $($tds[i]);
            stringdata = $td.data('sparkline');
            arr = stringdata.split('; ');
            data = $.map(arr[0].split(', '), parseFloat);
            chart = {};

            if (arr[1]) {
                chart.type = arr[1];
            }
            $td.highcharts('SparkLine', {
                series: [{
                    data: data,
                    pointStart: 1
                }],
                tooltip: {
                    headerFormat: '<span style="font-size: 10px">' + $td.parent().find('th').html() + ', Q{point.x}:</span><br/>',
                    pointFormat: '<b>{point.y}.000</b> EUR'
                },
                chart: chart
            });

            n += 1;

            // If the process takes too much time, run a timeout to allow interaction with the browser
            if (new Date() - time > 500) {
                $tds.splice(0, i + 1);
                setTimeout(doChunk, 0);
                break;
            }

            // Print a feedback on the performance
            if (n === fullLen) {
                $('#result').html('Generated ' + fullLen + ' by Deniz in ' + (new Date() - start) + ' ms');
            }
        }
    }
    doChunk();

});
</script>





    <div class="chart">
        <h2>Comparision of Lecture rooms 2013 - 2015</h2>
        <div id="result"></div>
<table id="table-sparkline" class="table">
    <thead>
        <tr>
            <th>Room</th>
            <th>Costs per Quarter</th>
            <th>Total Cost (x 1,000)</th>
            <th>Savings (x 1,000)</th>
            <th>Saving in %</th>
        </tr>
    </thead>
    <tbody id="tbody-sparkline">


<tr><th>Collegezaal Carré 2G*</th><td data-sparkline="25, 41, 63, 49"></td><td>178</td><td>52</td><td>29%</td></th>
<tr><th>Collegezaal Carré 2H</th><td data-sparkline="30, 53, 57, 78"></td><td>218</td><td>46</td><td>21%</td></th>
<tr><th>Collegezaal Carré 2K</th><td data-sparkline="72, 70, 57, 82"></td><td>281</td><td>67</td><td>24%</td></th>
<tr><th>Collegezaal Carré 2L</th><td data-sparkline="31, 50, 29, 38"></td><td>148</td><td>65</td><td>44%</td></th>
<tr><th>Collegezaal Carré 2M</th><td data-sparkline="62, 49, 73, 59"></td><td>243</td><td>117</td><td>48%</td></th>
<tr><th>Collegezaal Carré 2N</th><td data-sparkline="66, 36, 34, 41"></td><td>177</td><td>83</td><td>47%</td></th>
<tr><th>Collegezaal Carré 3A</th><td data-sparkline="25, 52, 32, 86"></td><td>195</td><td>31</td><td>16%</td></th>
<tr><th>Collegezaal Carré 3B</th><td data-sparkline="32, 33, 28, 60"></td><td>153</td><td>58</td><td>38%</td></th>
<tr><th>Collegezaal Carré 3C</th><td data-sparkline="53, 25, 41, 68"></td><td>187</td><td>94</td><td>50%</td></th>
<tr><th>Collegezaal Carré 3D</th><td data-sparkline="77, 89, 79, 32"></td><td>277</td><td>39</td><td>14%</td></th>
<tr><th>Collegezaal Carré 3E</th><td data-sparkline="63, 35, 40, 36"></td><td>174</td><td>23</td><td>13%</td></th>
<tr><th>Collegezaal Carré 3F</th><td data-sparkline="28, 46, 76, 86"></td><td>236</td><td>83</td><td>35%</td></th>
<tr><th>Collegezaal Carré 3H</th><td data-sparkline="21, 50, 39, 39"></td><td>149</td><td>48</td><td>32%</td></th>
<tr><th>Collegezaal Carré 4A</th><td data-sparkline="85, 56, 31, 20"></td><td>192</td><td>81</td><td>42%</td></th>
<tr><th>Collegezaal Cubicus B101*</th><td data-sparkline="34, 66, 47, 53"></td><td>200</td><td>80</td><td>40%</td></th>
<tr><th>Collegezaal Cubicus B103*</th><td data-sparkline="27, 58, 76, 54"></td><td>215</td><td>80</td><td>37%</td></th>
<tr><th>Collegezaal Cubicus B209*</th><td data-sparkline="21, 22, 60, 43"></td><td>146</td><td>69</td><td>47%</td></th>
<tr><th>Collegezaal Cubicus C238*</th><td data-sparkline="52, 55, 44, 50"></td><td>201</td><td>84</td><td>42%</td></th>
<tr><th>Collegezaal Hal B 2A</th><td data-sparkline="63, 72, 27, 58"></td><td>220</td><td>55</td><td>25%</td></th>
<tr><th>Collegezaal Hal B 2B</th><td data-sparkline="28, 70, 55, 71"></td><td>224</td><td>90</td><td>40%</td></th>
<tr><th>Collegezaal Hal B 2C</th><td data-sparkline="28, 55, 37, 60"></td><td>180</td><td>32</td><td>18%</td></th>
<tr><th>Collegezaal Hal B 2D</th><td data-sparkline="82, 36, 29, 35"></td><td>182</td><td>75</td><td>41%</td></th>
<tr><th>Collegezaal Hal B 2E</th><td data-sparkline="87, 64, 38, 69"></td><td>258</td><td>88</td><td>34%</td></th>
<tr><th>Collegezaal Hal B 2F</th><td data-sparkline="55, 90, 42, 49"></td><td>236</td><td>61</td><td>26%</td></th>
<tr><th>Collegezaal Horstring C101*</th><td data-sparkline="61, 21, 80, 77"></td><td>239</td><td>98</td><td>41%</td></th>
<tr><th>Collegezaal Horstring N109*</th><td data-sparkline="43, 88, 80, 77"></td><td>288</td><td>98</td><td>34%</td></th>
<tr><th>Collegezaal Ravelijn 1501</th><td data-sparkline="64, 32, 28, 41"></td><td>165</td><td>76</td><td>46%</td></th>
<tr><th>Collegezaal Ravelijn 2231</th><td data-sparkline="68, 24, 69, 43"></td><td>204</td><td>86</td><td>42%</td></th>
<tr><th>Collegezaal Ravelijn 2237</th><td data-sparkline="57, 33, 68, 33"></td><td>191</td><td>40</td><td>21%</td></th>
<tr><th>Collegezaal Ravelijn 2334</th><td data-sparkline="70, 51, 46, 50"></td><td>217</td><td>48</td><td>22%</td></th>
<tr><th>Collegezaal Ravelijn 2336</th><td data-sparkline="72, 64, 30, 73"></td><td>239</td><td>45</td><td>19%</td></th>
<tr><th>Collegezaal Ravelijn 2501</th><td data-sparkline="87, 25, 54, 73"></td><td>239</td><td>112</td><td>47%</td></th>
<tr><th>Collegezaal Ravelijn 2502</th><td data-sparkline="66, 61, 44, 49"></td><td>220</td><td>35</td><td>16%</td></th>
<tr><th>Collegezaal Ravelijn 2503</th><td data-sparkline="31, 43, 53, 50"></td><td>177</td><td>39</td><td>22%</td></th>
<tr><th>Collegezaal Ravelijn 2504</th><td data-sparkline="23, 47, 81, 45"></td><td>196</td><td>20</td><td>10%</td></th>
<tr><th>Collegezaal Ravelijn 3231</th><td data-sparkline="65, 79, 79, 29"></td><td>252</td><td>45</td><td>18%</td></th>
<tr><th>Collegezaal Ravelijn 3334</th><td data-sparkline="36, 80, 56, 32"></td><td>204</td><td>102</td><td>50%</td></th>
<tr><th>Collegezaal Ravelijn 3336</th><td data-sparkline="22, 61, 26, 77"></td><td>186</td><td>80</td><td>43%</td></th>
<tr><th>Collegezaal Ravelijn 4334</th><td data-sparkline="71, 79, 81, 43"></td><td>274</td><td>77</td><td>28%</td></th>
<tr><th>Collegezaal Ravelijn 4336</th><td data-sparkline="69, 34, 64, 40"></td><td>207</td><td>101</td><td>49%</td></th>
<tr><th>Collegezaal Spiegel 1*</th><td data-sparkline="20, 48, 46, 74"></td><td>188</td><td>39</td><td>21%</td></th>
<tr><th>Collegezaal Spiegel 2*</th><td data-sparkline="74, 49, 43, 70"></td><td>236</td><td>99</td><td>42%</td></th>
<tr><th>Collegezaal Spiegel 3*</th><td data-sparkline="74, 42, 37, 41"></td><td>194</td><td>60</td><td>31%</td></th>
<tr><th>Collegezaal Spiegel 4</th><td data-sparkline="22, 79, 76, 90"></td><td>267</td><td>101</td><td>38%</td></th>
<tr><th>Collegezaal Spiegel 5</th><td data-sparkline="41, 69, 53, 53"></td><td>216</td><td>86</td><td>40%</td></th>
<tr><th>Collegezaal Spiegel 6*</th><td data-sparkline="54, 64, 21, 69"></td><td>208</td><td>64</td><td>31%</td></th>
<tr><th>Collegezaal Spiegel 7*</th><td data-sparkline="43, 63, 81, 56"></td><td>243</td><td>41</td><td>17%</td></th>
<tr><th>Collegezaal Waaier 1 (v.d. Kroonenburgzaal)</th><td data-sparkline="46, 66, 70, 88"></td><td>270</td><td>105</td><td>39%</td></th>
<tr><th>Collegezaal Waaier 2 (Breedveldzaal)</th><td data-sparkline="46, 75, 69, 20"></td><td>210</td><td>101</td><td>48%</td></th>
<tr><th>Collegezaal Waaier 3 (v. Hasseltzaal)</th><td data-sparkline="74, 65, 56, 35"></td><td>230</td><td>99</td><td>43%</td></th>
<tr><th>Collegezaal Waaier 4 (Berkhoffzaal)</th><td data-sparkline="75, 61, 90, 81"></td><td>307</td><td>147</td><td>48%</td></th>
<tr><th>Total View</th><td data-sparkline="2621, 2776, 2715, 2825"></td><td>10937</td><td>3645,3</td><td></td></th>



    </tbody>
</table>

</div>










