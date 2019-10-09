@extends('layouts.app')

@section('content')
@include('includes.slider1')
<div class="content">

<br>

      <section class="section border-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5 order-2">
              <form action="/contact" method="post">
                    @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="name">FullName</label>
                    <input type="text" id="name" class="form-control" name="Name"  placeholder="FullName">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" class="form-control" name="Phone"  placeholder="Phone">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control " name="Email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="message">WriteMessage</label>
                 <textarea name="WriteMessage" class="form-control" id="inputExperience" placeholder="WriteMessage"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary px-3 py-3">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 order-2 mb-5">
              <div class="row justify-content-right">
                <div class="col-md-8 mx-auto contact-form-contact-info" style="margin-top: 44px;">
                  <p class="d-flex">
                    <span ><i class="fas fa-map-marker-alt"></i></span>
                    <span>Jordan_Amman</span>
                  </p>

                  <p class="d-flex">
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <span>+962795392859</span>
                  </p>

                  <p class="d-flex">
                    <span ><i class="far fa-envelope" ></i></span>
                    <span>Ahmadqawasmeh2@gmail.com</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




      <footer class="site-footer" role="contentinfo" >
        <div class="container">

          <div class="row">
            <div class="col-12 text-md-center text-left">
               <p>

                Copyright &copy;
                All rights reserved
                with <i class="fa fa-heart" aria-hidden="true"></i> by
                Ahmad_Al_Qawasmeh

              </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

      <!-- loader -->



    </body>
   </div>
   @endsection


