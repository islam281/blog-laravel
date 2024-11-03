@extends('theme.master')

@section('title','contact us')

@section('active-contact','active')

@section('content')

@include('theme.partials.hero',["title"=>$blog->name])

   <!--================ Start Blog Post Area =================-->
   <section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div class="main_blog_details">
                <img class="img-fluid" src="{{asset('storage/blogs/'.$blog->image)}}" alt="">
                <a href="#"><h4>{{$blog->name}}</h4></a>
                <div class="user_details">
                  <div class="float-right mt-sm-0 mt-3">
                    <div class="media">
                      <div class="media-body">
                        <h5>{{$blog->user->name}}</h5>
                        <p>{{$blog->created_at->format('d-M-Y')}}</p>
                      </div>
                      <div class="d-flex">
                        <img width="42" height="42" src="{{asset('assets')}}/img/avatar.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <p>{{$blog->description}}</p>

              </div>






              <div class="comments-area">
                  <h4>{{count($blog->comments)}} Comments</h4>
                  @if (count($blog->comments))
                    @foreach ($blog->comments as $comment)

                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="{{asset('assets')}}/img/avatar.png" width="50px">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">{{$comment->name }}</a></h5>
                                    <p class="date">{{$comment->created_at->format('d M Y') }} </p>
                                    <p class="comment">
                                        {{$comment->message }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

              </div>






              @if (session('PostCommentStatus'))
              <div class="alert alert-success">
                  {{ session('PostCommentStatus') }}
              </div>
          @endif

              <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form action="{{route('comments.store')}}" method="POST">
                      <div class="form-group form-inline">


                        @csrf

                        <input type="hidden" name="blog_id" value="{{$blog->id}}">

                        <div class="form-group col-lg-6 col-md-6 name">
                          <input type="text" class="form-control" name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                          @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                        </div>
                        <div class="form-group col-lg-6 col-md-6 email">
                          <input type="email" class="form-control" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                          @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                        </div>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                          @error('subject')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>
                      <div class="form-group">
                          <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>

                          @error('message')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>
                             <button type="submit">post comments</button>

                            </form>
              </div>
        </div>

      @include('theme.partials.sidebar')
      </div>
  </section>
  <!--================ End Blog Post Area =================-->
@endsection
