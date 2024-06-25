@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Bottom Section</h1>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Bottom Feature</h4>
                        </div>


                        <div class="card-body">
                            <form method="POST" action="{{ route('bottom-section.update', $bottom->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="from-group mt-4">
                                    <label>Feature Text</label>
                                    <input type="text" class="form-control" value="{{$bottom->title}}" name="title">
                                </div>

                                <div class="form-group mt-2">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{$bottom->description}}</textarea>
                                  </div>

                                
                                <div class="from-group mt-4">
                                    <label>Button Url</label>
                                    <input type="text" class="form-control" value="{{$bottom->url}}" name="url">
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
