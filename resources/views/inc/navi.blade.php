<nav class="navbar navbar-expand-md navbar-light bg-white text-white shadow-sm text-center">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-fluid" width="50" src="{{ asset('images/logo.png') }}" />
        </a>
        <button class="navbar-toggler rounded bg-white" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black" class="bi bi-filter-right"
                viewBox="0 0 16 16">
                <path
                    d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
            </svg>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/') }}"><img class="img-fluid" width="20"
                            src="{{ asset('images/hm.png') }}" /> {{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('site/about') }}"><img class="img-fluid" width="20"
                            src="{{ asset('images/about.png') }}" /> {{ __('About') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('site/blog') }}"><img class="img-fluid" width="20"
                            src="{{ asset('images/blog.png') }}" />{{ __('Blog') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('site/contact') }}"><img class="img-fluid" width="20"
                            src="{{ asset('images/webs (5).png') }}" /> {{ __('Contact') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><img class="img-fluid" width="20"
                            src="{{ asset('images/login.png') }}" /> {{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link btn btn-dark text-white" href="https://github.com/mesinkasir/Lablog"><i
                            class="fab fa-github"></i> Github</a>
                </li>
                @else
                <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link"><img class="img-fluid" width="40"
                            src="{{ asset('images/homes.png') }}" /> <br />Home</a></li>
                <li class="nav-item"><a href="{{ url('/article') }}" class="nav-link"><img class="img-fluid" width="40"
                            src="{{ asset('images/table.png') }}" /> <br />Page</a></li>
                <li class="nav-item"><a href="{{ url('/management/user') }}" class="nav-link"><img class="img-fluid"
                            width="40" src="{{ asset('images/user.png') }}" /> <br />User</a>
                </li>
                <li class="nav-item"><a href="{{ url('/update/pos') }}" class="nav-link"><img class="img-fluid"
                            width="40" src="{{ asset('images/report.png') }}" /> <br />POS</a></li>
                <!--         <a href="{{ url('/management') }}" class="list-group-item list-group-item-action"><img class="img-fluid" width="60" src="{{ asset('images/group.png') }}"/><br/> Database</a>
          <a href="{{ url('/article') }}" class="list-group-item list-group-item-action"><img class="img-fluid" width="60" src="{{ asset('images/menu.png') }}"/> <br/>Website</a> -->

                <li class="nav-item">
                    <a href="{{ url('/update/pro') }}" class="nav-link"><img class="img-fluid" width="40"
                            src="{{ asset('images/pos.png') }}" /> <br />PRO</a></li>
                <!--  <a href="{{ url('/report') }}" class="list-group-item list-group-item-action"><img class="img-fluid" width="60" src="{{ asset('images/report.png') }}"/> <br/>Report</a> -->
                <li class="nav-link nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        <img class="img-fluid" src="{{ asset('images/admin.png') }}" width="40" />
                        <br /> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="list-group-item list-group-item-action" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <img class="img-fluid" width="20" src="{{ asset('images/off.png') }}" />
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
