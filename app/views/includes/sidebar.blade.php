<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu " data-auto-scroll="true" data-slide-speed="200" style="margin-top:25px;">
            <li class="start">
                <a href="javascript:;">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javascript:;" >
                    <i class="fa fa-copy"></i>
                    <span class="title">Survey</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::route('survey-create')}}">
                            <i class="fa fa-plus"></i>
                            Create Survey</a>
                    </li>
                    <li>
                        <a href="{{URL::route('show-survey')}}">
                            <i class="fa fa-list"></i>
                            View Survey</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-basket"></i>
                    <span class="title">Poll</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="ecommerce_index.html">
                            <i class="icon-home"></i>
                            Create Poll</a>
                    </li>
                    <li>
                        <a href="ecommerce_orders.html">
                            <i class="icon-basket"></i>
                            View Polls</a>
                    </li>
                </ul>
            </li>
            <!-- BEGIN FRONTEND THEME LINKS -->
            <li>
                <a href="javascript:;">
                    <i class="icon-star"></i>
                    <span class="title">
                        Team </span>
                    </span>
                </a>
            </li>
            <!-- END FRONTEND THEME LINKS -->
            <li>
                <a href="javascript:;">
                    <i class="icon-diamond"></i>
                    <span class="title">Clients</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-puzzle"></i>
                    <span class="title">Plugins</span>
                </a>
            </li>
            <li class="last ">
                <a href="charts.html">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Contacts</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->