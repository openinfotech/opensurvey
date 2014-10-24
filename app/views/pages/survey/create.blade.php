@extends('layouts.default')
@section('content')
<!-- BEGIN PAGE LEVEL STYLES -->
{{ HTML::style('assets/global/plugins/select2/select2.css') }}
{{ HTML::style('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}
{{ HTML::style('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}
{{ HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker.css') }}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    @include('includes.sidebar')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                Create Survey 
            </h3>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Validation Using Icons
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" id="create_survey" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Title <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="Title"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Description <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea type="text" class="form-control" name="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Survey Category <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select type="text" class="form-control" name="Survey_Category">
                                                    {{survey_categories::get_All_Survey_Category_As_Select_Option();}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Template <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select  type="text" class="form-control" name="Template">
                                                    <option value="1">Some Template</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Language <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select type="text" class="form-control" name="Language">
                                                    <option value="1">English</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
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
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="{{URL::asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/admin/pages/scripts/create-sruvey-scripts.js')}}"></script>
<!-- END PAGE LEVEL STYLES -->
<script>
jQuery(document).ready(function() {
// initiate layout and plugins
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
    FormValidation.init();
});
</script>
<!-- END JAVASCRIPTS -->
@stop