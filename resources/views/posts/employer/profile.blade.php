@extends('layouts.master')


@section('content')
    
    <link rel="stylesheet" type="text/css" href="/css/empPages.css">
    <link rel="stylesheet" type="text/css" href="/css/empGenSearch.css">

    <div class="pageContent">
        <div class="container">
            <div class="row">
                
                @include('layouts.sideNav')

                  <!-- dashboard -->
                  <div class="col-md-9">
                    <!-- Write new code here-->

                    <div class="form-horizontal">

                      <div class="form-group">
                        <label for="userType" class="col-sm-2 control-label">Account Type</label>
                        <div class="col-sm-6">
                          <input type="text" name="userType" class="form-control" id="userType" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="userName" class="col-sm-2 control-label">Full Name</label>
                        <div class="col-sm-6">
                          <input type="text" name="userName" class="form-control" id="userName" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="gender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-6">
                          <input type="text" name="gender" class="form-control" id="gender" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email Address</label>
                        <div class="col-sm-6">
                          <input type="text" name="email" class="form-control" id="email" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-6">
                          <input type="text" name="country" class="form-control" id="country" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="city" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-6">
                          <input type="text" name="city" class="form-control" id="city" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="tel" class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-6">
                          <input type="text" name="tel" class="form-control" id="tel" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="birthday" class="col-sm-2 control-label">Birthday</label>
                        <div class="col-sm-6">
                          <input type="text" name="birthday" class="form-control" id="birthday" >
                        </div>
                      </div>

                    </div>
                    

                  </div>
                  <!-- closing of dashboard -->

                 
            </div>
        </div>

    </div>


@endsection
