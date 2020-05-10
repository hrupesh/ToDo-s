<nav class="navbar navbar-expand-md navbar-dark secondary-color-dark fixed-top navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('assets/logo.svg') }}" height="30" alt="mdb logo">
        </a>
        <div class="nav-brand theme-btn">
            <label class="switch" >
                <input onclick="changetheme()" type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item">
                        <a href="{{route('todos.index')}}" class="nav-link">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('todos.create')}}" class="nav-link">New Todo</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{route('pages.index')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pages.about')}}" class="nav-link">About</a>
                    </li>
                @endauth
                {{-- <li class="nav-item">
                    <a href="{{route('todos.index')}}" class="nav-link">Todos</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('todos.create')}}" class="nav-link">New Todo</a>
                </li> --}}
            </ul>
            <!-- Right Side Of Navbar -->
            <style>
                .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 25px;
                top:5px;
                }

                .theme-btn{
                    position: absolute;
                    right:42%;
                }

                @media(max-width:550px){
                    .theme-btn{
                        right:18% !important;
                    }
                }

                @media(max-width:1000px){
                    .theme-btn{
                        right:50%;
                    }
                }

                @media(min-width:1200px){
                    .theme-btn{
                        right:33%;
                    }
                }

                @media(min-width:1400px){
                    .theme-btn{
                        right:34%;
                    }
                }

                /* Hide default HTML checkbox */
                .switch input {
                opacity: 0;
                width: 0;
                height: 0;
                }

                /* The slider */
                .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width:85%;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
                }

                .slider:before {
                position: absolute;
                content: "";
                height: 25px;
                width: 25px;
                left: 0px;
                bottom: 0px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
                }

                input:checked + .slider {
                background-color: #1717176b;
                }

                input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
                }

                input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
                }

                /* Rounded sliders */
                .slider.round {
                border-radius: 35px;
                }

                .slider.round:before {
                border-radius: 50%;
                }
            </style>
            
            <ul class="navbar-nav ml-auto">
                <script>
                    function changetheme(){
                        var b = document.getElementById('body');
                        console.log(b.style.background);
                        if(b.style.background === 'rgb(146, 146, 146)'){
                            b.style.background = 'rgb(255, 255, 255)';
                            b.style.color = 'black';
                        }else{
                            b.style.background = 'rgb(146, 146, 146)';
                            b.style.color = 'white';
                        }
                    }
                </script>
                @auth
                    <li class="nav-item">
                        <a href="{{route('pages.index')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pages.about')}}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{asset('storage/pics/'.Auth::user()->image)}}" class="rounded-circle mr-1" height="30px" width="30px">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('home')}}">
                                Dashboard
                            </a>
                            <a class="dropdown-item" href="{{route('profile.index')}}">
                                Profile
                            </a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>