
@extends('layouts.app')

@section('content')

<div class="content">
 <div class="container">
    <div class="panel panel-danger" style=" margin-top: 60px;">
            <div class="card-header" style="background-color:rgba(0,123,255,.25);">
                    <h2>{{ $post['firstname']}}-{{ $post['lastname']}}</h2>



                </div>

    @if(!Auth::guest())


        <a href="/post/{{$post->id}}/edit"class="btn btn-primary" style="margin-top: -6%; margin-left:85%">Edit</a>
        <a href="/delet/{{$post->id}}"class="btn btn-danger" name="Delete" style="margin-left: 92%;margin-top:-10%;">Delete</a>

         @endif
                <div class="card-body">
                        <h3 class="card-title">  {{ $post['subject']}}</h3>
                        <p class="card-text">{{ $post['body']}}</p>

                        <img style="margin-left: 19%;" src="/storage/Post_img/{{$post->Post_Img}}" alt="Card image">
                      </div>
                      <div class="card-footer text-muted"style="background-color:rgba(0,123,255,.25);">
                            <h6> Created at:{{ $post['created_at']}}</h6>
                             <h6> By:{{$post->user->name}}</h6>
                            <a href="/post"class="btn btn-primary" >Back</a>
                      </div>



    </div>

   </div>

</div>


   @endsection
