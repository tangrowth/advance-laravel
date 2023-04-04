<?php

namespace App\Http\Controllers;

// Eloquentを使用できるようにAuthorモデルを読み込む
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }
}