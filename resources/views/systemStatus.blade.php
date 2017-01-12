@extends('layouts.layout')
@section('content')
    <!-- menu profile quick info -->
    @include('layouts.profile-quick-info')
    <!-- menu profile quick info -->
    <br/>
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

    <div class="right_col" role="main">
    
    <!-- first row -->
    <div class="row">
      <div class="">
         <div class="x_panel">
           <h2>Dashboard Current Status</h2>
            <div class="x_title"></div>
              <div class="col-sm-6"></br>
                <!-- system performances-->  
                {!! $percent -> render() !!}   
                </br>
              </div>
               <div class="col-sm-6"></br>
                <!-- system performances-->  
                <h3>Performances Rate: 98%</h3></br>
                <h3>Memory Availability: 90%</h3></br>
                <h3>Server Respons: 87%</h3></br>
                <h3>Health: 90% (good)</h3></br>
                <!-- this button to pop up maintenance action/to-do-list section tp dah ngantuk :P -->
                <button type="button" class="btn btn-primary">Action</button>
                <!-- acah nak print report tp siyesly ngantok gile....-->
                <button type="button" class="btn btn-success">Print</button>
              </div>
          </div>
     </div>
    </div>
</div>
    <!-- second row -->
    <div class="row">
    <div class="">
     <div class="x_panel">
       <h2>IP Adress of Users</h2>
        <div class="x_title"></div>
        <!-- content here ip view from user -->  
        <?php echo $geo -> render(); ?>   
      </div>
    </div>
</div>

    <!-- footer content -->
    @include('layouts.footer-content')
    <!-- footer content -->
@endsection