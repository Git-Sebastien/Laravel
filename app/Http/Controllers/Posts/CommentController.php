<?php

namespace App\Http\Controllers\Posts;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    public $post_id;

    public $session;

    public function postComment(Request $request,Comment $comment)
    {   
        $this->post_id = $request->input('post_id');
       
        $request->validate([
            'author'=>'required',
            'content'=>'required',
            'email'=>'required',  
        ]);
        
      
        $comment = Comment::create([
            'author'=> $request->input('author'),
            'email'=> $request->input('email'),
            'content'=> $request->input('content'),
            'post_id'=> $this->post_id
        ]);


        $comment->save();
         
        return redirect($request->session()->previousUrl());
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
       $this->session = $request->session()->all()['post_id'];
        DB::table('comment')
        ->where('id','=',$request->route('id'))
        ->update(['content'=>$request->input('content')]);
  
        return redirect("/posts/$this->session");
    }
}
