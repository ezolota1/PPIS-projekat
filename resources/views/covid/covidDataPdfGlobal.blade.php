<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID Data Report</title>
</head>

<style>
    h4 {
    margin: 0;
}
.w-full {
    width: 100%;
}
.w-half {
    width: 50%;
}
.margin-top {
    margin-top: 1.25rem;
}
.footer {
    font-size: 0.875rem;
    padding: 1rem;
    background-color: rgb(241 245 249);
}
table {
    width: 100%;
    border-spacing: 0;
}
table.products {
    font-size: 0.875rem;
}
table.products tr {
    background-color: rgb(96 165 250);
}
table.products th {
    color: #ffffff;
    padding: 0.5rem;
}
table tr.items {
    background-color: rgb(241 245 249);
    text-align: center;
}
table tr.items2 {
    background-color: rgb(255 255 255);
    text-align: center;
}

table tr.items td {
    padding: 0.5rem;
}
table tr.items2 td {
    padding: 0.5rem;
}
.total {
    text-align: left;
    margin-top: 1rem;
    font-size: 0.875rem;
}
.hematology{
    text-align:left;
}
</style>

<body>
    <table class="w-full">
        <tr>
            <td class="w-half">
               
            </td>
            <td class="w-half">
                <h2>Covid Data Stati</h2>
            </td>
        </tr>
    </table>
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        const xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        const yValues = [55, 49, 44, 24, 15];
        const barColors = ["red", "green","blue","orange","brown"];

        new Chart("myChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "World Wine Production 2018"
            }
          }
        });
    </script>
 
 
 
    <div class="footer margin-top">
        <div>Stay safe</div>
        <div>&copy; Your COVID-19 Project Team</div>
    </div>
</body>
</html>
