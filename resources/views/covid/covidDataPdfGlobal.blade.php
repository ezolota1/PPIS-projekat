<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Statistics</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js">
	</script>

    <style>
     table {
            width: 70%;
        }
        th, td {
            padding: 8px;
            text-align: left;

        }
        h1{
            background-color: rgb(241 245 249);
        }
      
        .table2 td,th{
            border: 1px solid;
        }
        .table2th{
            background: lightblue;
        }
</style>
</head>
<body>
    
    <input type="button" value="Export PDF"			
				    onclick="convertHTMLtoPDF()">

     <h1>Covid Statistics</h1>
     <table class="table">
     <tr>
        <td> <canvas id="finalResultPieChart" style="width: 30%;"></canvas></td>
        <td> <div id="finalResultCounts" style="width: 100%;" ></div></td>
        <td> <canvas id="spolPieChart" style="width: 30%;"></canvas></td>
      </tr>
    </table>

    <h1>Critical State</h1>
     <table class="table">
     <tr>
        <td><canvas id="CriticalStats" style="width: 50%; height=50px;"></canvas></td>
         <td>
            <table class="table2">
                <th class="table2th">
                    <td class="table2th">Min</td>
                    <td class="table2th" >Max</td>
                </th>
                <tr>
                    <td>LE_WBC</td>
                    <td>5.4</td>
                    <td>6.2</td>
                </tr>
                <tr>
                    <td>Limf</td>
                    <td>1.2</td>
                    <td>1.3</td>
                </tr>
                <tr>
                    <td>Mid</td>
                    <td>3.1</td>
                    <td>3.2</td>
                </tr>
                <tr>
                    <td>Gran</td>
                    <td>1.0</td>
                    <td>1.8</td>
                </tr>
                <tr>
                    <td>HGB</td>
                    <td>14.3</td>
                    <td>14.9</td>
                </tr>
                <tr>
                </tr>
            </table>
     </td>  
     <td></td>  
      </tr>
    </table>


        <h1>Serious State</h1>
     <table class="table">
     <tr>
        <td><canvas id="SeriousStats" style="width: 50%; height=50px;"></canvas></td>

     <td><table class="table2">
                <th class="table2th">
                    <td class="table2th">Min</td>
                    <td class="table2th" >Max</td>
                </th>
                <tr>
                    <td>LE_WBC</td>
                    <td>5.4</td>
                    <td>6.2</td>
                </tr>
                <tr>
                    <td>Limf</td>
                    <td>1.2</td>
                    <td>1.3</td>
                </tr>
                <tr>
                    <td>Mid</td>
                    <td>3.1</td>
                    <td>3.2</td>
                </tr>
                <tr>
                    <td>Gran</td>
                    <td>1.0</td>
                    <td>1.8</td>
                </tr>
                <tr>
                    <td>HGB</td>
                    <td>14.3</td>
                    <td>14.9</td>
                </tr>
                <tr>
                </tr>
            </table></td>  
      </tr>
    </table>


    <h1>Good State</h1>
     <table class="table">
     <tr>
        <td><canvas id="GoodStats" style="width: 50%; height=50px;"></canvas></td>

     <td>
            <table class="table2">
                <th class="table2th">
                    <td class="table2th">Min</td>
                    <td class="table2th" >Max</td>
                </th>
                <tr>
                    <td>LE_WBC</td>
                    <td>5.4</td>
                    <td>6.2</td>
                </tr>
                <tr>
                    <td>Limf</td>
                    <td>1.2</td>
                    <td>1.3</td>
                </tr>
                <tr>
                    <td>Mid</td>
                    <td>3.1</td>
                    <td>3.2</td>
                </tr>
                <tr>
                    <td>Gran</td>
                    <td>1.0</td>
                    <td>1.8</td>
                </tr>
                <tr>
                    <td>HGB</td>
                    <td>14.3</td>
                    <td>14.9</td>
                </tr>
                <tr>
                </tr>
            </table>
     </td>  
      </tr>
    </table>

    <h1>Fair State</h1>
     <table class="table">
     <tr>
        <td><canvas id="FairStats" style="width: 50%; height=50px;"></canvas></td>

     <td><table class="table2">
                <th class="table2th">
                    <td class="table2th">Min</td>
                    <td class="table2th" >Max</td>
                </th>
                <tr>
                    <td>LE_WBC</td>
                    <td>5.4</td>
                    <td>6.2</td>
                </tr>
                <tr>
                    <td>Limf</td>
                    <td>1.2</td>
                    <td>1.3</td>
                </tr>
                <tr>
                    <td>Mid</td>
                    <td>3.1</td>
                    <td>3.2</td>
                </tr>
                <tr>
                    <td>Gran</td>
                    <td>1.0</td>
                    <td>1.8</td>
                </tr>
                <tr>
                    <td>HGB</td>
                    <td>14.3</td>
                    <td>14.9</td>
                </tr>
                <tr>
                </tr>
            </table></td>  
      </tr>
    </table>


    <h1>Undetermined State</h1>
     <table class="table">
     <tr>
        <td><canvas id="UndeterminedStats" style="width: 50%; height=50px;"></canvas></td>

     <td><table class="table2">
                <th class="table2th">
                    <td class="table2th">Min</td>
                    <td class="table2th" >Max</td>
                </th>
                <tr>
                    <td>LE_WBC</td>
                    <td>5.4</td>
                    <td>6.2</td>
                </tr>
                <tr>
                    <td>Limf</td>
                    <td>1.2</td>
                    <td>1.3</td>
                </tr>
                <tr>
                    <td>Mid</td>
                    <td>3.1</td>
                    <td>3.2</td>
                </tr>
                <tr>
                    <td>Gran</td>
                    <td>1.0</td>
                    <td>1.8</td>
                </tr>
                <tr>
                    <td>HGB</td>
                    <td>14.3</td>
                    <td>14.9</td>
                </tr>
                <tr>
                </tr>
            </table></td>  
      </tr>
    </table>


    <!-- Include your JavaScript code -->
    <script>
       function convertHTMLtoPDF() {
		window.print()		 
		}		 
        function createArrayFrom1ToN(n) {
          return Array.from({ length: n }, (_, i) => i + 1);
        }

        document.addEventListener("DOMContentLoaded", function() {
            var data = <?php echo json_encode($data); ?>;
            var array = new Array(25);
            var valuesFinal = ["Critical", "Serious", "Fair", "Good", "Undetermined"]
            
            for(var i = 0; i<5;i++){
                 const criticalResults = data.filter(item => item.FinalResult === valuesFinal[i]);
                 array[0+i*5] = criticalResults.map(item => Number(item.LE_WBC));
                 array[1+i*5] = criticalResults.map(item => Number(item.Limf));
                 array[2+i*5] = criticalResults.map(item => Number(item.Mid));
                 array[3+i*5] = criticalResults.map(item => Number(item.Gran));
                 array[4+i*5] = criticalResults.map(item => Number(item.HGB));
            }

            var chart1 = createMLChart('CriticalStats', 'Critical Stats', ["LE_WBC", "Limf", "Mid", "Gran", "HGB"], [array[0],array[1],array[2], array[3], array[4]]);
            var chart2 = createMLChart('SeriousStats', 'Serious Stats', ["LE_WBC", "Limf", "Mid", "Gran", "HGB"], [array[5],array[5],array[7], array[8], array[9]]);
            var chart3 = createMLChart('FairStats', 'Fair Stats', ["LE_WBC", "Limf", "Mid", "Gran", "HGB"], [array[10],array[11],array[12], array[13], array[14]]);
            var chart4 = createMLChart('GoodStats', 'Good Stats', ["LE_WBC", "Limf", "Mid", "Gran", "HGB"], [array[15],array[16],array[17], array[18], array[19]]);
            var chart5 = createMLChart('UndeterminedStats', 'Undetermined Stats', ["LE_WBC", "Limf", "Mid", "Gran", "HGB"], [array[20],array[21],array[22], array[23], array[24]]);
            function createMLChart(chartId, title, labels, data) {
                 var ctx = document.getElementById(chartId).getContext('2d');
                 new Chart(chartId, {
                  type: "line",
                  data: {
                    labels: createArrayFrom1ToN(data[0].length),
                    datasets: [{
                        label: labels[0],
                      data: data[0],
                      borderColor: "red",
                      fill: false,
                    },{
                        label: labels[1],
                      data: data[1],
                      borderColor: "green",
                      fill: false
                    },{
                        label: labels[2],
                      data: data[2],
                      borderColor: "blue",
                      fill: false
                    },{
                        label: labels[3],
                      data: data[3],
                      borderColor: "yellow",
                      fill: false
                    },{
                        label: labels[4],
                      data: data[4],
                      borderColor: "purple",
                      fill: false
                    }
                    ]
                  },
                  options: {
                    legend: {display: false}
                  }
                });
            }
        

            //OVERALL Statistics
            // Function to count occurrences of each final result state
            function countFinalResults(data) {
                var counts = {};
                data.forEach(function(item) {
                    var finalResult = item.FinalResult || "Unknown";
                    counts[finalResult] = (counts[finalResult] || 0) + 1;
                });
                return counts;
            }

            // Extracting counts of final result states
            var finalResultCounts = countFinalResults(data);

            // Data for final result pie chart
            var finalResultLabels = Object.keys(finalResultCounts);
            var finalResultData = finalResultLabels.map(function(label) {
                return finalResultCounts[label];
            });

            // Update final result counts in HTML
            var finalResultCountsHTML = '';
            finalResultLabels.forEach(function(label) {
                finalResultCountsHTML += label + ': ' + finalResultCounts[label] + '<br>';
            });
            document.getElementById('finalResultCounts').innerHTML = finalResultCountsHTML;
            var final2 = finalResultCounts

            // Data for SPOL pie chart
            var spolCounts = {"0": 0, "1": 0};
            data.forEach(function(item) {
                spolCounts[item.SPOL]++;
            });
            var spolLabels = ["Male", "Female"];
            var spolData = [spolCounts["0"], spolCounts["1"]];

            // Create pie chart for final result
            var finalResultPieChart = createPieChart('finalResultPieChart', 'Final Result Count', finalResultLabels, finalResultData);

            // Create pie chart for SPOL
            var spolPieChart = createPieChart('spolPieChart', 'Gender Count', spolLabels, spolData);

            // Function to create a pie chart
            function createPieChart(chartId, title, labels, data) {
                var ctx = document.getElementById(chartId).getContext('2d');
                return new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: title,
                            data: data,
                            backgroundColor: [
                                'rgba(255, 99, 132,1)',
                                'rgba(54, 162, 235,1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                    legend: {display: false},
                    title: {
                      display: true,
                      text: "Charts"
                    }
                  }
                });
            }
        });

    </script>
</body>
</html>

