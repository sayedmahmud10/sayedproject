<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Order;
class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        return view('posts.index')->with('posts',$posts) ;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('posts.create') ;
        

    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        ['title'=>'required',
        'body'=>'required',
        'cover_image=>image|nullable|max:1999'

        ]);
       
        if($request->hasFile('cover_image')){
            $filenameWithExt =$request->file('cover_image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extention=$request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extention;
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
        else{
            $fileNameToStore='noimage.jpg';
        }
        
        $post=new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->user_id=auth()->user()->id;
        $post->cover_image=$fileNameToStore;
        $post->post_name=$request->input('CATAGORY');
        
        $post->save();
        $order=new Order;
        $order->id=$request->input('id');;
       $order->event=$request->input('event');;
        $order->save();
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Post::find($id);
        return view('posts.show')->with('post',$post) ;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =Post::find($id);
        return view('posts.edit')->with('post',$post) ;

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
        
            $this->validate($request,
            ['title'=>'required',
            'body'=>'required',
            'cover_image=>image|nullable|max:1999'
    
            ]);
            if($request->hasFile('cover_image')){
                $filenameWithExt =$request->file('cover_image')->getClientOriginalName();
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
                $extention=$request->file('cover_image')->getClientOriginalExtension();
                $fileNameToStore=$filename.'_'.time().'.'.$extention;
                $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
            }
            else{
                $fileNameToStore='noimage.jpg';
            }
            $post= Post::find($id);
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            $post->user_id=auth()->user()->id;
            $post->cover_image=$fileNameToStore;
            $post->post_name=$request->input('CATAGORY');
            $post->save();
            return redirect('/home')->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('/home')->with('success','post removed');
    }
    
}
