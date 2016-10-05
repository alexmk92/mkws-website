<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ForumController extends Controller
{
    //
    public function index()
    {
        $posts = [];
        return view('forum.index', compact('posts'));
    }
}
