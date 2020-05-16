<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="manifest" href="{{ secure_asset('assets/manifest.json') }}">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="ToDo's">
    <meta name="apple-mobile-web-app-title" content="ToDo's">
    <meta name="theme-color" content="#42A5F5">
    <meta name="msapplication-navbutton-color" content="#42A5F5">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/jpg" sizes="300x300" href="{{ secure_asset('assets/Icon-512.png') }}">
    <link rel="apple-touch-icon" type="image/jpg" sizes="300x300" href="{{ secure_asset('assets/Icon-512.png') }}">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ secure_asset('/assets/css/all.css') }}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ secure_asset('/assets/css/roboto.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ secure_asset('/assets/css/mdb.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> <- bootstrap css --}}
    <title>@yield('title',"ToDo's | Organise Your Tasks")</title>
    <style>
        body{
            font-family:'Roboto',sans-serif;
        }

        .main{
            /* min-height: calc(100vh - 133px); */
            padding:5% 0;
        }

        @media screen and (max-width: 668px) {
            .main{ /* center the alert on small screens */
                padding:15% 0; 
            }
        }

        html{
            font-family:'Roboto',sans-serif;
        }

        *{
            font-family:'Roboto',sans-serif;
        }

        .alert{
            z-index: 99;
            top: 150px;
            right:18px;
            min-width:30%;
            position: fixed;
            animation: slide 1s forwards;
        }
        @keyframes slide {
            100% { top: 90px; }
        }
        @media screen and (max-width: 668px) {
            .alert{ /* center the alert on small screens */
                left: 10px;
                right: 10px; 
            }
        }

    </style>
    <style>
        
    </style>
</head>
<body id="body" style="background:rgb(255,255,255);">
    {{-- That's how you write a comment in blade --}}
    
    @include('includes.navbar')
    
    <main class="container mt-4 main">
        @yield('content')
    </main>
    
    <!-- JQuery -->
    <script type="text/javascript" src="{{ secure_asset('/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ secure_asset('/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ secure_asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ secure_asset('/assets/js/mdb.min.js') }}"></script>
    {{-- <script src="{{asset('js/app.js')}}"></script> <- bootstrap and jquery --}}
    
        <script>

            function sound(src) {
                this.sound = document.createElement("audio");
                this.sound.src = src;
                this.sound.setAttribute("preload", "auto");
                this.sound.setAttribute("controls", "none");
                this.sound.style.display = "none";
                document.body.appendChild(this.sound);
                this.play = function(){
                    this.sound.play();
                }
                this.stop = function(){
                    this.sound.pause();
                }    
            }

            

        </script>
    @if(session('status')) {{-- <- If session key exists --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}} {{-- <- Display the session value --}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <script>

        function sound(src) {
            this.sound = document.createElement("audio");
            this.sound.src = src;
            this.sound.setAttribute("preload", "auto");
            this.sound.setAttribute("controls", "none");
            this.sound.style.display = "none";
            document.body.appendChild(this.sound);
            this.play = function(){
                this.sound.play();
            }
            this.stop = function(){
                this.sound.pause();
            }    
        }
        

        function togglestatus(t,id){
            var card = t.parentNode;
            var icon = t;
            var cardclassList = t.parentNode.classList.toString();
            // console.log(id);
            // console.log(t.src);
            // console.log(card);
            // console.log(cardclassList);
            if(cardclassList.includes('not-completed')){
                card.classList.remove('not-completed');
                card.classList.add('completed');
                t.src = '{{ secure_asset('/assets/check.png') }}';
                var s = new sound("{{ secure_asset('assets/notification.ogg') }}");
                s.play();
            }else{
                card.classList.remove('completed');
                card.classList.add('not-completed');
                t.src = '{{ secure_asset('/assets/cross.png') }}';
                var s = new sound("{{ secure_asset('assets/cancel.ogg') }}");
                s.play();
            }

            var api_url = '/todos/'+id+'/change-status/';

            axios.get(api_url)
                .then(function (response) {
                    console.log("Changed Status ✔");
                })
                .catch(function (error) {
                    console.log(error);
                });
            }

            
    </script>

    <script>
        //close the alert after 3 seconds.
        $(document).ready(function(){
        setTimeout(function() {
            $(".alert").alert('close');
        }, 3000);
        });
    </script>

    <script src="/sw.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>

    // Check that service workers are supported
    if ('serviceWorker' in navigator) {
    // Use the window load event to keep the page load performant
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js');
    });
    }
    </script>

    @include('includes.footer')
</body>
</html>