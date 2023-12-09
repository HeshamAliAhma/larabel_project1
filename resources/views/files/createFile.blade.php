@extends('layout.master')

@section('title','createFile')
@section('titlePage','Create a File')




@section('content')

{{--    @if($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{$error}}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}



    <form action="{{route('insertFiles')}}" method="post">
        @csrf
        <label>
            <input  type="text" required value="{{old('title')}}" name="title" placeholder="Enter Title" class="@error('title') is-invalid @enderror">
            @error('title')
            <div class="alert-danger alert">{{$message}}</div>
            @enderror
        </label>
        <br>
        <br>
        <label>
            <input  type="text" required value="{{old('body')}}" name="body" placeholder="Enter Body" class="@error('body') is-invalid @enderror">
            @error('body')
            <div class="alert-danger alert">{{$message}}</div>
            @enderror
        </label>
        <br>
        <br>
        <button type="submit">submit</button>
    </form>
@stop


