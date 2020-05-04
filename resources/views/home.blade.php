@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">Hey, {{ Auth::user()->name  }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You have successfully Logged In.</p>
                    <p> View all your <a href="{{ url('todos') }}">Todo's</a> | Add a new <a href="{{ url('todos/create') }}">Todo</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
