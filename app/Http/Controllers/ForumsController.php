<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function index()
    {
        $discussions = Discussion::orderBy('created_at', 'desc')->paginate(3);

        // Second parameter passes the data to the view
        return view('forum', ['discussions' => $discussions]);
    }
}
