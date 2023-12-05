<h1>creating A File</h1>
<form action="{{route('insertFiles')}}" method="post">
    @csrf
    <label>
        <input  type="text" name="title" placeholder="Enter Title">
    </label>
    <br>
    <br>
    <label>
        <input  type="text" name="body" placeholder="Enter Body">
    </label>
    <br>
    <br>
    <button type="submit">submit</button>
</form>
