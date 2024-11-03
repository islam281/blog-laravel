@extends('theme.master')

@section('title','contact us')

@section('active-contact','active')

@section('content')

@include('theme.partials.hero',["title"=>'contact us'])


  <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="{{ route('register.post') }}" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-6">
                <div class="form-group">

                    @csrf
                  <input class="form-control border" name="name" id="name" type="text" value="{{old('name')}}" placeholder="Enter your name">



                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                </div>
                <div class="form-group">
                  <input class="form-control border" name="email" id="email" type="email" value="{{old('email')}}" placeholder="Enter email address">

                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control border" name="password" id="name" type="password" placeholder="Enter your password">


                    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

                </div>
                <div class="form-group">
                  <input class="form-control border" name="password_confirmation" type="password" placeholder="Enter your password confirmation">
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
                <a  class="mx-3" href="{{route('login')}}">already registered?</a>
              <button type="submit" class="button button--active button-contactForm">Register</button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
@endsection
