@extends('layouts.app')
@section('content')
@include('includes.slider')
<div class="content">
 <div class="container">
              <ol class="breadcrumb1">
              <li class="last"><h3><strong><em>Last Postings</em></strong></h3></li>
              </ol>
<div class="row container">
             @foreach ($post as $post)
            <div class="col-sm-4">

      <div class="card" style=" margin-top: 27px;">
         <div class="card-header" style="background-color:#dee2e6;">
          <h2>{{ $post['firstname']}}-{{ $post['lastname']}}</h2>

      </div>
                    <div class="card-body">
                      <h3 class="card-title">  {{ $post['subject']}}</h3>

<img  class="card-img-top"style="height: 200px; width: 100%; display:block;" src="/storage/Post_img/{{$post->Post_Img}}" alt="Card image">


                    </div>
                    <div class="card-footer text-muted"style="background-color:#dee2e6;">
                    <h6> Created at:{{ $post['created_at']}}</h6>
                    <h6> By:{{$post->user->name}}</h6>

    <a href="/post/{{$post->id}}"class="btn btn-secondary">More</a>
                     </div>

                  </div>
                </div>
            @endforeach


</div>
   </div>
</div>

 <div class="title m-b-md">
        <footer class="site-footer" role="contentinfo"  style="margin-top: 9%;">
                <div class="container">

                  <div class="row">
                    <div class="col-12 text-md-center text-left">
                       <p style="margin-left: 18%;">

                        Copyright &copy;
                        All rights reserved
                        with <i class="fa fa-heart" aria-hidden="true"></i> by
                        Ahmad_Al_Qawasmeh

                      </p>
                    </div>
                  </div>
                </div>
              </footer>

</div>
   </div>
   @endsection




