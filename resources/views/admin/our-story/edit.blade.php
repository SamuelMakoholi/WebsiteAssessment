@extends('admin.layouts.master')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Our Story</h1>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Our Story</h4>
            </div>

        
            <div class="card-body">
                <form method="POST" action="{{route('our-story.update', $ourStory->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label>Sub Title</label>
                        <input type="text" class="form-control" value="{{$ourStory->subtitle}}" name="subtitle">
                    </div>

                    <div class="from-group mt-3">
                        <label>Title</label>
                        <input type="text" class="form-control" value="{{$ourStory->title}}" name="title">
                    </div>
                      <div class="form-group mt-2">
                        <label>Who We Are</label>
                        <textarea name="who_we_are" class="form-control">{{$ourStory->who_we_are}}</textarea>
                      </div>

                      <div class="form-group mt-2">
                        <label>Our Vision</label>
                        <textarea name="our_vision" class="form-control">{{$ourStory->our_vision}}</textarea>
                      </div>

                      <div class="form-group mt-2">
                        <label>Our History</label>
                        <textarea name="our_history" class="form-control">{{$ourStory->our_history}}</textarea>
                      </div>

                      <div class="from-group mb-5">
                        <img src="{{asset($ourStory->thumb_image)}}" width="100"><br>
                        <label>Image</label>
                        <input type="file" name="thumb_image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            
            </div>
            
          </div>
        </div>
      
      </div>

    </div>
  </section>
    
@endsection 