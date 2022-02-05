<?php

namespace App\Http\Controllers;

use App\Models\post as ModelsPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class post extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        $posts= ModelsPost::get();
        $posts= ModelsPost::paginate(4);
        return view('posts.index',compact('posts'),[
            'posts' => $posts
        ]);
    }


    public function store(Request $request){
        $this->validate($request,[
            'body' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:5048'
        ]);


        $newimagename=time(). '.' .$request->image->extension();
        $request->image->move(public_path('images'),$newimagename);






        $request->user()->posts()->create([
            'body' => $request->body,
            'image_path' => $newimagename
        ]);


        return back();
        
    
    }
}
