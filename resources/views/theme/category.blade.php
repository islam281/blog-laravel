@extends('theme.master')

@section('title','category')
@section('active-category','active')

@section('content')



@include('theme.partials.hero',['title'=> $category_name])


  <!--================ Start Blog Post Area =================-->
  <section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-md-6">
              <div class="single-recent-blog-post card-view">
                <div class="thumb">

                    @if(isset($blogs)&&count($blogs)>0)

                    @foreach ($blogs as $blog)

                    <img class="card-img rounded-0" src="{{asset('storage')}}/blogs/{{$blog->image}}" alt="">
                    <ul class="thumb-info">
                      <li><a href="#"><i class="ti-user"></i>{{$blog->user->name}}</a></li>
                      <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="{{route('blogs.show',['blog'=>$blog])}}">
                      <h3>{{$blog->name}}</h3>
                    </a>
                    <p>{{$blog->description}}</p>
                    <a class="button" href="{{route('blogs.show',['blog'=>$blog])}}">Read More <i class="ti-arrow-right"></i></a>
                  </div>
                </div>
              </div>
                    @endforeach

                    @endif


          <div class="row">
            <div class="col-lg-12">

{{      $blogs->render('pagination::bootstrap-4') }}

</div>
          </div>
        </div>

        <!-- Start Blog Post Siddebar -->
        <div class="col-lg-4 sidebar-widgets">
          <div class="widget-wrap">
            <div class="single-sidebar-widget newsletter-widget">
              <h4 class="single-sidebar-widget__title">Newsletter</h4>
              <div class="form-group mt-30">
                <div class="col-autos">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email'">
                </div>
              </div>
              <button class="bbtns d-block mt-20 w-100">Subcribe</button>
            </div>

            <div class="single-sidebar-widget post-category-widget">
              <h4 class="single-sidebar-widget__title">Catgory</h4>
              <ul class="cat-list mt-20">
                <li>
                  <a href="#" class="d-flex justify-content-between">
                    <p>Technology</p>
                    <p>(03)</p>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex justify-content-between">
                    <p>Software</p>
                    <p>(09)</p>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex justify-content-between">
                    <p>Lifestyle</p>
                    <p>(12)</p>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex justify-content-between">
                    <p>Shopping</p>
                    <p>(02)</p>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex justify-content-between">
                    <p>Food</p>
                    <p>(10)</p>
                  </a>
                </li>
              </ul>
            </div>

            <div class="single-sidebar-widget popular-post-widget">
              <h4 class="single-sidebar-widget__title">Recent Post</h4>
              <div class="popular-post-list">
                <div class="single-post-list">
                  <div class="thumb">
                    <img class="card-img rounded-0" src="{{asset('assets')}}/img/blog/thumb/thumb1.png" alt="">
                    <ul class="thumb-info">
                      <li><a href="#">Adam Colinge</a></li>
                      <li><a href="#">Dec 15</a></li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="blog-single.html">
                      <h6>Accused of assaulting flight attendant miktake alaways</h6>
                    </a>
                  </div>
                </div>
                <div class="single-post-list">
                  <div class="thumb">
                    <img class="card-img rounded-0" src="{{asset('assets')}}/img/blog/thumb/thumb2.png" alt="">
                    <ul class="thumb-info">
                      <li><a href="#">Adam Colinge</a></li>
                      <li><a href="#">Dec 15</a></li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="blog-single.html">
                      <h6>Tennessee outback steakhouse the
                        worker diagnosed</h6>
                    </a>
                  </div>
                </div>
                <div class="single-post-list">
                  <div class="thumb">
                    <img class="card-img rounded-0" src="{{asset('assets')}}/img/blog/thumb/thumb3.png" alt="">
                    <ul class="thumb-info">
                      <li><a href="#">Adam Colinge</a></li>
                      <li><a href="#">Dec 15</a></li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="blog-single.html">
                      <h6>Tennessee outback steakhouse the
                        worker diagnosed</h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Blog Post Siddebar -->
      </div>
  </section>
  <!--================ End Blog Post Area =================-->




@endsection
