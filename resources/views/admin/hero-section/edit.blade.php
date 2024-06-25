@extends('admin.layouts.master')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Hero Section</h1>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Create Hero Section Content</h4>
            </div>

        
            <div class="card-body">
                <form method="POST" action="{{route('hero-section.update', $heroSection->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{$heroSection->title}}">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control summernote">{{$heroSection->description}}</textarea>
                      </div>

                      <div class="from-group mb-5">
                        <img src="{{asset($heroSection->thum_image)}}" width="100"><br>
                        <label>Hero Image</label>
                        <input type="file" name="thumb_image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            
            </div>
            
          </div>
        </div>
      
      </div>

    </div>
  </section>
    
@endsection 