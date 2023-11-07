<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Author::where('name', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
    public function bind(Author $author)
    {
        $data = [
            'item'=>$author,
        ];
        return view('author.binds', $data);
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request)
    {
        $form=$request->all();
        dd($form);
        Author::create($form);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $form=$request->all();
        Author::where('id',$request->id)->update($form);
        return redirect('/');
    }
}