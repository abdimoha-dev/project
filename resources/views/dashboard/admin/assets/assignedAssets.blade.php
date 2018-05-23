<html>
<head>
    <title> Assigned Assets</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF</a>
<table class="table table-condensed">
    <thead>
    <tr>
        <th> Category</th>
        <th>Item</th>
        <th>Serial Number</th>
        <th>employeeId</th>
    </tr>
    </thead>
    <tbody>

    @if(count($assets) > 0)
        @foreach ($assets as $asset)
            <tr>
                <td>{{$asset->category}}</td>
                <td>{{$asset->ItemName}}</td>
                <td>{{$asset->serialNumber}}</td>
                <td>{{$asset->employeeId}}</td>

                <td></td>

            </tr>
        @endforeach
    @endif
    </tbody>
</table>
</body>
