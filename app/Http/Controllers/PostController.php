<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts_table;

class PostController extends Controller
{
    public function index(Posts_table $post)
    {
        return $post->get();
    }
}
