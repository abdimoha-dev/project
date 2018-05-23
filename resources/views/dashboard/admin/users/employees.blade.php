<html>
<head>
<title> All Employees</title>
</head>
<body>
<table class="table table-condensed">
    <thead>
    <tr>
        <th> Name</th>
        <th>Department</th>
         <th>Email</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>

    @if(count($users) > 0)
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->department}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>

                <td><a href="{{url('admin/assign/'.$user->id)}}" class="btn btn-info" role="button">Assign Assets</a></td>
                <td></td>

            </tr>
        @endforeach
    @endif
    </tbody>
</table>
</body>
