
@extends('layouts.app')
@section('content')




<form action="/postss/{{$post->id}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="container">
                <div class="card bg-light mb-3" style="margin-top: 36px;">
          <div class="card-header" style="background-color:rgba(214, 201, 112, 0.88);">
            <h2>Edit Post</h2> </div>

       <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Subject</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Subject" name="subject" >

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">FirstName</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter FirstName" name="firstname">
          </div>
          <div class="form-group">
                <label for="exampleInputPassword1">LastName</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter LastName"name="lastname">
              </div>


          <div class="form-group">
            <label for="exampleTextarea">Discriptions</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" name="body"></textarea>
          </div>

           <div class="form-group">
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile02" name="Post_Img">
        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
      </div>
      <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
      </div>
    </div>

          <input type="hidden" formmethod="PUT">

          <button type="submit" class="btn btn-primary" name="Create Post">Update </button>
        </div>

         





      </form>


</div>

   @endsection
