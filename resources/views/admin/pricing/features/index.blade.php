@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Our Pricing Feature</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create A Pricing feature</h4>
                            <div class="card-header-action">
                                <a href="{{ route('price-feature.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                                    Creat New</a>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Pricing</th>
                                            <th>Feature_text</th>
                                            <th>Action</th>
                                        </tr>

                                        
                                            @foreach ($features as $price)
                                            <tr>
                                            <td>{{$price->id}}</td>
                                            <td>{{$price->pricing->name}}</td>
                                            <td>{{$price->feature_text}}</td>
                            
                                            <td>
                                                {{-- <a href="{{ route('price-feature.edit', $price->id) }}"
                                                    class="btn btn-primary">Edit</a> --}}
                                                <!-- Delete Form -->
                                                <form action="{{ route('price-feature.destroy', $price->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach 
                                     


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

