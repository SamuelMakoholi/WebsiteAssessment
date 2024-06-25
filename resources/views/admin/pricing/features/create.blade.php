@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Pricing Feature</h1>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Pricing Feature</h4>
                        </div>


                        <div class="card-body">
                            <form method="POST" action="{{ route('price-feature.store') }}" enctype="multipart/form-data">
                                @csrf


                                <div class="form-group">
                                    <label for="inputState">Pricing Name</label>
                                    <select id="inputState" class="form-control" name="pricing">
                                        <option value="">Select</option>
                                        @foreach ($pricings as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>

                                <div class="from-group mt-4">
                                    <label>Feature Text</label>
                                    <input type="text" class="form-control" name="feature_text">
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
