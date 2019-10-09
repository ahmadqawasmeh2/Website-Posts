@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="/postss"type="button" class="btn btn-primary btn-lg">New Post!</a>

                  <div class="row container">
                    <div class="col-md-8">
                            @foreach($posts as $post)
              <div class="card" style=" margin-top: 27px;">
                 <div class="card-header" style="background-color:rgba(0,123,255,.25);">
                  <h2>{{ $post ['firstname']}}-{{ $post ['lastname']}}</h2>
              </div>
                            <div class="card-body">
                              <h3 class="card-title">{{ $post ['subject']}}</h3>
                               <img style="height: 200px; width: 100%; display:block;" src="/storage/Post_img/{{$post->Post_Img}}" alt="Card image">
                            </div>
                            <div class="card-footer text-muted"style="background-color:rgba(0,123,255,.25);;">
            <h6> Created at:{{ $post ['created_at']}}</h6>
            <a href="/post/{{$post->id}}/edit"class="btn btn-primary">Edit</a>
            <a href="/delet/{{$post->id}}"class="btn btn-danger" >Delete</a>
                             </div>
                          </div>
                        </div>
                   </div>
                   @endforeach


            </div>
        </div>
    </div>
</div>




@endsection
