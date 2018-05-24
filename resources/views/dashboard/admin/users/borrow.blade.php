@extends('layouts.app')
@section('content')
<table class="table table-condensed">
    <thead>
    <tr>
        <th> Category</th>
        <th>Item Name</th>
        <th>Urgency</th>
        <th>Employee Id</th>
    </tr>
    </thead>
    <tbody>

    @if(count($assets) > 0)
        @foreach ($assets as $asset)
            <tr>
                <td>{{$asset->category}}</td>
                <td>{{$asset->itemName}}</td>
                <td>{{$asset->urgency}}</td>
                <td>{{$asset->employeeId}}</td>

                {{--<td><a href="{{url('admin/message/'.$asset->employeeId)}}" class="btn btn-info" role="button">Respond</a></td>--}}
                <td><a href="#!" class="btn btn-info" role="button">Respond</a></td>
                <td><a href="{{url('admin/'.$asset->employeeId)}}" class="btn btn-info" role="button">Assign Asset</a></td>
                <td></td>

            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection
