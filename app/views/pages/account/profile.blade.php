@extends('layouts.default')
@section('content')
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE LEVEL STYLES -->
    {{ HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}
    {{ HTML::style('assets/admin/pages/css/profile.css') }}
    <!-- END PAGE LEVEL STYLES -->
    @include('includes.sidebar')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            @if(Session::has('global'))
            <div class="note note-success">
                <p>{{ Session::get('global')}}</p>
            </div>
            @endif
            @if(Auth::user()->Active==0)
            <div class="note note-warning">
                <h4 class="block">Account is not activated</h4>
                <p>
                    Your account is not activate please find email in your Inbox and activate your account .
                    For getting activation email please click below link.
                    <br/><a href="{{URL::route('account-resend-activation-email',urlencode(Request::url()))}}">Resend Email</a>
                    <!--{{Request::url()}}-->
                </p>
            </div>
            @endif
            <!-- BEGIN PAGE CONTENT-->
            <div class="row profile">
                <div class="col-md-12">
                    <!--BEGIN TABS-->
                    <div class="tabbable tabbable-custom tabbable-full-width">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab">
                                    Overview </a>
                            </li>
                            <li>
                                <a href="#tab_1_3" data-toggle="tab">
                                    Account </a>
                            </li>
                            <li>
                                <a href="#tab_1_4" data-toggle="tab">
                                    Projects </a>
                            </li>
                            <li>
                                <a href="#tab_1_6" data-toggle="tab">
                                    Help </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="list-unstyled profile-nav">
                                            <li>
                                                <img src="{{URL::asset('assets/admin/pages/media/profile/profile-img.png')}}" class="img-responsive" alt=""/>
                                                <a href="#" class="profile-edit">
                                                    edit </a>
                                            </li>
                                            <!--                                            <li>
                                                                                            <a href="#">
                                                                                                Projects </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                Messages <span>
                                                                                                    3 </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                Friends </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#">
                                                                                                Settings </a>
                                                                                        </li>-->
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-8 profile-info">
                                                <h1>{{Auth::user()->First_Name.' '.Auth::user()->Last_Name}}</h1>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.
                                                </p>
                                                <p>
                                                    <a href="#">
                                                        www.mywebsite.com </a>
                                                </p>
                                                <ul class="list-inline">
                                                    <li>
                                                        <i class="fa fa-map-marker"></i> Spain
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar"></i> 18 Jan 1982
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-briefcase"></i> Design
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i> Top Seller
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-heart"></i> BASE Jumping
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--end col-md-8-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                            <!--tab_1_2-->
                            <div class="tab-pane" id="tab_1_3">
                                <div class="row profile-account">
                                    <div class="col-md-3">
                                        <ul class="ver-inline-menu tabbable margin-bottom-10">
                                            <li class="active">
                                                <a data-toggle="tab" href="#tab_1-1">
                                                    <i class="fa fa-cog"></i> Personal info </a>
                                                <span class="after">
                                                </span>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_2-2">
                                                    <i class="fa fa-picture-o"></i> Change Avatar </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_3-3">
                                                    <i class="fa fa-lock"></i> Change Password </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_4-4">
                                                    <i class="fa fa-eye"></i> Privacity Settings </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tab-content">
                                            <div id="tab_1-1" class="tab-pane active">
                                                <form role="form" action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">First Name</label>
                                                        <input type="text" placeholder="John" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Last Name</label>
                                                        <input type="text" placeholder="Doe" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mobile Number</label>
                                                        <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Interests</label>
                                                        <input type="text" placeholder="Design, Web etc." class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Occupation</label>
                                                        <input type="text" placeholder="Web Developer" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">About</label>
                                                        <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Website Url</label>
                                                        <input type="text" placeholder="http://www.mywebsite.com" class="form-control"/>
                                                    </div>
                                                    <div class="margiv-top-10">
                                                        <a href="#" class="btn green">
                                                            Save Changes </a>
                                                        <a href="#" class="btn default">
                                                            Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="tab_2-2" class="tab-pane">
                                                <p>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </p>
                                                <form action="#" role="form">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                                            </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new">
                                                                        Select image </span>
                                                                    <span class="fileinput-exists">
                                                                        Change </span>
                                                                    <input type="file" name="...">
                                                                </span>
                                                                <a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
                                                                    Remove </a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                            <span class="label label-danger">
                                                                NOTE! </span>
                                                            <span>
                                                                Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <a href="#" class="btn green">
                                                            Submit </a>
                                                        <a href="#" class="btn default">
                                                            Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="tab_3-3" class="tab-pane">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">Current Password</label>
                                                        <input type="password" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">New Password</label>
                                                        <input type="password" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Re-type New Password</label>
                                                        <input type="password" class="form-control"/>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <a href="#" class="btn green">
                                                            Change Password </a>
                                                        <a href="#" class="btn default">
                                                            Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="tab_4-4" class="tab-pane">
                                                <form action="#">
                                                    <table class="table table-bordered table-striped">
                                                        <tr>
                                                            <td>
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <input type="radio" name="optionsRadios1" value="option1"/>
                                                                    Yes </label>
                                                                <label class="uniform-inline">
                                                                    <input type="radio" name="optionsRadios1" value="option2" checked/>
                                                                    No </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <input type="checkbox" value=""/> Yes </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <input type="checkbox" value=""/> Yes </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <input type="checkbox" value=""/> Yes </label>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--end profile-settings-->
                                                    <div class="margin-top-10">
                                                        <a href="#" class="btn green">
                                                            Save Changes </a>
                                                        <a href="#" class="btn default">
                                                            Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="tab_1_4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="add-portfolio">
                                            <span>
                                                502 Items sold this week </span>
                                            <a href="#" class="btn icn-only green">
                                                Add a new Project <i class="m-icon-swapright m-icon-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end add-portfolio-->
                                <div class="row portfolio-block">
                                    <div class="col-md-5">
                                        <div class="portfolio-text">
                                            <img src="{{URL::asset('assets/admin/pages/media/profile/logo_metronic.jpg')}}" alt=""/>
                                            <div class="portfolio-text-info">
                                                <h4>Metronic - Responsive Template</h4>
                                                <p>
                                                    Lorem ipsum dolor sit consectetuer adipiscing elit.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 portfolio-stat">
                                        <div class="portfolio-info">
                                            Today Sold <span>
                                                187 </span>
                                        </div>
                                        <div class="portfolio-info">
                                            Total Sold <span>
                                                1789 </span>
                                        </div>
                                        <div class="portfolio-info">
                                            Earns <span>
                                                $37.240 </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="portfolio-btn">
                                            <a href="#" class="btn bigicn-only">
                                                <span>
                                                    Manage </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                                <div class="row portfolio-block">
                                    <div class="col-md-5 col-sm-12 portfolio-text">
                                        <img src="{{URL::asset('assets/admin/pages/media/profile/logo_azteca.jpg')}}" alt=""/>
                                        <div class="portfolio-text-info">
                                            <h4>Metronic - Responsive Template</h4>
                                            <p>
                                                Lorem ipsum dolor sit consectetuer adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 portfolio-stat">
                                        <div class="portfolio-info">
                                            Today Sold <span>
                                                24 </span>
                                        </div>
                                        <div class="portfolio-info">
                                            Total Sold <span>
                                                660 </span>
                                        </div>
                                        <div class="portfolio-info">
                                            Earns <span>
                                                $7.060 </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 portfolio-btn">
                                        <a href="#" class="btn bigicn-only">
                                            <span>
                                                Manage </span>
                                        </a>
                                    </div>
                                </div>
                                <!--end row-->
                                <div class="row portfolio-block">
                                    <div class="col-md-5 portfolio-text">
                                        <img src="{{URL::asset('assets/admin/pages/media/profile/logo_conquer.jpg')}}" alt=""/>
                                        <div class="portfolio-text-info">
                                            <h4>Metronic - Responsive Template</h4>
                                            <p>
                                                Lorem ipsum dolor sit consectetuer adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 portfolio-stat">
                                        <div class="portfolio-info">
                                            Today Sold <span>
                                                24 </span>
                                        </div>
                                        <div class="portfolio-info">
                                            Total Sold <span>
                                                975 </span>
                                        </div>
                                        <div class="portfolio-info">
                                            Earns <span>
                                                $21.700 </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 portfolio-btn">
                                        <a href="#" class="btn bigicn-only">
                                            <span>
                                                Manage </span>
                                        </a>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="tab_1_6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="ver-inline-menu tabbable margin-bottom-10">
                                            <li class="active">
                                                <a data-toggle="tab" href="#tab_1">
                                                    <i class="fa fa-briefcase"></i> General Questions </a>
                                                <span class="after">
                                                </span>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_2">
                                                    <i class="fa fa-group"></i> Membership </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_3">
                                                    <i class="fa fa-leaf"></i> Terms Of Service </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_1">
                                                    <i class="fa fa-info-circle"></i> License Terms </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_2">
                                                    <i class="fa fa-tint"></i> Payment Rules </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_3">
                                                    <i class="fa fa-plus"></i> Other Questions </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tab-content">
                                            <div id="tab_1" class="tab-pane active">
                                                <div id="accordion1" class="panel-group">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                                                                    1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_1" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
                                                                    2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
                                                                    3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
                                                                    4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-danger">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
                                                                    5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_5" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
                                                                    6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_6" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
                                                                    7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_7" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab_2" class="tab-pane">
                                                <div id="accordion2" class="panel-group">
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1">
                                                                    1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_1" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <p>
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </p>
                                                                <p>
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-danger">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2">
                                                                    2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3">
                                                                    3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4">
                                                                    4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5">
                                                                    5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_5" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6">
                                                                    6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_6" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7">
                                                                    7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion2_7" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab_3" class="tab-pane">
                                                <div id="accordion3" class="panel-group">
                                                    <div class="panel panel-danger">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1">
                                                                    1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_1" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <p>
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                                </p>
                                                                <p>
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                                </p>
                                                                <p>
                                                                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2">
                                                                    2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3">
                                                                    3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4">
                                                                    4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5">
                                                                    5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_5" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6">
                                                                    6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_6" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7">
                                                                    7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
                                                            </h4>
                                                        </div>
                                                        <div id="accordion3_7" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end tab-pane-->
                        </div>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
    <div class="page-quick-sidebar-wrapper">
        <div class="page-quick-sidebar">
            <div class="nav-justified">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#quick_sidebar_tab_1" data-toggle="tab">
                            Users <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#quick_sidebar_tab_2" data-toggle="tab">
                            Alerts <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            More<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar3.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub">
                                            Project Manager
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar1.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Nick Larson</h4>
                                        <div class="media-heading-sub">
                                            Art Director
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar4.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub">
                                            CTO
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar2.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub">
                                            CEO
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar6.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub">
                                            CEO, Loop Inc
                                        </div>
                                        <div class="media-heading-small">
                                            Last seen 03:10 AM
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">new</span>
                                    </div>
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar7.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub">
                                            Project Manager,<br>
                                            SmartBizz PTL
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar8.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub">
                                            CTO, Keort Inc
                                        </div>
                                        <div class="media-heading-small">
                                            Last seen 13:10 PM
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar9.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub">
                                            CFO, H&D LTD
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar10.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub">
                                            CEO, Tizda Motors Inc
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="{{URL::asset('assets/admin/layout/img/avatar11.jpg')}}" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub">
                                            Manager, Infomatic Inc
                                        </div>
                                        <div class="media-heading-small">
                                            Last seen 03:10 AM
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
                                                When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar2.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
                                                Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
                                                Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar2.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body">
                                                You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
                                                No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar2.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body">
                                                Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
                                                Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar2.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body">
                                                Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="{{URL::asset('assets/admin/layout/img/avatar3.jpg')}}"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="#" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
                                                Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 4 pending tasks. <span class="label label-sm label-warning ">
                                                        Take action <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    New order received with <span class="label label-sm label-success">
                                                        Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
                                                        Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 4 pending tasks. <span class="label label-sm label-warning ">
                                                        Take action <i class="fa fa-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    New order received with <span class="label label-sm label-success">
                                                        Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                                        Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li>
                                    Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li>
                                    Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li>
                                    Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
                                </li>
                                <li>
                                    Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
                                </li>
                                <li>
                                    Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
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
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
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