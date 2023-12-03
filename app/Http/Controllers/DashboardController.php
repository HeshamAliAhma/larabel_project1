<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $tables = DB::table('tables')->get();
        return view('dashboard',compact('tables'));
    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard.createTable');
    }

    public function store(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        DB::table("tables")->insert(values: [
            'username'=>$request->username,
            'finishDate'=>$request->finishDate,
            'client'=>$request->client,
            'price'=>$request->price,
            'status'=>$request->status,
        ]);
        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $table = DB::table('tables')->where('id',$id)->first();
        return view('dashboard.updateTable',compact('table'));
    }

    public function update(Request $request,$id): \Illuminate\Http\RedirectResponse
    {
        DB::table('tables')->where('id',$id)->update([
            'username'=>$request->username,
            'finishDate'=>$request->finishDate,
            'client'=>$request->client,
            'price'=>$request->price,
            'status'=>$request->status,
        ]);
        return redirect()->route('dashboard');
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        DB::table('tables')->where('id',$id)->delete();
        return redirect()->route('dashboard');
    }
    public function delete_all(): \Illuminate\Http\RedirectResponse
    {
        DB::table('tables')->truncate();
        return redirect()->route('dashboard');
    }

}
