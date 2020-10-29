<?php

namespace App\Http\Controllers;

use App\Models\View;
use Illuminate\Http\Request;


class ViewController extends Controller
{
    public function index()
    {

        $views = \Illuminate\Support\Facades\DB::table('views')->get();


        return view("views")->with('views', $views);

    }

    public function show($id)
    {
        $view = View::findOrfail($id);



        return $view;
    }

    public function create()
    {
        return view('create');
    }


    public function edit($id){

        $view =View::findOrfail($id);


        return view('edit')->with('view', $view);
    }



    public function update(Request $request,View $view){

        $view->update($request->all());

        return redirect()->route('views.index');
    }




    public function save(Request $request)
    {
//        return $request;

        $view = new View($request->all());
        $view->save();
        return redirect()->back();

    }


    public function delete(View  $view){
        $view->delete();
        return redirect()->back();
    }

}
