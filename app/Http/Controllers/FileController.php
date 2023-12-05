<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index()
    {
        $files = File::all();
        return view('files/index',compact('files'));
    }


    public function create()
    {
        return view('files/createFile');
    }


    public function store(Request $request)
    {
        // new Post using save()
            $file = new File();
            $file->title = $request->title;
            $file->body = $request->body;
            $file->save();

//        File::create([
//            'title'=>$request->title,
//            'body'=>$request->body,
//        ]);
        // $file->create(
        //      $request->all()
        //  );
        return redirect()->route('files');
    }


    public function show(File $file)
    {
        //
    }

    public function edit($id)
    {
        $file = File::findorfail($id);
        // $file = File::where('id',$id)->first()
        return view('files.editFile',compact('file'));
    }


    public function update(Request $request,$id)
    {
        $file = File::findorfail($id);
//        $file->title = $request->title;
//        $file->body = $request->body;
//        $file->save();
        $file->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        // $file->update(
        //      $request->all()
        //  );
        return redirect()->route('files');
    }

    public function destroy(File $file)
    {
        //
    }
}
