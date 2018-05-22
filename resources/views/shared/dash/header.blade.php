<header class="main-header" >
    <!-- Logo -->
    <a href="{{url('/')}}" class="logo">
        <span><b>Elimu</b>Front</span>

        <img width="40" src="{{ asset('dash/img/teacher-pointing-a-board-with-a-stick(1).png') }}" class="logo-mini" style="display: initial" alt="User Image">

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->

        <div class="navbar-custom-menu" >

            <ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                    <a href="{{url('sentmessages')}}">
                        <i class="fa fa-envelope"></i> <span>inbox</span>
                        <span class="pull-right-container">

            </span>
                    </a>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                        {{--<img src="{{ asset('dash/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">--}}
                        <span class="hidden-xs">{{auth()->user()->first_name}} {{auth()->user()->second_name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('dash/img/profile.png') }}" class="img-circle" alt="User Image">

                            <p>
                                {{auth()->user()->first_name}} {{auth()->user()->second_name}}
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="#!" class="btn btn-default btn-flat sign-out">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>