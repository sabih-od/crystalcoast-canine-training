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
                                <h4 class="mt-0 header-title">Prices Listing</h4>

                                <a href="{{ route('admin.price.create') }}">
                                    <button class="btn btn-dark">+ Add Price</button>
                                </a>
                            </div>
                            <table id="geniustable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>title</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Price Category</th>
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
        var indexRoute = '{{ route('admin.prices.index') }}';

        var moduleName = '{{ request()->segment(2) }}';

        var columnsConfig = [{
                data: 'title',
                name: 'title',
            },
            {
                data: 'price',
                name: 'price',
            },
            {
                data: 'lesson_or_week',
                name: 'type',
            },
            {
                data: 'category',
                name: 'category',
            },
            {
                data: 'action',
                searchable: false,
                orderable: false
            }
        ];

        function confirmDelete(priceId) {
            $('#confirmModal').modal('show');
            $('#ok_delete').click(function() {
                $.ajax({
                    url: '{{ route('admin.price.destroy', ['price' => ':id']) }}'.replace(':id',
                        priceId),
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
