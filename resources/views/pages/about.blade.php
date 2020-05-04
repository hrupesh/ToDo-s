@extends('layouts.app')

@section('title')
Laravel 5.8 Basics | About Page
@endsection

@section('content')

    <div class="container ">
        <h3 class="h1 my-4 ">About Todo's</h3>
        <p>This is an application designed and developed for people having trobles remembering their daily tasks.</p>
        <p>User can simply start creating their tasks by registering with us.</p>
        <p>Once registration is done user can simply view thier Todo's and also create a new one.</p>
        <p>If the user is also having trouble remebering that has he done the task, then they can simply change the status of a Todo by clicking the Cross/Check Icon.</p>
        <p>If the user has some problems in their eyesights or have any other medical condition, they can know if the status was changed by a Notification SOund that is generated when a status is changed.</p>

        <h3  class="h1 my-4 text-left text-secondary"> About Developer </h3>
        <style>
            .img-rupesh{
                height:auto;
                width:25vw;
                /* display: inherit; */
                position: relative;
                left:35%;
                margin: 5% 0;
                border-radius: 50%;
            }

            .name-c{
                /* transition: all 1s; */
                animation-name: glowtext;
                animation-iteration-count: infinite;
                animation-duration: 1s;
                cursor: pointer;
                animation-direction: alternate;
                animation-timing-function: ease;
                letter-spacing: auto;
            }

            .name-c:hover{
                /* transition: all 1s; */
                transform: scale(1.1);
            }

            @keyframes example {
                0%   {background-color: red;}
                25%  {background-color: yellow;}
                50%  {background-color: blue;}
                100% {background-color: green;}
                }
            

            @keyframes glowtext{
                0%{
                    text-shadow:0px 0px 20px red;
                    letter-spacing: 1px;
                    color: red;
                }
                10%{
                    text-shadow:0px 0px 20px green;
                    letter-spacing: 2px;
                    color: yellow;
                }
                20%{
                    text-shadow:0px 0px 20px blue;
                    letter-spacing: 3px;
                    color: green;
                }
                30%{
                    text-shadow:0px 0px 20px black;
                    letter-spacing: 4px;
                    color: black;
                }
                40%{
                    text-shadow:0px 0px 12px violet;
                    letter-spacing: 5px;
                    color: voilet;
                }
                50%{
                    text-shadow:0px 0px 16px yellow;
                    letter-spacing: 6px;
                    color: pink;
                }
                60%{
                    text-shadow:0px 0px 20px #157fe8;
                    letter-spacing: 7px;
                    color: purple;
                }
                70%{
                    text-shadow:0px 0px 16px #157fe8;
                    letter-spacing: 9px;
                    color: white;
                }
                80%{
                    text-shadow:0px 0px 12px #157fe8;
                    letter-spacing: 10px;
                    color: cyan;
                }
                90%{
                    text-shadow:0px 0px 7px #157fe8;
                    letter-spacing: 11px;
                    color: brown;
                }
                100%{
                    text-shadow:0px 0px 7px #157fe8;
                    letter-spacing: 12px;
                }
            }

            @media (max-width:700px){
                .img-rupesh{
                width:50vw;
                left:22.5%;
                }
            }

            .social-buttons {
            display: inline-block;
            background: rgba(255, 255, 255, 0.5);
            padding: 20px;
            padding-bottom: 5px;
            border-radius: 10px;
            text-align: center;
            margin: 20px 10px;
            /* Helper class to divide the icons */
            }
            .social-buttons .social-margin {
            margin-right: 15px;
            }
            .social-buttons a,
            .social-buttons a:hover,
            .social-buttons a:focus,
            .social-buttons a:active {
            text-decoration: none;
            }
            .social-buttons .social-icon {
            margin-bottom: 15px;
            box-sizing: border-box;
            -moz-border-radius: 138px;
            -webkit-border-radius: 138px;
            border-radius: 138px;
            border: 5px solid;
            text-align: center;
            width: 50px;
            height: 50px;
            display: inline-block;
            line-height: 1px;
            padding-top: 11px;
            transition: all 0.5s;
            /* Facebook Button Styling */
            /* Twitter Button Styling */
            /* Google+ Button Styling */
            /* Linkedin Button Styling */
            /* Pinterest Button Styling */
            /* Behance Button Styling */
            /* Github Button Styling */
            /* Youtube Button Styling */
            /* Soundcloud Button Styling */
            }
            .social-buttons .social-icon:hover {
            transform: rotate(360deg) scale(1.3);
            }
            .social-buttons .social-icon.facebook {
            font-size: 22px;
            padding-top: 9px;
            border-color: #3b5998;
            background-color: #3b5998;
            color: #ffffff;
            }
            .social-buttons .social-icon.facebook:hover {
            background-color: #ffffff;
            color: #3b5998;
            }
            .social-buttons .social-icon.twitter {
            font-size: 22px;
            padding-top: 10px;
            padding-left: 2px;
            border-color: #55acee;
            background-color: #55acee;
            color: #ffffff;
            }
            .social-buttons .social-icon.twitter:hover {
            background-color: #ffffff;
            color: #55acee;
            }
            .social-buttons .social-icon.google-plus {
            font-size: 22px;
            padding-top: 9px;
            padding-left: 2px;
            background-color: #dd4b39;
            color: #ffffff;
            border-color: #dd4b39;
            }
            .social-buttons .social-icon.google-plus:hover {
            background-color: #ffffff;
            color: #dd4b39;
            }
            .social-buttons .social-icon.linkedin {
            font-size: 24px;
            padding-top: 8px;
            padding-left: 1px;
            background-color: #0976b4;
            color: #ffffff;
            border-color: #0976b4;
            }
            .social-buttons .social-icon.linkedin:hover {
            background-color: #ffffff;
            color: #0976b4;
            }
            .social-buttons .social-icon.pinterest {
            font-size: 22px;
            padding-top: 9px;
            background-color: #cb2027;
            color: #ffffff;
            border-color: #cb2027;
            }
            .social-buttons .social-icon.pinterest:hover {
            background-color: #ffffff;
            color: #cb2027;
            }
            .social-buttons .social-icon.behance {
            font-size: 22px;
            padding-top: 9px;
            background-color: #1769ff;
            color: #ffffff;
            border-color: #1769ff;
            }
            .social-buttons .social-icon.behance:hover {
            background-color: #ffffff;
            color: #1769ff;
            }
            .social-buttons .social-icon.github {
            font-size: 22px;
            padding-top: 9px;
            background-color: #5a5a5a;
            color: #ffffff;
            border-color: #5a5a5a;
            }
            .social-buttons .social-icon.github:hover {
            background-color: #ffffff;
            color: #4183c4;
            }
            .social-buttons .social-icon.youtube {
            font-size: 22px;
            padding-top: 9px;
            padding-left: 0px;
            background-color: #bb0000;
            color: #ffffff;
            border-color: #bb0000;
            }
            .social-buttons .social-icon.youtube:hover {
            background-color: #ffffff;
            color: #bb0000;
            }
            .social-buttons .social-icon.soundcloud {
            font-size: 22px;
            padding-top: 9px;
            padding-left: 0px;
            background-color: #ff3a00;
            color: #ffffff;
            border-color: #ff3a00;
            }
            .social-buttons .social-icon.soundcloud:hover {
            background-color: #ffffff;
            color: #ff3a00;
            }

        </style>
        <img src="{{ url('assets/rupesh.jpg') }}" class="img img-responsive img-rupesh "  alt="" srcset="">
        <h1  class="display-4 my-4 text-center text-primary name-c" id="name-redirect" onclick="redirect()">  Rupesh Chaudhari  </h1>
        <script>
            function redirect(){
                window.open("https://rupesh.cf/");
            }
        </script>
        <p class="text-center text-danger font-italic">Click the name to visit my portfolio</p>
        <p class="text-center h5">I'm a Full Stack Developer from Nashik, MH (IN). I aim to make a difference through my creative solutions.</p>
        {{-- <p>I am originally from Nashik but currently living in Jaipur. I have a passion towards developing and designing new solutions to make one's life easier.</p> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <div class="social-buttons d-flex justify-content-center">        
            <!-- facebook  Button -->
                    <a href="http://www.facebook.com/hrupeshr" target="blank" class="social-margin"> 
                      <div class="social-icon facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                      </div>
                    </a>
                    <!-- LinkedIn Button -->
                    <a href="http://linkedin.com/in/hrupesh" class="social-margin" target="blank1">
                      <div class="social-icon linkedin">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </div> 
                    </a>
                  <!-- Github Button -->
                    <a href="https://github.com/hrupesh"  target="blank2"  class="social-margin">
                      <div class="social-icon github">
                        <i class="fa fa-github" aria-hidden="true"></i>
                      </div>
                    </a>
                    <a href="https://instagram.com/petronum_"  target="blank3"  class="social-margin">
                      <div class="social-icon youtube">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </div>
                    </a>
            </div>
    </div>
@endsection