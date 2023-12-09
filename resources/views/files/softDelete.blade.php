



@extends('layout.master')

@section('title','files')
@section('titlePage','files')

@section('content')

    <div class="files-page d-flex m-20 gap-20">
        <div class="files-content d-grid gap-2">
            @foreach($files as $file)
                <div class="file bg-white p-10 rad-10" style="margin: 10px">
                    <i class="fa-solid fa-download c-grey p-absolute"></i>
                    <div class="icon txt-c">
                        <img class="mt-15 mb-15" src="{{asset('style/images/eps.svg')}}" alt="" />
                    </div>
                    <div class="txt-c mb-10 fs-14">{{$file->title}}</div>
                    <p class="c-grey fs-13">{{$file->body}}</p>
                    <div class="info between-flex mt-10 pt-10 fs-13 c-grey">
                        <form action="{{route('restoreFile',$file->id)}}" method="post">
                            @csrf
                            <button type="submit">restore</button>
                        </form>

                        <form method="post" action="{{route('deleteFile',$file->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop
