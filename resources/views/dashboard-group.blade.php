@extends('layouts.vertical', ['title' => '상담원 스트레스 상태'])

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
                                
                            </div>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                <i class="mdi mdi-magnify"></i>
                            </a>
                            <!-- <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a> -->
                        </form>
                    </div>
                    <h4 class="page-title">그룹별 현황</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card-box">
                    <h4 class="header-title">그룹별 스트레스 </h4>

                    <div dir="ltr">
                        <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->

        </div>
        <!-- end row-->
        <div class="row">
            
             <div class="col-md-6 col-xl-3">
                <div class="card-box">
                    <h4 class="header-title mb-3">평균 스트레스 등급</h4>

                    <div class="widget-chart text-center" dir="ltr">
                        <input data-plugin="knob" data-width="120" data-max="10" data-height="140" data-linecap=round data-bgColor="rgba(0,0,0,0.1)" data-fgColor="#f1556c" value="3" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".12"/>
                        <h5 class="text-muted mt-3">0 ~ 10 단계 중 </h5>
                        <!-- <h2>Index 값 5</h2> -->

                        <div class="row mt-3">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">VLF</p>
                                <h4>3.4</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">HF</p>
                                <h4>2.3</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">VPM</p>
                                <h4>42.9</h4>
                            </div>
                        </div> <!-- end row -->
                        
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
            <div class="col-md-3 col-xl-4">
                <div class="card-box">
                    <h4 class="header-title mb-0">스트레스 상위 그룸 (5개)</h4>

                    <div id="pie-chart" style="height: 300px;" data-colors="#f4f8fb,#4a81d4,#1abc9c" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-5">
                <!-- 스트레스 현황 카드 -->
                <div class="card">
                    <div class="card-body" dir="ltr">
                        <div id="cardCollpase3" class="collapse show">
                            <h4 class="header-title mb-3">그룹별 스트레스 등급 / 전체평균 비교값</h4>

                            <div class="table-responsive" data-simplebar style="height: 255px;">
                                <table class="table table-borderless table-nowrap table-hover table-centered m-0 text-center">

                                    <thead class="thead-light">
                                        <tr>
                                            <th>팀명</th>
                                            <th>스트레스 지수</th>
                                            <th>전체평균 비교값</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">팀1</h5>
                                            </td>

                                            <td>
                                                1.7
                                            </td>

                                            <td>
                                                + 0.2
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">팀1</h5>
                                            </td>

                                            <td>
                                                1.7
                                            </td>

                                            <td>
                                                + 0.2
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">팀1</h5>
                                            </td>

                                            <td>
                                                1.7
                                            </td>

                                            <td>
                                                + 0.2
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">팀1</h5>
                                            </td>

                                            <td>
                                                1.7
                                            </td>

                                            <td>
                                                + 0.2
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">팀1</h5>
                                            </td>

                                            <td>
                                                1.7
                                            </td>

                                            <td>
                                                + 0.2
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">팀1</h5>
                                            </td>

                                            <td>
                                                1.7
                                            </td>

                                            <td>
                                                + 0.2
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">팀1</h5>
                                            </td>

                                            <td>
                                                1.7
                                            </td>

                                            <td>
                                                + 0.2
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div> <!-- end collapse-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    
    <script src="{{asset('assets/libs/jquery-sparkline/jquery-sparkline.min.js')}}"></script>
    
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
    <script src="{{asset('assets/js/pages/dashboard-group.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/libs/c3/c3.min.js')}}"></script>


@endsection
