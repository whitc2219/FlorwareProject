@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page JS Code (DataTables Plugin) -->
    <!--
        The following JS code was taken from the assets/_es6/pages/be_tables_datatables.js file, found in the HTML version.
        In the same way, you can use any custom JS code you need to init the examples showcased in the HTML version.

        If you are not planning on using the custom JS code in your main JS file and let Laravel Mix handle it (and you would
        like to use the JS code as showcased in this page), you will have to compile the code to ES5 first to make sure it runs
        correctly on all popular browsers. Feel free to check out the online compiler at https://babeljs.io/repl if you would
        like to use it this way.
    -->
    <script>
        jQuery(function(){
            // Override a few DataTable defaults
            jQuery.extend( jQuery.fn.dataTable.ext.classes, {
                sWrapper: "dataTables_wrapper dt-bootstrap4"
            });

            // Init full DataTable
            jQuery('.js-dataTable-full').dataTable({
                pageLength: 5,
                lengthMenu: [[5, 10, 20, 50, 100, 200], [5, 10, 20, 50, 100, 200]],
                autoWidth: false
            });
        });
    </script>
@endsection

@section('content')
    <!-- Page Content -->
    <div>
        <!--class="content"  this class makes it so tables stay narrow-->
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">Legacy Maintenance Services</h2>
            <h3 class="h5 text-muted mb-0">Sales / GP Report</h3>
        </div>

        <!-- Info -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="block">
                    <div class="block-content">
                        <p class="text-muted">
                            July - 2019
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Info -->

        <!-- Dynamic Table Full -->
        <div class="block">
            <!--class="block" -->
            <div class="block-header block-header-default">
                <h3 class="block-title">Dynamic Table <small>Full</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!--class="block-content block-content-full"-->
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized at the top of this page -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full" style="width: 100%; padding: 10px">
                    <!-- class="table table-bordered table-striped table-vcenter js-dataTable-full" -->
                    <thead>
                    <tr>
                       <!-- <th class="text-center" style="width: 80px;">#</th> -->
                        <th>Type</th>
                        <th>Customer</th>
                        <th>Location</th>
                        <th>Sale No</th>
                        <th>Date</th>
                        <th>Billed Amt</th>
                        <th>Hours</th>
                        <th>Total Cost</th>
                        <th>Gross Profit</th>
                        <th>GP %</th>
                        <th>Account Mgr</th>
                        <th>Branch</th>
                        <!-- <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th> -->
                        <!-- <th style="width: 15%;">Registered</th> -->
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($sales as $sale)
                        <tr>
                            <td class="font-w600">
                                <a href="javascript:void(0)">{{ $sale->type }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <em class="text-muted">{{ $sale->customer_name }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->customer_name_2 }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->sale_number }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->date_completed }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->total }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->total_hours }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->total_cost }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->profit }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->margin }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->employee_name }}</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ $sale->store_division }}</em>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection
