@extends('layouts.default')
@section('content')
<!-- BEGIN PAGE LEVEL STYLES -->
{{ HTML::style('assets/global/plugins/select2/select2.css') }}
{{ HTML::style('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN CONTAINER -->
<div class="page-container">
    @include('includes.sidebar')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                My Survey<small></small>
            </h3>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <h1>Lets get started !</h1>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat.
                    </p>
                    <br>
                    <a href="{{URL::route('survey-create')}}" class="btn blue-madison">Create Survey</a>
                </div>
            </div>
            <br/>
            <br/>

            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Survey
                            </div>
                            <div class="tools">
                                <!--                                <a href="javascript:;" class="collapse">
                                                                </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config">
                                                                </a>-->
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_6_1" data-toggle="tab">
                                            Active </a>
                                    </li>
                                    <li>
                                        <a href="#tab_6_2" data-toggle="tab">
                                            Draft </a>
                                    </li>
                                    <li>
                                        <a href="#tab_6_3" data-toggle="tab">
                                            Deleted </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_6_1">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box white">
                                                    <table class="table table-striped table-bordered table-hover" id="show_survey">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    Title
                                                                </th>
                                                                <th>
                                                                    Description
                                                                </th>
                                                                <th>
                                                                    Category
                                                                </th>
                                                                <th>
                                                                    Response
                                                                </th>
                                                                <th>
                                                                    Created On
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    shuxer
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:shuxer@gmail.com">
                                                                        shuxer@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    120
                                                                </td>
                                                                <td class="center">
                                                                    12 Jan 2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    looper
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:looper90@gmail.com">
                                                                        looper90@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    120
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2011
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-warning">
                                                                        Suspended </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    userwow
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@yahoo.com">
                                                                        userwow@yahoo.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    user1wow
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        userwow@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-default">
                                                                        Blocked </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    restest
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        test@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    foopl
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    weep
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    coop
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    pppol
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_6_2">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box white">
                                                    <table class="table table-striped table-bordered table-hover" id="show_survey">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    Title
                                                                </th>
                                                                <th>
                                                                    Description
                                                                </th>
                                                                <th>
                                                                    Category
                                                                </th>
                                                                <th>
                                                                    Response
                                                                </th>
                                                                <th>
                                                                    Created On
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    shuxer
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:shuxer@gmail.com">
                                                                        shuxer@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    120
                                                                </td>
                                                                <td class="center">
                                                                    12 Jan 2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    looper
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:looper90@gmail.com">
                                                                        looper90@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    120
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2011
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-warning">
                                                                        Suspended </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    userwow
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@yahoo.com">
                                                                        userwow@yahoo.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    user1wow
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        userwow@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-default">
                                                                        Blocked </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    restest
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        test@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    foopl
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    weep
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    coop
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    pppol
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_6_3">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box white">
                                                    <table class="table table-striped table-bordered table-hover" id="show_survey">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    Title
                                                                </th>
                                                                <th>
                                                                    Description
                                                                </th>
                                                                <th>
                                                                    Category
                                                                </th>
                                                                <th>
                                                                    Response
                                                                </th>
                                                                <th>
                                                                    Created On
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    shuxer
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:shuxer@gmail.com">
                                                                        shuxer@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    120
                                                                </td>
                                                                <td class="center">
                                                                    12 Jan 2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    looper
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:looper90@gmail.com">
                                                                        looper90@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    120
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2011
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-warning">
                                                                        Suspended </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    userwow
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@yahoo.com">
                                                                        userwow@yahoo.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    user1wow
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        userwow@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-default">
                                                                        Blocked </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    restest
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        test@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    12.12.2012
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    foopl
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    weep
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    coop
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td>
                                                                    pppol
                                                                </td>
                                                                <td>
                                                                    <a href="mailto:userwow@gmail.com">
                                                                        good@gmail.com </a>
                                                                </td>
                                                                <td>
                                                                    20
                                                                </td>
                                                                <td class="center">
                                                                    19.11.2010
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm label-success">
                                                                        Approved </span>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{URL::asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{URL::asset('assets/global/plugins/excanvas.min.js')}}"></script> 
<![endif]-->
<script src="{{URL::asset('assets/global/plugins/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{URL::asset('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->


<script src="{{URL::asset('assets/admin/pages/scripts/survey_page_scripts.js')}}"></script>
<script src="{{URL::asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
    TableManaged.init();
});
</script>
<!-- END JAVASCRIPTS -->
@stop