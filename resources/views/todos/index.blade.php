@extends('layouts.app')

@section('content')
    <style>
        .completed{
            background: linear-gradient(270deg,#38ef7d,#fdfffe);
            color: #3c3c3c;
            animation-name: bg-animate-c;
            animation-duration: 0.15s;
            animation-direction: forwards;
            animation-timing-function: cubic-bezier(0.44, 0.46, 0.45, 0.47);
        }
        
        @keyframes bg-animate-c{
            0%   {background: linear-gradient(270deg,#ee9ca7,#ffdde1);}
            25%   {background: linear-gradient(90deg,#ee9ca7,#ffdde1);}
            50%   {background: linear-gradient(90deg,#38ef7d,#fdfffe);}
            100%   {background: linear-gradient(270deg,#38ef7d,#fdfffe);}
        }
        
        @keyframes bg-animate-nc{
            0%   {background: linear-gradient(270deg,#38ef7d,#fdfffe);}
            25%   {background: linear-gradient(90deg,#38ef7d,#fdfffe);}
            50%   {background: linear-gradient(90deg,#ee9ca7,#ffdde1);}
            100%   {background: linear-gradient(270deg,#ee9ca7,#ffdde1);}
        }
        
        .not-completed{
            background: linear-gradient(270deg,#ee9ca7,#ffdde1);
            color: #d80000;
            animation-name: bg-animate-nc;
            animation-duration: 0.15s;
            animation-direction: forwards;
            animation-timing-function: cubic-bezier(0.44, 0.46, 0.45, 0.47);
        }
        .completed .card-title{
            color:  #000 !important;
            font-weight: 400;
            letter-spacing: 1px;
            text-decoration-line: line-through;
            text-decoration-color: black;
        }

        .not-completed .card-title{
            color:  #af0000 !important;
            font-weight: 400;
            letter-spacing: 1px;
        }


        .card{
            transition: all 1s;
        }

        .status-icon-c{
            position: absolute;
            width:50px;
            right:1%;
            top:-15%;
        }

        .username{
            color:red;
            text-shadow: 2px 2px 5px #0000005c;
        }
    </style>
    <h2 class="text-center">Welcome <br> <span class="username"> {{ Auth::user()->name }} </span></h2>
    <h4 class="text-center my-4">These are your ToDo's for Today</h4>
    <ul class="list-group py-3 px-3 mb-3">
        @forelse($todos as $todo)
            <li class="list-group-item card my-4 {{ $todo->done ? 'completed' : 'not-completed' }}"  >
                <img src="{{ $todo->done ? url('assets/check.png') : url('assets/cross.png') }}" onclick="togglestatus(this,{{ $todo->id }})" class="status-icon-c">
                {{-- @if($todo->done)
                    <img src="{{ url('assets/check.png') }}" onclick="togglestatus(this)" class="status-icon-c">
                @else
                    <img src="{{ url('assets/cross.png') }}" onclick="togglestatus(this)" class="status-icon-c">
                @endif --}}
                <h3 class="card-title" >{{$todo->title}}</h3>
                <p>{{ \Illuminate\Support\Str::limit($todo->body , 100 , '...') }}</p>
                <small class="float-right">{{$todo->created_at->diffForHumans()}}</small>
                <a href="{{route('todos.show',$todo->id)}}">Read More</a>
            </li>
        @empty
            <h4 class="text-center">No Todos Found!</h4>
            <img class="m-auto" src="https://img.icons8.com/pastel-glyph/2x/empty-box.png"  alt="" srcset="">
        @endforelse
    </ul>
    
    <div class="d-flex justify-content-center">
        {{$todos->links()}}
    </div>
@endsection