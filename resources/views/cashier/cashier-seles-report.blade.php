
<!DOCTYPE html>
<html lang="en">
<head>
    @include('cashier.tool.css')
</head>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <!--HEADER-->
        @include('cashier.tool.header')

        <!--SIDEBAR-->
        @include('cashier.tool.sidebar')

        <div class="content-wrapper">
            <div class="content container-fluid">
                 <!-- Page Header -->
                 <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Invoice Report</h3>
                            {{-- <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Invoice Report</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- Search Filter -->
                <form action=" {{url('cashier-filter-date-range')}} " method="get">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker"  id="todate" name="From" type="date" required >
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" id="todate" name="To" type="date" required >
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <button class="btn btn-warning" style="width: 50%; ">Search</button>
                        </div>
                     </div>
                </form>
                <!-- /Search Filter -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Totle Quantity</th>
                                        <th>Totle Amount</th>
                                        <th>Discreption</th>
                                        <th>Date</th>
                                        {{-- <th class="text-right">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody> @foreach ( $data as  $data):
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->totle_qty }}</td>
                                        <td>{{ $data->Totle_amount }}</td>
                                        <td>{{ $data->description	 }}</td>
                                        <td>{{ $data->created_at }}</td>

                                        <td width="150">
                                            <a href="{{ url('cashier-delete-invoice-histry-row',$data->id) }}" onclick="return confirm ('Are you sure to Delete')">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
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

        <!--  preloader -->
        @include('cashier.tool.preloader')

        <!-- script  -->
        @include('cashier.tool.script')
</html>

