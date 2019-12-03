
@extends('layouts.app')

@section('content')

<div class="content">
 <div class="container">
    <div class="panel panel-danger" style=" margin-top: 60px;">
            <div class="card-header" style="background-color:#dee2e6;">
                    <h2>{{ $post['firstname']}}-{{ $post['lastname']}}</h2>



                </div>

    @if(!Auth::guest())
    @if(Auth::User()->id == $post->user_id)
        <a href="/post/{{$post->id}}/edit"class="btn btn-warning" style="margin-top: -6%; margin-left:85%">Edit</a>
        <a href="/delet/{{$post->id}}"class="btn btn-danger" name="Delete" style="margin-left: 92%;margin-top:-10%;">Delete</a>
  @endif
         @endif
                <div class="card-body">
                 
                        <h3 class="card-title">  {{ $post['subject']}}</h3>
                        <p class="text-justify">{{ $post['body']}}</p>
                     

                        <img style="margin-left: 19%;" src="/storage/Post_img/{{$post->Post_Img}}" alt="Card image">
                      </div>
                      <div class="card-footer text-muted"style="background-color:#dee2e6;">
                            <h6> Created at:{{ $post['created_at']}}</h6>
                             <h6> By:{{$post->user->name}}</h6>
                            <a href="/"class="btn btn-secondary" >Back</a>
                      </div>



</div>
</div>
</div>
   @endsection
