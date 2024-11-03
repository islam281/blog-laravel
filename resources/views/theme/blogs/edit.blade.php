@extends('theme.master')

@section('title','edit Blog')

@section('active-contact','active')

@section('content')

@include('theme.partials.hero',["title"=>$blog->name])


  <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">




            @if (session('editBlogStatus'))
            <div class="alert alert-success">
                {{ session('editBlogStatus') }}
            </div>
        @endif







          <form action="{{ route('blogs.update',['blog'=>$blog]) }}" class="form-contact contact_form"  method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
              @csrf
              @method("PUT")
            <input class="form-control border" name="name" id="name" type="text" value="{{$blog->name}}" placeholder="Enter Blog name">

              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-group">
            <input class="form-control border" name="image" id="email" type="file" value="{{$blog->image}}" placeholder="upload Image">

              @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

        </div>
        <div class="form-group">
          <select class="form-control border" name="category_id">


          {{--   <option>{{$blog->category->name}}</option> --}}

            @if (count($Categories)>0)

             @foreach ($Categories as $category)
             <option value="{{$category->id}}"@if ($category->id==$blog->category_id)
                 selected
             @endif>{{$category->name}}</option>
             @endforeach




            @endif
          </select>


            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

            <div class="form-group">
              <textarea class="form-control border" name="description" id="description" placeholder="Enter your description ">{{$blog->description}}</textarea>


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
