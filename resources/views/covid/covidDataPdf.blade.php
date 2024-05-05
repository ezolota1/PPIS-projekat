<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID Data Report</title>
</head>

<body>
    <h1>COVID Data Report</h1>
    <table border="1">
        <thead>
            <tr>
                <th>SPOOL</th>
                <th>LE WBC</th>
                <th>Limf%</th>
                <th>Mid%</th>
                <th>Gran%</th>
                <th>HGB</th>
                <th>Final Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data->SPOL }}</td>
                <td>{{ $data->LE_WBC }}</td>
                <td>{{ $data->Limf }}</td>
                <td>{{ $data->Mid }}</td>
                <td>{{ $data->Gran }}</td>
                <td>{{ $data->HGB }}</td>
                <td>{{ $data->FinalResult }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>