@extends('layouts.app')
@section('content')
    <h3 class="text-center">Edit Todo</h3>
    <form action="{{route('todos.update',$todo->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="md-form">
            <label for="title">Todo Title</label>
            <input type="text" name="title" id="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') ? : $todo->title }}" placeholder="Enter Title">
            @if($errors->has('title')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('title')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <style>
            .md-form label.active {
                -webkit-transform: translateY(-25px) scale(0.8);
                transform: translateY(-25px) scale(0.8);
            }
        </style>
        <div class="md-form mt-5">
            <label for="body" class="mb-4">Todo Description</label>
            <textarea name="body" id="body" rows="4" class="md-textarea mt-4 form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" placeholder="Enter Todo Description">{{ old('body') ? : $todo->body }}</textarea>
            @if($errors->has('body')) {{-- <-check if we have a validation error --}}
                <span class="invalid-feedback">
                    {{$errors->first('body')}} {{-- <- Display the First validation error --}}
                </span>
            @endif
        </div>
        <button type="submit" class="btn blue-gradient btn-block">Update</button>
    </form>
@endsection