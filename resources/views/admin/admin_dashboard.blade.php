@extends('admin_layout.admin_design')

@section('title')
 Admin Dashboard
@stop

@section('section-css');

@stop

@section('Middle')

 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count">0</div>
                  <h3>Active Customers</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">0</div>
                  <h3>active Counselors</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count">0</div>
                  <h3>Active Visitors</h3>
                </div>
              </div>
             
            </div>

           
            </div>
          </div>
        </div>
        <!-- /page content -->
      
@stop

@section('section-js');



@stop