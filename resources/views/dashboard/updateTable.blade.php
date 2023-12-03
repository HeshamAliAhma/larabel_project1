


@extends('layout.master')

@section('title','updateTable')
@section('titlePage','update Table')


@section('content')
    <div class="container">
        <h1>#{{$table->id}}</h1>
        <form action="{{ route('update_table',$table->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" value="{{$table->username}}" name="username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" value="{{$table->finishDate}}" name="finishDate" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>

            <label for="basic-url" class="form-label">Your vanity URL</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" value="{{$table->client}}" name="client" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" value="{{$table->price}}" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" value="{{$table->status}}" class="form-control" name="status" aria-label="Server">
            </div>


            <input type="submit" value="send">
        </form>
    </div>


@endsection
