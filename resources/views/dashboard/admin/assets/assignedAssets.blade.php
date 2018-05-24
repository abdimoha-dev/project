@extends('layouts.app')
@section('content')

    <table>
    <tr>
        <th> Category</th>
        <th>Item</th>
        <th>Serial Number</th>
        <th>employeeId</th>
    </tr>
    @foreach($assets as $asset)
        <tr>

            <td>{{$asset->category}}</td>
            <td>{{$asset->ItemName}}</td>
            <td>{{$asset->serialNumber}}</td>
            <td>{{$asset->employeeId}}</td>
        </tr>

        @endforeach
</table>
    <a href="{{ url('admin/pdf')}}">Download PDF</a>

@endsection

