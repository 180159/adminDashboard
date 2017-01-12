@extends('layouts.layout')
@section('content')
    <!-- menu profile quick info -->
    @include('layouts.profile-quick-info')
    <!-- menu profile quick info -->
    <br />
    <!-- sidebar menu -->
    @include('layouts.sidebar-menu')
    <!-- sidebar menu -->

    <!-- /menu footer buttons -->
    @include('layouts.footer-button')
    <!-- /menu footer buttons -->
    </div>
    </div>
    <!-- top navigation -->
    @include('layouts.top-navigation')
    <!-- top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <br>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>System Administrator</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li class="dropdown">
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                <div class="x_content">
                    <br>
                {!! Form::open(array('route'=>'user.store', 'class'=>'form-horizontal form-label-left')) !!}
                    <div class="form-group">
                    {!! Form::label('username','Enter Username',array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        {!! Form::text('username',null,['class'=>'form-control col-md-7 col-xs-12'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email','Enter Email', array('class' => 'pull-left')) !!}
                        {!! Form::text('email',null,['class'=>'form-control col-md-7 col-xs-12'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id','Enter Role ID', array('class' => 'pull-left')) !!}
                        {!! Form::text('role_id',null,['class'=>'form-control col-md-7 col-xs-12'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create',['class'=>'btn btn-success'])!!}
                    </div>
                {!! Form::close()!!}
                </div>

                @if (count($errors) > 0 )
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page content -->

    <!-- footer content -->
    @include('layouts.footer-content')
    <!-- footer content -->

@endsection
