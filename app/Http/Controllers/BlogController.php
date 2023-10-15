<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','DESC')->get();
        return view('myblog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createblog()
    {
        return view('addblog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insertdata = [
            'name'                       => $request->input('title'),
            'description'                => $request->input('description')
        ];
        $task = Blog::create($insertdata);

        $request->session()->flash('success', 'Blog added successfully');
        return redirect('blogs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {       
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editblog( $id)
    {  
        $blogs = Blog::where('id',$id)->first();
        return view('editblog');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
