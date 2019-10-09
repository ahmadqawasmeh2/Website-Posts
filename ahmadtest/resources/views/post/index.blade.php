
@extends('layouts.app')
@section('content')
<div class="content">
 <div class="container">

<div class="row container">

            @foreach ($post  as $post )
            <div class="col-sm-4">

      <div class="card" style=" margin-top: 27px;">
         <div class="card-header" style="background-color:rgba(0,123,255,.25);">
          <h2>{{ $post ['firstname']}}-{{ $post ['lastname']}}</h2>

      </div>
                    <div class="card-body">
                      <h3 class="card-title">  {{ $post ['subject']}}</h3>
<img style="height: 200px; width: 100%; display:block;" src="/storage/Post_img/{{$post->Post_Img}}" alt="Card image">


                    </div>
                    <div class="card-footer text-muted"style="background-color:rgba(0,123,255,.25);;">
                    <h6> Created at:{{ $post ['created_at']}}</h6>
                    <h6> By:{{$post->user->name}}</h6>

    <a href="/post/{{$post->id}}"class="btn btn-primary">More</a>
                     </div>

                  </div>
                </div>
            @endforeach


</div>
   </div>
</div>

   @endsection
