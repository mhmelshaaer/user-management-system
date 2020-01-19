@extends('adminlte::page')

@section('title', 'FEMTO15')

@section('content_header')
    <h1 class="m-0 text-dark">Permissions</h1>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">

                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                            <div class="row" style="width: 100%">
                                <div class="col-md-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Rendering engine</th>
                                                <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending">Browser</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr role="row" class="odd">
                                                <td class="">Gecko</td>
                                                <td class="sorting_1">Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td>522.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td>419.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td>312.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td>125.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">S60</td>
                                                <td>S60</td>
                                                <td>413</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Misc</td>
                                                <td class="sorting_1">PSP browser</td>
                                                <td>PSP</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera for Wii</td>
                                                <td>Wii</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Gecko</td>
                                                <td class="sorting_1">Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td>522.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td>419.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td>312.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td>125.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">S60</td>
                                                <td>S60</td>
                                                <td>413</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Misc</td>
                                                <td class="sorting_1">PSP browser</td>
                                                <td>PSP</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera for Wii</td>
                                                <td>Wii</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Gecko</td>
                                                <td class="sorting_1">Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td>522.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td>419.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td>312.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td>125.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">S60</td>
                                                <td>S60</td>
                                                <td>413</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Misc</td>
                                                <td class="sorting_1">PSP browser</td>
                                                <td>PSP</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera for Wii</td>
                                                <td>Wii</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Gecko</td>
                                                <td class="sorting_1">Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td>522.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td>419.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td>312.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td>125.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">S60</td>
                                                <td>S60</td>
                                                <td>413</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Misc</td>
                                                <td class="sorting_1">PSP browser</td>
                                                <td>PSP</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera for Wii</td>
                                                <td>Wii</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Gecko</td>
                                                <td class="sorting_1">Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td>522.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td>419.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td>312.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td>125.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Webkit</td>
                                                <td class="sorting_1">S60</td>
                                                <td>S60</td>
                                                <td>413</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Misc</td>
                                                <td class="sorting_1">PSP browser</td>
                                                <td>PSP</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera for Wii</td>
                                                <td>Wii</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Presto</td>
                                                <td class="sorting_1">Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                                        </tfoot>
                                    </table>
                                    <!-- /.table -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /example wrapper -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop


@section('css')
    <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
@stop


@section('js')

    <script src="{{asset('js/datatables-base.js')}}"></script>

    <script src="{{asset('js/datatables.js')}}"></script>

    <script>
        $(function () {

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });

        });
    </script>

@stop
