<?php

namespace App\Http\Controllers\Posts;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public $post_id;

    public $user_id;

    public $session;

    public function postComment(Request $request,Comment $comment)
    {   
        $this->post_id = $request->input('post_id');
        $this->user_id = Auth::user()->id ?? 0;
        
       
        $request->validate([
            'author'=>'required',
            'content'=>'required',
            'email'=>'required',  
        ]);
        
      
        $comment = Comment::create([
            'author'=> $request->input('author'),
            'email'=> $request->input('email'),
            'content'=> $request->input('content'),
            'post_id'=> $this->post_id,
            'user_id'=> $this->user_id
        ]);


        $comment->save();
         
        return redirect($request->session()->previousUrl()."/#comment");
    }

    public function destroy($id,Request $request)
    {
        $comment = Comment::find($id);

        $comment->delete();

        return redirect($request->session()->previousUrl());
    }

    public function editComment($id,Request $request)
    {
        
        $comment = Comment::find($id);

        return view('posts.comment.edit',compact('comment'));
    }

    public function updateComment(Request $request,$id)
    {
        $id = $request->input('content');
        $this->session = $request->session()->pull('post_id','default');
        DB::table('comment')
        ->where('id','=',$request->route('id'))
        ->update(['content'=> $id]);
  
        return redirect("/posts/$this->session/#comment");
    }
}
