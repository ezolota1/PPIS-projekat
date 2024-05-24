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
                <h2>Covid Data Report: {{$data->id}}</h2>
            </td>
        </tr>
    </table>
 
    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div><h4>Patient:</h4></div>
                    <div>John Doe</div>
                    <div>123 Acme Str.</div>
                    <div>Gender: Male</div>
                </td>
                <td class="w-half">
                    <div><h4>Doctor:</h4></div>
                    <div>Nadir Karaman</div>
                </td>
            </tr>
        </table>
    </div>

    
    <div class="margin-top">
        <table class="products">
            <tr>
                <th>Hematology</th>
                <th>Mark</th>
                <th>Result</th>
                <th>Measurement Unit</th>
                <th>Reference values</th>
            </tr>
            <tr class="items">
                <td class="hematology">White Blood Cell Count</td>
                <td>WBC</td>
                 <td>{{ $data->LE_WBC }}</td>
                <td>x10^9/L</td>
                <td>3.4 - 9.7</td>                
            </tr>
            <tr class="items2">
                <td class="hematology"> Lymphocytes</td>
                <td>Limf%</td>
                <td>{{ $data->Limf }}</td>
                <td>%</td>
                <td>20% - 40%</td>               
            </tr>
            <tr class="items">
                <td class="hematology">Monocytes </td>
                <td>Mid%</td>
                <td>{{ $data->Mid }}</td>
                <td>%</td>
                <td>2% - 8%</td>
                
            </tr>
            <tr class="items2">
                <td class="hematology">Granulocytes </td>
                <td>Gran%</td>
                <td>{{ $data->Gran }}</td>
                <td>%</td>
                <td>50% - 70 %</td>          
            </tr>
            <tr class="items">
                <td class="hematology">Hemoglobin </td>
                <td>HGB</td>
                <td>{{ $data->HGB }}</td>
                <td>g/L</td>
                <td>13.8-17.5</td>        
            </tr>
            
        </table>
    </div>
 
    <div class="total">
        Final Result: {{ $data->FinalResult }}
    </div>
 
    <div class="footer margin-top">
        <div>Stay safe</div>
        <div>&copy; Your COVID-19 Project Team</div>
    </div>
</body>
</html>
