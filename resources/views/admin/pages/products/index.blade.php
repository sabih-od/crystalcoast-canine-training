@extends('admin.layout.admin')
<style>
    table.dataTable.nowrap td{
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
                                <h4 class="mt-0 header-title">Products Listing</h4>

                                <a href="{{ route('admin.product.create') }}">
                                    <button class="btn btn-dark">+ Add Product</button>
                                </a>
                            </div>
                            <table id="geniustable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Product Category</th>
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
        var indexRoute = '{{ route('admin.products.index') }}';

        var moduleName = '{{ request()->segment(2) }}';

        var columnsConfig = [{
                data: 'name',
                name: 'name',
            },
            {
                data: 'description',
                name: 'Description',
            },
            {
                data: 'name',
                name: 'name',
            },
            {
                data: 'action',
                searchable: false,
                orderable: false
            }
        ];

        function confirmDelete(productId) {
            $('#confirmModal').modal('show');
            $('#ok_delete').click(function() {
                $.ajax({
                    url: '{{ route('admin.product.destroy', ['product' => ':id']) }}'.replace(':id',
                        productId),
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

    </script>
@endsection
