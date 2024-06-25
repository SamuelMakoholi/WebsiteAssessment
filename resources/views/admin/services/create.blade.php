@extends('admin.layouts.master')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Services</h1>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Create Services</h4>
            </div>

        
            <div class="card-body">
                <form method="POST" action="{{route('service.store')}}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="from-group">
                        <label>Icon</label>
                        <div>
                            <button class="btn btn-primary" data-selected-class="btn-danger"
                            data-unselected-class="btn-info" role="iconpicker" name="icon"></button>
                        </div>
                    </div>
                    <div class="from-group mt-4">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group mt-4">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
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