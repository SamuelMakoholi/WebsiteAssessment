@extends('admin.layouts.master')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Pricing</h1>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Pricing</h4>
            </div>

        
            <div class="card-body">
                <form method="POST" action="{{route('pricing.update', $pricing->id)}}" enctype="multipart/form-data">
                    @csrf
                   @method('PUT')
                   <div class="from-group mt-4">
                    <label>Pricing Name</label>
                    <input type="text" class="form-control" value="{{$pricing->name}}" name="name">
                </div>

                <div class="form-group mt-4">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{$pricing->description}}</textarea>
                  </div>

                  <div class="from-group mt-4">
                    <label>Amount</label>
                    <input type="number" class="form-control" value="{{$pricing->amount}}" name="amount">
                </div>

                <div class="from-group mt-4">
                    <label>Button Text</label>
                    <input type="text" class="form-control" value="{{$pricing->trial_button_text}}" name="button_text">
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