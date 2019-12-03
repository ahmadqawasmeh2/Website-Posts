<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Illuminate\Support\Facades\Storage;


class postcontroller extends Controller
{
  public function __construct()
    {
     $this->middleware('auth',['except'=>['home','show','contact']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //      $post=post::orderBy('created_at','desc')->get();

    //  return view('post.index')->with('post',$post);
    // }



     public function home()
    {
         $post=post::orderBy('created_at','desc')->get();

     return view('pages.home')->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('post.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Request)
    {
        $Request->validate(
        [
            'subject'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'body'=>'required',
    'Post_Img'=>'image|nullable|max:1024',
        ]);
           if ( $Request->hasFile('Post_Img'))
           {
              $fille=$Request->file('Post_Img')->getClientOriginalName();

           $filename=pathinfo($fille,PATHINFO_FILENAME);

          $extencion=$Request->file('Post_Img')->getClientOriginalExtension();

           $fileNameStore=$filename.'_'.time().'.'.$extencion;
            $path=$Request->file('Post_Img')->storeAs('public/Post_Img',$fileNameStore);

           }
           else
           {
            $fileNameStore='no-image.jpg';
           }

        $save=new \App\post();
        $save->subject=$Request->subject;
        $save->firstname=$Request->firstname;
        $save->lastname=$Request->lastname;
        $save->body=$Request->body;
        $save->Post_Img=$fileNameStore;
        $save->user_id=auth()->user()->id;
        $save->save();
        return redirect('/')->with('success','Done successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post=post::find($id);

        return view('post.Show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post=post::find($id);

        if (auth()->user()->id !== $post->user_id)
        {
         return  redirect('/')->with('error','Do not have the power');
        }

        return view('post.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $id=$req->route('id');
        $req->validate(
            [
                'subject'=>'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'body'=>'required',
            'Post_Img'=>'image|nullable|max:1024',

            ]);

          if ( $req->hasFile('Post_Img'))
           {
              $fille=$req->file('Post_Img')->getClientOriginalName();

                $filename=pathinfo($fille,PATHINFO_FILENAME);
                $extencion=$req->file('Post_Img')->getClientOriginalExtension();

                $fileNameStore=$filename.'_'.time().'.'.$extencion;
                $path=$req->file('Post_Img')->storeAs('public/Post_Img',$fileNameStore);

           }



        $post=post::find($id);
        $post->subject=$req->subject;
        $post->firstname=$req->firstname;
        $post->lastname=$req->lastname;
        $post->body=$req->body;
        if ($req->hasFile('Post_Img')) {
              $post->Post_Img=$fileNameStore;
        }
        $post->save();

        return redirect('/')->with('success','update successfully');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post=post::find($id);
         if (auth()->user()->id !== $post->user_id)
        {
          redirect('/post')->with('error','Login please');
        }

       if ($post->Post_Img!='no-image.jpg')
       {
          storage::delete('public/Post_Img/'.$post->Post_Img);
        }
       $post->delete();

        return redirect('/')->with('success','Delet successfully');
    }

    public function cont(Request $req1)
    {
        $req1->validate(
            [
                'Name'=>'required',
                'Phone'=>'required',
                'Email'=>'required',
                'WriteMessage'=>'required',

            ]);
            $save=new \App\contact();
            $save->Name=$req1->Name;
            $save->Phone=$req1->Phone;
            $save->Email=$req1->Email;
            $save->WriteMessage=$req1->WriteMessage;
            $save->save();
            return redirect('/contact')->with('success','Send successfully');
    }


}
