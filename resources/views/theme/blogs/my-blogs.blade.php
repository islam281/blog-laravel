@extends('theme.master')

@section('title','Add New Blog')

@section('active-contact','active')

@section('content')

@include('theme.partials.hero',["title"=>'Add New Blog'])

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

    @if (session('deleteBlogStatus'))
    <div class="alert alert-success">
        {{ session('deleteBlogStatus') }}
    </div>
@endif

  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th>post</th>
          <th>action</th>
        </tr>
      </thead>

      <tbody>

        @if (count($blogs)>0)
        @foreach ($blogs as $blog)

        <tr>
          <td><a href="{{route('blogs.show',['blog'=>$blog])}}">{{$blog->name}}</a></td>
          <td><div>

            <a href="{{route('blogs.edit',['blog'=>$blog])}}">edit</a>



            <form action="{{route('blogs.destroy',['blog'=>$blog])}}" method="post" id="delete-form" class="on-line">


             @csrf
             @method('delete')

             <a href="javascript:$('form#delete-form').submit();">delete</a>

            </form>
        </div></td>
        </tr>
        @endforeach
        @endif


    </tbody>
</table>

        @if (count($blogs)>0)


{{  $blogs->render('pagination::bootstrap-4')   }}

@endif
</div>

  </body>
@endsection
