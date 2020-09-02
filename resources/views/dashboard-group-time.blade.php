@extends('layouts.vertical', ['title' => '그룹별 현황 조회'])

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

                            </div>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                <i class="mdi mdi-magnify"></i>
                            </a>
                            <!-- <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a> -->
                        </form>
                    </div>
                    <h4 class="page-title">그룹별 스트레스 현황</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card-box">
                    <h4 class="header-title">그룹 시간대별 스트레스 </h4>

                    <div id="combine-chart" data-colors="#e3eaef,#f1556c,#1abc9c" class="flot-chart mt-5" style="height: 386px;">
                    </div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->

        </div>
        <!-- end row-->
        <div class="row">
            
             
            <div class="col-md-3 col-xl-3">
                <div class="card-box">
                    <h4 class="header-title mb-3">시간대별 스트레스 율</h4>

                    <div id="roated-chart" style="height: 270px;" data-colors="#1abc9c,#4a81d4" dir="ltr"></div>
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-9">
                <div class="card-box ">
                    <h4 class="header-title mb-3">시간대별 스트레스율 상위 그룹</h4>
                    <div class="row">
                        <div class="col-2 text-center">
                            <span class="font-15 mt-3">8시 ~ 10시</span>
                            <div id="time-pie1" class="mt-0"  data-colors="#f1556c"></div>
                        </div>
                        <div class="col-2 text-center">
                            <span class="font-15 mt-3">10시 ~ 12시</span>
                            <div id="time-pie2" class="mt-0"  data-colors="#f1556c"></div>
                        </div>
                        <div class="col-2 text-center">
                            <span class="font-15 mt-3">12시 ~ 14시</span>
                            <div id="time-pie3" class="mt-0"  data-colors="#f1556c"></div>
                        </div>
                        <div class="col-2 text-center">
                            <span class="font-15 mt-3">14시 ~ 16시</span>
                            <div id="time-pie4" class="mt-0"  data-colors="#f1556c"></div>
                        </div>
                        <div class="col-2 text-center">
                            <span class="font-15 mt-3">16시 ~ 18시</span>
                            <div id="time-pie5" class="mt-0"  data-colors="#f1556c"></div>
                        </div>
                        <div class="col-2 text-center">
                            <span class="font-15 mt-3">18시 ~ 20시</span>
                            <div id="time-pie6" class="mt-0"  data-colors="#f1556c"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end row -->
        
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
    
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>


    <!-- Dashboar all init js-->
    <script src="{{asset('assets/js/pages/dashboard-group-time.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/jquery-knob/jquery-knob.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/libs/c3/c3.min.js')}}"></script>


@endsection
