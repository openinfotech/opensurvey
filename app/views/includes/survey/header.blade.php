<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{URL::route('home')}}">
                <img src="{{URL::asset('assets/admin/layout/img/logo.png')}}" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!--DOC: Remove the above "hide" to enable the sidebar toggler button on header--> 
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN HORIZANTAL MENU -->
        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
        <!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
        <div class="hor-menu hidden-sm hidden-xs">
            <ul class="nav navbar-nav">
                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
                <li class="classic-menu-dropdown ">
                    <a href="{{URL::route('survey-dashboard',$Survey_Id)}}">
                        Dashboard
                    </a>
                </li>
                <li class="mega-menu-dropdown">
                    <a  href="{{URL::route('survey-admin',$Survey_Id)}}" class="dropdown-toggle">
                        Administrator
                    </a>
                </li>
                <li class="mega-menu-dropdown">
                    <a  href="{{URL::route('survey-build',$Survey_Id)}}" class="dropdown-toggle">
                        Build
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a data-toggle="dropdown" href="javascript:;">
                        Style & Template
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a data-toggle="dropdown" href="javascript:;">
                        Response
                    </a>
                </li>
                <li class="classic-menu-dropdown">
                    <a data-toggle="dropdown" href="javascript:;">
                        Share & Deploy 
                    </a>
                </li>
                <li>
                    <a href="">API & SDK </a>
                </li>
            </ul>
        </div>
        <!-- END HORIZANTAL MENU -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-default">
                            7 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p>
                                You have 14 new notifications
                            </p>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-success">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        New user registered. <span class="time">
                                            Just now </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-danger">
                                            <i class="fa fa-bolt"></i>
                                        </span>
                                        Server #12 overloaded. <span class="time">
                                            15 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-warning">
                                            <i class="fa fa-bell-o"></i>
                                        </span>
                                        Server #2 not responding. <span class="time">
                                            22 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-info">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        Application error. <span class="time">
                                            40 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-danger">
                                            <i class="fa fa-bolt"></i>
                                        </span>
                                        Database overloaded 68%. <span class="time">
                                            2 hrs </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-danger">
                                            <i class="fa fa-bolt"></i>
                                        </span>
                                        2 user IP blocked. <span class="time">
                                            5 hrs </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-warning">
                                            <i class="fa fa-bell-o"></i>
                                        </span>
                                        Storage Server #4 not responding. <span class="time">
                                            45 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-info">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        System Error. <span class="time">
                                            55 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-sm label-icon label-danger">
                                            <i class="fa fa-bolt"></i>
                                        </span>
                                        Database overloaded 68%. <span class="time">
                                            2 hrs </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="external">
                            <a href="#">
                                See all notifications <i class="m-icon-swapright"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="{{URL::asset('assets/admin/layout/img/avatar3_small.jpg')}}"/>
                        <span class="username username-hide-on-mobile">
                            {{Auth::user()->username}} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{URL::route('account-profile')}}">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="page_calendar.html">
                                <i class="icon-calendar"></i> My Account </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="icon-envelope-open"></i> My Billing <span class="badge badge-danger">
                                    3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                                    7 </span>
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->