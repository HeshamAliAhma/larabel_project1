<h1>Editing A File</h1>
<form action="{{route('updateFile',$file->id)}}" method="post">
    @method('put')
    @csrf
    <label>
        <input  type="text" name="title" value="{{$file->title}}">
    </label>
    <br>
    <br>
    <label>
        <input  type="text" name="body" value="{{$file->body}}">
    </label>
    <br>
    <br>
    <button type="submit">submit</button>
</form>
