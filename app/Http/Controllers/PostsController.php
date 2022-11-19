<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
//        $posts = DB::select('select * from posts where id=:id',['id'=>3]);
        $posts = DB::table('posts')
//            ->where('id', 1)
            ->where('created_at', '>', now())
            ->whereBetween('id', [1, 3])
            ->whereNotNull('body')
            ->select('title')
            ->get();
//        $posts =DB::table('posts')->insert([
//           'title'=>'abc',
//           'body'=>'body2',
//        ]);

        $posts = DB::table('posts')
            ->where('id', '=', 4)
            ->update([
                'title' => 'abc111',
                'body' => 'body1111',
            ]);
        dd($posts);
        return view('posts.index');
    }
}
