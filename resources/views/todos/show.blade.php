@extends('layouts.app')
@section('content')

    <div class="card my-4 bg-light mx-4 py-4 px-4">
        <h3 class="text-center display-4 card-title text-dark">{{$todo->title}}</h3>
        <hr>
        <h3 class="text-center card-body text-dark">{{$todo->body}}</h3>
        <br>
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('todos.edit',$todo->id)}}" class="btn btn-primary btn-block aqua-gradient">  Update</a>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-danger btn-block peach-gradient" data-toggle="modal" data-target="#delete-modal">Delete</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="modal fade " id="delete-modal">
            <div class="modal-dialog" role="document">
            <div class="modal-content peach-gradient">
                <div class="modal-header ">
                    <h5 class="modal-title">Delete Todo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <p>Are you sure?</p>
                    <p>You cannot restore it once deleted.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" onclick="document.querySelector('#delete-form').submit()">Sure</button>
                    <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            </div>
        </div>
        <form method="POST" id="delete-form" action="{{route('todos.destroy',$todo->id)}}">
            @csrf
            @method('DELETE')
        </form>
    </div>
@endsection