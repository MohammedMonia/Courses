<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class Blogscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

        $blogs = Blog::orderBy('created_at' , 'desc')->paginate(3);

        // $blogs = Blog::all();

        return view('admin.posts.index', ['blogs' => $blogs]);
    }

    public function index1()
    {
        $blogs = Blog::orderBy('created_at' , 'desc')->paginate(3);

        // $blogs = Blog::all();

        return view('fronts.posts.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();

        $request->validate([
            'title' => 'required|string|max:200|min:3',
            'content' => 'required|string|max:200000|min:3',
            'video_title' => 'required|string|max:200|min:3', 
            'video_content' => 'required|string|max:200000|min:3',
            'content_description' => 'required|string|max:10000|min:3',
            'video_path' => 'required|string',           
        ]);

        // image    
        $path = Storage::putFile('public', $request->file('files'));
        $url = Storage::url($path);
        
        // post
        $blog->image = $url;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->video_title = $request->video_title;
        $blog->video_content = $request->video_content;
        $blog->content_description = $request->content_description;
        $blog->video_path = $request->video_path;

        $blog->user_id = Auth::user()->id;  
        

        $blog->save();

        return redirect()->route('blogs_path')
        ->with('alert.success', "Post ({$blog->title}) Created!");
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $blog = Blog::with(['comments'])->find($id);

       // dd($blog);


        return view('fronts.posts.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);


        return view('admin.posts.edit' , ['blog' => $blog]);        
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
        $blog = Blog::find($id);

        $request->validate([
            'title' => 'required|string|max:200|min:3',
            'content' => 'required|string|max:200000|min:3',
            'video_title' => 'required|string|max:200|min:3', 
            'video_content' => 'required|string|max:200000|min:3',
            'content_description' => 'required|string|max:10000|min:3', 
            
        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->video_title = $request->video_title;
        $blog->video_content = $request->video_content;
        $blog->content_description = $request->content_description;
        

        $blog->update();

        return redirect()->route('blogs_path', ['blog => $blog'])
        ->with('alert.success', "Post ({$blog->title}) Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect()->route('blogs_path')
        ->with('alert.success', "Post ({$blog->title}) Deleted!");
    }
}
