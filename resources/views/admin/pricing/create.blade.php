@extends('admin.layouts.master')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Create Pricing</h1>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Create Pricing</h4>
            </div>

        
            <div class="card-body">
                <form method="POST" action="{{route('pricing.store')}}" enctype="multipart/form-data">
                    @csrf
                   
                 
                    <div class="from-group mt-4">
                        <label>Pricing Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group mt-4">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                      </div>

                      <div class="from-group mt-4">
                        <label>Amount</label>
                        <input type="number" class="form-control" name="amount">
                    </div>

                    <div class="from-group mt-4">
                        <label>Button Text</label>
                        <input type="text" class="form-control" name="button_text">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                </form>
            
            </div>
            
          </div>
        </div>
      
      </div>

    </div>
  </section>
    
@endsection 