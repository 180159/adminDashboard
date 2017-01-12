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
    <div class="">
     <div class="x_panel">
        <h2>Number Of User by Role</h2>
        <div class="x_title">
        </div>
            {!! $chart -> render() !!}   
      </div>
    </div>

     <div class="">
     <div class="x_panel">
        <h2>Statistic in Table</h2>
        <div class="x_title">
        </div>
            <table class="table">
              <thead class="thead-inverse">
                <tr>
                  <th>Role Name</th>
                  <th>Number Of User</th>
                </tr>
              </thead>
                @foreach ($counts as $value)
                <tr>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->count }}</td>
                </tr>
                @endforeach        
            </table>
      </div>
    </div>
</div>

    <!-- footer content -->
    @include('layouts.footer-content')
    <!-- footer content -->
@endsection