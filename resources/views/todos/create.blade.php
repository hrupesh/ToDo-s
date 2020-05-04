@extends('layouts.app')
@section('content')
    <h3 class="text-center">Create Todo</h3>
    <form action="{{route('todos.store')}}" method="post">
        @csrf
        <div class="md-form">
            <input type="text" required name="title" id="title" class="form-control {{$errors->has('title') ? 'is-invalid' : '' }}" value="{{old('title')}}" >
            <label for="title">Todo Title</label>
            @if($errors->has('title'))
                <span class="invalid-feedback">
                    {{$errors->first('title')}}
                </span>
            @endif
        </div>
        <div class="md-form">
            <textarea name="body" required id="body" rows="4" class="md-textarea form-control {{$errors->has('body') ? 'is-invalid' : ''}}"  >{{old('body')}}</textarea>
            <label for="body">Todo Description</label>
            @if($errors->has('body')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('body')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <button type="submit" class="btn purple-gradient  waves-effect">Create</button>
    </form>
@endsection