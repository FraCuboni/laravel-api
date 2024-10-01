<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Type;
use App\Models\Tag;

class ProjectController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id')->with('type', 'tags')->paginate(12);  //con with prendo anche le entità in relazione
        $success = true;
        $response = [
            'success' => $success,
            'results' => $posts,
        ];

        return response()->json($response);
    }

    public function postBySlug($slug)
    {
        $post = Post::where('slug', $slug)->with('type', 'tags')->first();
        if ($post) {
            $success = true;
            $post->image_path = asset('storage' . $post->image_path);
        } else {
            $success = false;
        }


        return response()->json(compact('post', 'success'));
    }

    public function types()
    {
        $types = Type::all();
        return response()->json($types);
    }

    public function postByType($slug)
    {
        $type = Type::where('slug', $slug)->with('posts')->paginate(10);
        if ($type) {
            $success = true;
        } else {
            $success = false;
        }


        return response()->json(compact('success', 'type'));
    }

    public function tags()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

    public function postByTag($slug)
    {
        $tag = Tag::where('slug', $slug)->with('posts')->paginate(10);
        if ($tag) {
            $success = true;
        } else {
            $success = false;
        }


        return response()->json(compact('success', 'tag'));
    }
}
