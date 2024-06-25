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
                            <div class="card-header-action">
                                <a href="{{ route('our-story.create') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i> Creat New</a>
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
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Our History</th>
                                            <th>Our Vaision</th>
                                            <th>Who We Are</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($ourStory as $story)
                                        <tr>
                                            <td>{{ $story->id}}</td>
                                            <td>{{ $story->title}}</td>
                                            <td>{{ $story->subtitle}}</td>
                                            <td>{{ $story->our_history}}</td>
                                            <td>{{ $story->our_vision}}</td>
                                            <td>{{ $story->who_we_are}}</td>
                                            <td><img src="{{ asset($story->thumb_image) }}" alt="{{ $story->title }}" style="width: 100px; height: auto;"></td>
                                            <td>
                                                <a href="{{ route('our-story.edit', $story->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <!-- Delete Form -->
                                                <form action="{{ route('our-story.destroy', $story->id) }}"
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

@push('scripts')
    {{-- {{ $dataTable->scripts(attributes: ['type' => 'module']) }} --}}

    <script>
        $(document).ready(function() {
            $('body').on('click', '.change-status', function() {
                let isChecked = $(this).is(':checked');
                let id = $(this).data('id');
                $.ajax({
                    url: "",
                    method: 'PUT',
                    data: {
                        status: isChecked,
                        id: id
                    },
                    success: function(data) {
                        toastr.success(data.message)
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }

                })

            })
        })
    </script>
@endpush
