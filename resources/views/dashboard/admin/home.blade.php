@extends('layouts.dash')

@section('page-title')

@endsection

@section('content-header')
    <h3 class="box-title">My Details</h3>
@endsection


@section('content')

    <section class="content">
    @include('shared.alerts')
    <!-- Info boxes -->
        <div class="col-md-4" style="left: 46%;transform: translateX(-50%);">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="images/profile.png" alt="User profile picture">

                <h3 class="profile-username text-center">{{auth()->user()->first_name}} {{auth()->user()->second_name}} </h3>

                <p class="text-muted text-center">{{auth()->user()->role}}</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Email</b> <a class="pull-right">{{auth()->user()->email}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Phone Number</b> <a class="pull-right">{{auth()->user()->phone}}</a>
                    </li>
                </ul>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->

    </section>
@endsection

