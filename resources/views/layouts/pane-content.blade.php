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

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
    <div class="x_content">

        <br>
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" role="form" action="update" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="admin_id" class="control-label col-md-3 col-sm-3 col-xs-12">Admin ID</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="admin_id" class="form-control col-md-7 col-xs-12" type="text" name="id"  value="{{$admin->id}}">
                </div>
            </div>

            <div class="form-group">
                <label for="admin_name" class="control-label col-md-3 col-sm-3 col-xs-12">Admin Name</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="admin_name" class="form-control col-md-7 col-xs-12" type="text" name="name" value="{{$admin->name}}">
                </div>
            </div>

            <div class="form-group">
                <label for="admin_email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="admin_email" class="form-control col-md-7 col-xs-12" type="text" name="email" value="{{$admin->email}}">
                </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>
            </form>
    </div>
</div>
</div>
</div>
</div>
</div>
