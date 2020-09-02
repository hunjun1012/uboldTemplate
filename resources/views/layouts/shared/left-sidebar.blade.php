<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">


                <li class="menu-title mt-2">현황</li>

                <li>
                    <a href="{{route('any', 'dashboard-all')}}">
                        <i data-feather="calendar"></i>
                        <span> 전체 </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('any', 'dashboard-group')}}">
                        <i data-feather="calendar"></i>
                        <span> 그룹별 </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('any', 'dashboard-group-time')}}">
                        <i data-feather="calendar"></i>
                        <span> 그룹 시간별 </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('any', 'dashboard-user')}}">
                        <i data-feather="calendar"></i>
                        <span> 상담원 별 </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('any', 'dashboard-user-time')}}">
                        <i data-feather="calendar"></i>
                        <span> 상담원 시간별 </span>
                    </a>
                </li>

                <li>
                     <a href="{{route('any', 'dashboard-user-detail')}}">
                        <i data-feather="calendar"></i>
                        <span> 상담원 스트레스 </span>
                    </a>
                </li>


                <li class="menu-title mt-2">레포트</li>

                <li>
                    <a href="{{route('second', ['datas','user_stresses'])}}">
                        <i data-feather="calendar"></i>
                        <span> 상담원 스트레스 이력 </span>
                    </a>
                </li>

                <li>
                <a href="{{route('second', ['datas','user_login_records'])}}">
                        <i data-feather="calendar"></i>
                        <span> 상담원 로그인 이력 </span>
                    </a>
                </li>

                <li class="menu-title mt-2">통계</li>

                <li>
                    <a href="{{route('any', 'dashboard-all')}}"> 
                        <i data-feather="calendar"></i>
                        <span> 그룹별 스트레스 통계 </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('any', 'dashboard-all')}}">
                        <i data-feather="calendar"></i>
                        <span> 상담원별 스트레스 통계</span>
                    </a>
                </li>

                <li class="menu-title mt-2">모니터링</li>

                <li>
                    <a href="{{route('any', 'dashboard-all')}}">
                        <i data-feather="calendar"></i>
                        <span> 상담원 상태 모니터링 </span>
                    </a>
                </li>

                
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->