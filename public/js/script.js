document.addEventListener("DOMContentLoaded", function () {
    var data = {{ $data }
};

// Function to count occurrences of each final result state
function countFinalResults(data) {
    var counts = {};
    data.forEach(function (item) {
        var finalResult = item.FinalResult || "Unknown";
        counts[finalResult] = (counts[finalResult] || 0) + 1;
    });
    return counts;
}

// Extracting counts of final result states
var finalResultCounts = countFinalResults(data);

// Data for final result pie chart
var finalResultLabels = Object.keys(finalResultCounts);
var finalResultData = finalResultLabels.map(function (label) {
    return finalResultCounts[label];
});

// Data for SPOL pie chart
var spolCounts = { "0": 0, "1": 0 };
data.forEach(function (item) {
    spolCounts[item.SPOL]++;
});
var spolLabels = ["SPOL 0", "SPOL 1"];
var spolData = [spolCounts["0"], spolCounts["1"]];

// Create pie chart for final result
var finalResultPieChart = createPieChart('finalResultPieChart', 'Final Result Counts', finalResultLabels, finalResultData);

// Create pie chart for SPOL
var spolPieChart = createPieChart('spolPieChart', 'SPOL Counts', spolLabels, spolData);

// Create charts for each state of "Final Result"
finalResultLabels.forEach(function (finalResult) {
    var filteredData = data.filter(function (item) {
        return (item.FinalResult || "Unknown") === finalResult;
    });

    var labels = filteredData.map(function (item) {
        return item.id;
    });

    var leWbcData = filteredData.map(function (item) {
        return parseFloat(item.LE_WBC);
    });

    var limfData = filteredData.map(function (item) {
        return parseFloat(item.Limf);
    });

    var midData = filteredData.map(function (item) {
        return parseFloat(item.Mid);
    });

    var granData = filteredData.map(function (item) {
        return parseFloat(item.Gran);
    });

    var hgbData = filteredData.map(function (item) {
        return parseFloat(item.HGB);
    });

    // Create charts for each state of "Final Result"
    var leWbcChart = createLineChart(finalResult + '_leWbcChart', 'LE_WBC', labels, leWbcData);
    var limfChart = createLineChart(finalResult + '_limfChart', 'Limf', labels, limfData);
    var midChart = createLineChart(finalResult + '_midChart', 'Mid', labels, midData);
    var granChart = createLineChart(finalResult + '_granChart', 'Gran', labels, granData);
    var hgbChart = createLineChart(finalResult + '_hgbChart', 'HGB', labels, hgbData);
});

// Function to create a pie chart
function createPieChart(chartId, title, labels, data) {
    var ctx = document.getElementById(chartId).getContext('2d');
    return new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: title,
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
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
        }
    });
}

// Function to create a line chart
function createLineChart(chartId, title, labels, data) {
    var ctx = document.getElementById(chartId).getContext('2d');
    return new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: title,
                data: data,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}
});
