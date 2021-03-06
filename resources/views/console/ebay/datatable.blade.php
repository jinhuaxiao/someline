@extends('console.layout.frame')

@section('content')

    <div class="bg-light lter b-b wrapper-md">
        <h1 class="m-n font-thin h3">ebay</h1>
    </div>
    <div class="wrapper-md">
            <table class="table table-striped table-hover table-responsive" id="users-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
            </table>


    </div>

@endsection

@push('scripts')
<script>
$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':  window.Laravel.csrfToken
        }
    });
    
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            type: 'post',
            //url: '{{route("console.datatable")}}',
            url: '/api/datatable',
        },
        dataSrc: function (json) {
            return json.data;
        },

        columns: [
            { data: 'user_id', name: 'user_id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush