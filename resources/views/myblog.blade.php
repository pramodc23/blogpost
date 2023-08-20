@extends('layouts.app')


@section('content')
	
<div class="section search-result-wrap">
    <div class="container">
      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
      <div class="" style="margin-bottom: 10px;">
        <a href="{{ url('createblog') }}" class="btn btn-primary ">Add Blog</a>
      </div>
      <div class="row posts-entry">
        <div class="col-lg-12">

          @foreach($blogs as $blog)
      
            <div class="blog-entry d-flex blog-entry-search-item">
              <a href="single.html" class="img-link me-4">
                <img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
              </a>
              <div>
                <span class="date"> {{ $blog->created_at->format('M j, Y') }}  <a href="{{ url('/blogs').'/'.$blog->id.'/edit' }}" class="btn btn-secondary ">Edit</a> </span>
                <h2><a href="single.html">{{ $blog->name }}</a></h2>
                <p>{{ $blog->description }}</p>                
              </div>
            </div>
          @endforeach

       

        {{--  <div class="row text-start pt-5 border-top">
            <div class="col-md-12">
              <div class="custom-pagination">
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>...</span>
                <a href="#">15</a>
              </div>
            </div>
          </div> --}}

        </div>

        
      </div>
    </div>
  </div>
@endsection