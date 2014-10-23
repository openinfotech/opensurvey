@extends('layouts.default')
@section('content')
<!-- BEGIN CONTAINER -->
<div class="page-container">
    @include('includes.sidebar')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                Blank Page <small>blank page</small>
            </h3>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    Page content goes here
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
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{URL::asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
// initiate layout and plugins
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
@stop