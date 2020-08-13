<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribes = Subscribe::all();

       

        return view('admin.subscribe.subscribe', ['subscribes' => $subscribes]);
    }

   /* public function index1()
    {
        
        $subscribeslist = Subscribe::where('id', '<=', $correctedComparisons)->get();

        $subscribesCount = $subscribeslist->count();

        return view('admin.subscribe.subscribe', ['subscribesCount' => $subscribesCount]);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscribe = new Subscribe();

        $request->validate([
            'name' => 'required|string|max:200|min:3',
            'email' => 'required|string|email|max:255|unique:subscribes',          
        ]);
        
        // subscribe
        $subscribe->name = $request->name;
        $subscribe->email = $request->email;
         
        

        $subscribe->save();
            
        return redirect()->route('blogs_path_index1')
        ->with('alert.success', "Welcome {$subscribe->name} Your subscribe is succesfully!");
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
        //
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
        $subscribe = Subscribe::find($id);

        $subscribe->delete();

        return redirect()->route('subscribe.index')
        ->with('alert.success', "subscribe ({$subscribe->id}) Deleted!");
    }
}
