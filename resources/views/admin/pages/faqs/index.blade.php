@extends('admin.layout.admin')
@section('content')
    <style>
        table.dataTable.nowrap td {
            white-space: normal !important;
        }
    </style>
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
                                <h4 class="mt-0 header-title">Faq Listing</h4>

                                <a href="{{ route('admin.faq.create') }}">
                                    <button class="btn btn-dark">+ Add Faq</button>
                                </a>
                            </div>
                            <table id="geniustable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
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
        function stripHtml(html) {
            var temporalDivElement = document.createElement("div");
            temporalDivElement.innerHTML = html;
            return temporalDivElement.textContent || temporalDivElement.innerText || "";
        }
        var indexRoute = '{{ route('admin.faqs.index') }}';

        var moduleName = '{{ request()->segment(2) }}'; // Module is like a which route name is set (e.g : user or product)

        var columnsConfig = [{
                data: 'title',
                name: 'title'
            },
            {
                data: 'description',
                name: 'description',
                render: function(data, type, row) {
                    return stripHtml(data); // Strip HTML tags before displaying
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
        function confirmDelete(faqId) {
            $('#confirmModal').modal('show');
            $('#ok_delete').click(function() {
                $.ajax({
                    url: '{{ route('admin.faq.destroy', ['faq' => ':id']) }}'.replace(':id', faqId),
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
