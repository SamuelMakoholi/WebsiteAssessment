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
                            <h4>All Sections</h4>
                            <div class="card-header-action">
                                <a href="{{ route('hero-section.create') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i> Creat New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($heroSection as $sec)
                                            <tr>
                                                <td>{{ $sec->id }}</td>
                                                <td>{{ $sec->title }}</td>
                                                <td> {!! nl2br(e($sec->description)) !!}</td>

                                                <td>
                                                    <a href="{{ route('hero-section.edit', $sec->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <!-- Delete Form -->
                                                    <form action="{{ route('hero-section.destroy', $sec->id) }}"
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
