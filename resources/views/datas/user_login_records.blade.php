@extends('layouts.vertical', ['title' => '상담원 로그인 이력'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/selectize/selectize.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
    
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="form-inline">
                            <div class="form-group">
                                
                                
                                <div class="input-group input-group-sm ml-2">
                                    <input type="text" class="form-control border" id="dash-daterange">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-blue border-blue text-white">
                                            <i class="mdi mdi-calendar-range"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="input-group input-group-sm ml-2">
                                    <select type="" class="form-control border" id="dash-daterange" >
                                        <option value="">그룹명</option>
                                    </select>
                                </div>

                                <div class="input-group input-group-sm ml-2">
                                    <select type="" class="form-control border" id="dash-daterange" >
                                        <option value="">상담원명</option>
                                    </select>
                                </div>
                                
                            </div>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                <i class="mdi mdi-magnify"></i>
                            </a>
                            <!-- <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a> -->
                        </form>
                    </div>
                    <h4 class="page-title"></h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-2">상담원 로그인 이력</h4>
                        <!-- <p class="text-muted font-13 mb-4">
                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                            that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                        </p> -->

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>그룹명</th>
                                    <th>이름</th>
                                    <th>로그인일자</th>
                                    <th>IP Address</th>
                                    <th>내선번호</th>
                                    <th>로그인 여부</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                <tr>
                                    <td>팀1</td>
                                    <td>상담원1</td>
                                    <td>2020-08-01</td>
                                    <td>192.168.0.1</td>
                                    <td>221</td>
                                    <td>로그인</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ko.js"></script>
    
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/libs/selectize/selectize.min.js')}}"></script>

    <script src="{{asset('assets/libs/morris.js06/morris.js06.min.js')}}"></script>
    <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>

    <script src="{{asset('assets/libs/flot-charts/flot-charts.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.flot.tooltip/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('assets/libs/flot-orderbars/flot-orderbars.min.js')}}"></script>


    <!-- Dashboar all init js-->
    <script src="{{asset('assets/js/pages/dashboard-user-detail.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/libs/c3/c3.min.js')}}"></script>


@endsection
