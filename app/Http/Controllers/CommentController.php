<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\CommentStoreRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(CommentStoreRequest $request, Article $article)
    {
        dd($request->all());

        $article->comments()->create([
            'parent_id' => $request->comment_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        return back();
    }

}
