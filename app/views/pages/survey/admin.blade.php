@extends('layouts.survey.default')
@section('content')
<!-- BEGIN PAGE LEVEL STYLES -->
{{ HTML::style('assets/global/plugins/select2/select2.css') }}
{{ HTML::style('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') }}

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    @include('includes.survey.sidebar')
    <?php
    $Survey = Survey::find($Survey_Id);
    ?>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                <small>Welcome to survey </small> {{$Survey->Title}}
            </h3>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <!--            <div class="row">
                            <div class="col-md-12">
                                 BEGIN VALIDATION STATES
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Survey Form
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                         BEGIN FORM
                                        <form  action="{{URL::route('survey-create-post')}}" id="create_survey" method="post" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="alert alert-danger display-hide">
                                                    <button class="close" data-close="alert"></button>
                                                    <p>You have some form errors. Please check below.</p>
                                                </div>
                                                <div class="alert alert-success display-hide">
                                                    <button class="close" data-close="alert"></button>
                                                    <p>Your form validation is successful.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Title <span class="required">
                                                            * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input type="text" class="form-control" id="Title" name="Title"/>
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
                                                            <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Legal Documents <span class="required">
                                                            * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
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
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Tags <span class="required">
                                                            * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <select type="text" class="form-control" name="Survey_Category">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Budget<span class="required">
                                                            * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Currency <span class="required">
                                                            * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <select type="text" class="form-control" name="Survey_Category">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Automatic Close Date<span class="required">
                                                            * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Redirect URL<span class="required">
                                                            * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
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
                                            {{Form::token()}}
            
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green">Submit</button>
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                         END FORM
                                    </div>
                                </div>
                                 END VALIDATION STATES
                            </div>
                        </div>-->
            <!-- END PAGE CONTENT-->
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-green-haze"></i>
                        <span class="caption-subject font-green-haze bold uppercase">Survey Admin</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" class="form-horizontal">
                        <div class="form-body">
                            <h3 class="form-section">Survey Basic</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Title <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" id="Title" name="Title"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Description <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Category</label>
                                        <div class="col-md-9">
                                            <select type="text" class="form-control" name="Survey_Category">
                                                {{survey_categories::get_All_Survey_Category_As_Select_Option();}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tag</label>
                                        <div class="col-md-9">
                                            <select name="foo" class="select2me form-control">
                                                <option value="1">Abc</option>
                                                <option value="1">Abc</option>
                                                <option value="1">This is a really long value that breaks the fluid design for a select2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Language</label>
                                        <div class="col-md-9">
                                            <select name="foo" class="select2me form-control">
                                                <option value="1">English</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Survey Automatic Close Date</label>
                                        <div class="col-md-3">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                                <input type="text" class="form-control" readonly>
                                                <span class="input-group-btn">
                                                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                            <!-- /input-group -->
                                            <span class="help-block">
                                                Select date </span>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3 class="form-section">professional Survey </h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Currency</label>
                                        <div class="col-md-9">
                                            <select name="foo" class="select2me form-control">
                                                <option value="1">&#8377;</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Budget <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" id="Title" name="Title"/>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Team Owner</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3 class="form-section">Security Survey</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Encryption And Cryptography <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" id="Title" name="Title"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Restrict IP <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">SSL Enabled</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Redirect URL</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea type="text" class="form-control" id="Description" name="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
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
<script src="{{URL::asset('assets/admin/pages/scripts/components-pickers.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {
// initiate layout and plugins
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
    ComponentsPickers.init();
});
</script>
<!-- END JAVASCRIPTS -->
@stop