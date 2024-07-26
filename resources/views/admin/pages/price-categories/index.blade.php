@extends('admin.layout.admin')
<style>
    table.dataTable.nowrap td {
        white-space: normal !important;
    }
</style>
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
                                <h4 class="mt-0 header-title">Pricing Categories Listing</h4>

                                <a href="{{ route('admin.priceCategory.create') }}">
                                    <button class="btn btn-dark">+ Add Pricing Category</button>
                                </a>
                            </div>
                            <table id="geniustable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created at</th>
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
@endsection

@section('script')
    {{--    Routes for hitting ajax --}}
    <script>
        var indexRoute = '{{ route('admin.priceCategories.index') }}'; //for datatable.js

        var moduleName = '{{ request()->segment(2) }}'; //for main.js

        var columnsConfig = [{
                data: 'title',
                name: 'Title'
            },
            {
                data: 'description',
                name: 'Description'
            },

            {
                data: 'created_at',
                name: 'created_at'
            },
            {
                data: 'action',
                searchable: false,
                orderable: false
            }
        ];

        function confirmDelete(trainingId) {
            $('#confirmModal').modal('show');
            $('#ok_delete').click(function() {
                $.ajax({
                    url: '{{ route('admin.priceCategory.destroy', ['priceCategorie' => ':id']) }}'.replace(
                        ':id',
                        trainingId),
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
