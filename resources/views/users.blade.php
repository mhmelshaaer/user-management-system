@extends('page')

@section('title', 'FEMTO15')

@section('content_header')
    <h1 class="m-0 text-dark">Users</h1>
@stop

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div> --}}
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="users-table" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">User status</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>

                        </table>
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure!
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button onclick="confirmDelete(event)" id="confirm-delete-btn" data-user="" type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->


@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/datatables.min.css"/>

    <style>
        .confirm-delete-modal i {
            pointer-events: none;
        }
    </style>

@endsection

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/datatables.min.js"></script>

        <script>


            $(document).ready( function () {

                var table = $('#users-table').DataTable(
                    {
                        processing: true,
                        serverSide: true,
                        ordering: false,
                        searchDelay: 1000,
                        ajax: "{!! route('users.datatable') !!}",
                        columns: [
                            // {data: 'id', name: 'id'},
                            {data: 'name', name: 'name', orderable: false},
                            {data: 'email', name: 'email', orderable: false},
                            {data: 'DT_RowData.sub_plan', name: 'sub_plan', searchable: false, orderable: false},
                            {data: 'DT_RowData.status', name: 'deactivated', searchable: false, orderable: false},
                            {'data': 'action', 'name': 'action', searchable: false, orderable: false}
                        ]

                    }
                );

                // $('#users-table').on( 'click', 'tr', function () {
                //     var id = table.row( this ).id();

                //     alert( 'Clicked row id '+id );
                // } );


            } );



        </script>

@endsection
