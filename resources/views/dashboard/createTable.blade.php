


@extends('layout.master')

@section('title','createTable')
@section('titlePage','Create table')


@section('content')
    <div class="container">
        <form action="{{ route('table_insert') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="finishDate" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>

            <label for="basic-url" class="form-label">Your vanity URL</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" name="client" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" name="status" class="form-control" placeholder="Server" aria-label="Server">
            </div>


            <input type="submit" value="send">
        </form>
    </div>


@endsection
