<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Comment;
use App\Post;
Use App\Http\Requests;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class commentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function insert(Request $request){
            $comment = $request->comment;
            $user = Auth::user()->id ;
            $post = $request->post_id; 
            $action = "post";
            $date = Carbon::today();
            $data = [
                'comment_text' => $comment,
                'user_id' => $user,
                'post_id' => $post,
                'comment_action' => $action,
                'date' => $date
            ];
            
            Comment::create($data);
            Session::put('messege','Post added successfully!!');
            return redirect()->back();
    }
}
