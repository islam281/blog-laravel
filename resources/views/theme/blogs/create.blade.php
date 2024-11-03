@extends('theme.master')

@section('title','Add New Blog')

@section('active-contact','active')

@section('content')

@include('theme.partials.hero',["title"=>'Add New Blog'])


  <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">




            @if (session('newBlogStatus'))
            <div class="alert alert-success">
                {{ session('newBlogStatus') }}
            </div>
        @endif







          <form action="{{ route('blogs.store') }}" class="form-contact contact_form"  method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
              @csrf
            <input class="form-control border" name="name" id="name" type="text" value="{{old('name')}}" placeholder="Enter Blog name">

              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-group">
            <input class="form-control border" name="image" id="email" type="file" value="{{old('image')}}" placeholder="upload Image">

              @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

        </div>
        <div class="form-group">
          <select class="form-control border" name="category_id">


            <option>select category</option>

            @if (count($Categories)>0)

             @foreach ($Categories as $category)
             <option value="{{$category->id}}">{{$category->name}}</option>
             @endforeach




            @endif
          </select>


            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

            <div class="form-group">
              <textarea class="form-control border" name="description" id="description" placeholder="Enter your description ">{{old('description')}}</textarea>


                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>




            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">submit</button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
@endsection
