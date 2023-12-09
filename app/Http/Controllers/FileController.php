<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;
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


    public function store(StoreFileRequest $request):RedirectResponse
    {

//        $validation = $request->validate([
//           'title' => 'required',
//            'body' => 'required',
//        ]);

        $validated = $request->validated();

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


    public function show()
    {
        $files = File::onlyTrashed()->get();
        return view('files.softDelete',compact('files'));
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

    public function destroy($id)
    {
//        File::findorfail($id)->delete();
        File::destroy($id);
        return redirect()->route('files');
    }
    public function restore($id)
    {
        File::withTrashed()->find($id)->restore();

        return redirect()->route('files');
    }
}


