<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }
    
    public function add(){
        return view('add');
    }

    public function create(Request $request){
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }

    public function edit(Request $request){
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Author::find($request->id)->update($form);
        return redirect('/');
    }
}
