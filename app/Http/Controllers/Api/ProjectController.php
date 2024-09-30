<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ProjectController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id')->get();
        $success = true;
        $response = [
            'success' => $success,
            'results' => $posts,
        ];

        return response()->json($response);
    }
}
