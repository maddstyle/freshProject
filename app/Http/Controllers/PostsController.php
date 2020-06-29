<?php

namespace App\Http\Controllers;

use DB;
use App\Post;


class PostsController extends Controller
{
  public function show($slug)
  {
    // $post = DB::table('posts')->where('slug', $slug)->first();
    return view('post', [
      'post' => Post::where('slug', $slug)->firstOrFail()
    ]);
    // $posts = [
    //   'my-first-post' => 'Hello, this is my first blog post!',
    //   'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    // ];

    // if (!array_key_exists($post, $posts)) {
    //   abort(404, 'Sorry, that post was not found.');
    // }


  }
}
