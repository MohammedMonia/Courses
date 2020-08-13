<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $comments = Comment::orderBy('created_at' , 'desc')->paginate();
        //$comments = Comment::all();

        return view('blogs.show', ['comments' => $comments]);
    }

    public function index1()
    {
        
        $comments = Comment::orderBy('created_at' , 'desc')->paginate();
        //$comments = Comment::all();

        return view('admin.comments.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $comment = new Comment();

        $request->validate([
            'comment_body' => 'required|string|max:200|min:3',   
                 'blog_id'=>'required' ,
        ]);

        $comment->comment_body = $request->comment_body;
        $comment->blog_id = $request->blog_id;

        $comment->save();  

        if($request->ajax()){
            return response()->json($comment->comment_body,200);

        }
        

        return redirect()->back();
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        

        return view('blogs.show',['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);

        return view('blogs.edit' , ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);

        $comment->delete();

        return redirect()->back()
        ->with('alert.success', "Comment ({$comment->comment_body}) Deleted!");
    }
}
