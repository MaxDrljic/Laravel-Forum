<?php

namespace App\Http\Controllers;

use Auth;
use App\Like;
use App\Reply;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function like($id)
    {
        Like::create([
            'reply_id'  => $id,
            'user_id'   => Auth::id()
        ]);

        toastr()->success('You liked the reply!');

        return redirect()->back();
    }

    public function unlike($id)
    {
        $like = Like::where('reply_id', $id)->where('user_id', Auth::id())->first();

        $like->delete();

        toastr()->success('You unliked the reply!');

        return redirect()->back();
    }

    public function best_answer($id)
    {
        $reply = Reply::find($id);

        $reply->best_answer = 1;
        $reply->save();

        $reply->user->points += 100;
        $reply->user->save();

        toastr()->success('Reply has been makred as the best answer!');
        return redirect()->back();
    }
}
