<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        
        return View('admin.about.index', ['abouts' => $abouts]);
    }

    public function index1()
    {
        $abouts = About::all();
        
        return View('fronts.about.index', ['abouts' => $abouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About();

        $request->validate([
            'about_title' => 'required|string|max:2000|min:3',
            'about_body' => 'required|string|max:20000|min:3',  
            'aboutBlog_title' => 'required|string|max:2000|min:3', 
            'aboutBlog_body' => 'required|string|max:20000|min:3',         
        ]);

        // image    
        $path = Storage::putFile('public', $request->file('files'));
        $url = Storage::url($path);
        
        // about

        $about->image = $url;
        $about->about_title = $request->about_title;
        $about->about_body = $request->about_body;
        $about->aboutBlog_title = $request->aboutBlog_title;
        $about->aboutBlog_body = $request->aboutBlog_body;
         
        

        $about->save();
            
        return redirect()->route('about.index')
        ->with('alert.success', "about ({$about->about_title}) Created!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);


        return view('admin.about.edit' , ['about' => $about]);
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
        $about = About::find($id);

        $request->validate([
            'about_title' => 'required|string|max:2000|min:3',
            'about_body' => 'required|string|max:20000|min:3',  
            'aboutBlog_title' => 'required|string|max:2000|min:3', 
            'aboutBlog_body' => 'required|string|max:20000|min:3',         
        ]);
        
        // about

        $about->about_title = $request->about_title;
        $about->about_body = $request->about_body;
        $about->aboutBlog_title = $request->aboutBlog_title;
        $about->aboutBlog_body = $request->aboutBlog_body;

        $about->update();
            
        return redirect()->route('about.index')
        ->with('alert.success', "about ({$about->about_title}) Updated!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);

        $about->delete();

        return redirect()->route('about.index')
        ->with('alert.success', "About ({$about->about_title}) Deleted!");
    }
}
