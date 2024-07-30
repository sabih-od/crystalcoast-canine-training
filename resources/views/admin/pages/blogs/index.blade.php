@extends('admin.layout.admin')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="mt-0 header-title">Blogs Listing</h4>

                                <a href="{{ route('admin.blog.create') }}">
                                    <button class="btn btn-dark">+ Add Blog</button>
                                </a>
                            </div>
                            <table id="geniustable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Blog & Article Title</th>
                                        <th>Blog & Article Heading</th>
                                        <th>Blog & Article Button Text</th>
                                        <th>Type</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('alerts.delete-modal')

    @include('alerts.inactive-modal')
@endsection

@section('script')
    {{--    Routes for hitting ajax --}}

    <script>
        var indexRoute = '{{ route('admin.blogs.index') }}';

        var moduleName = '{{ request()->segment(2) }}'; // Module is like a which route name is set (e.g : user or product)

        var columnsConfig = [{
                data: 'title',
                name: 'title'
            },
            {
                data: 'heading',
                name: 'heading'
            },
            {
                data: 'button_text',
                name: 'button_text'
            },
            {
                data: 'is_feature',
                name: 'is_feature',

                render: function(data, type, row) {
                    return data == 0 ? 'Blog' : 'Article'; // Conditional rendering
                }
            },
            {
                data: 'action',
                searchable: true,
                orderable: false
            }
        ];
    </script>
    <script>
        function confirmDelete(blogId) {
            $('#confirmModal').modal('show');
            $('#ok_delete').click(function() {
                $.ajax({
                    url: '{{ route('admin.blog.destroy', ['blog' => ':id']) }}'.replace(':id', blogId),
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        console.log('Testimonial deleted successfully');
                        $('#confirmModal').modal('hide');
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting testimonial:', error);
                        $('#confirmModal').modal('hide');
                    }
                });
            });
        }
    </script>
@endsection
