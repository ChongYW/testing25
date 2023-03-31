<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {

//        return $request->all();

        $comment = new Comment();

        $comment -> insert([
            'comment' => $request->comment,
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
        ]);

        return response()->json($comment);

    }
}
