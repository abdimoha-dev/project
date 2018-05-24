@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <nav class="navbar navbar-default">
                            @if(auth()->user()->role=='EMPLOYEE')
                                <a class="active" href="{{url('employee/myitems')}}">View My Assets</a>
                                <a href="{{url('employee/borrow')}}">Borrow Asset</a>
                            @else
                                <a class="active" href="{{url('admin/categories')}}">Enter Categories</a>
                                <a href="{{url('admin/stock')}}">Enter New Assets</a>
                                <a href="{{url('admin/employees')}}">Distribute Assets</a>
                                <a href="{{url('admin/assets/assigned')}}">Assigned Assets</a>
                                <a href="{{url('admin/borrow/requests')}}">Borrow Request</a>
                                @endif
                            </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
