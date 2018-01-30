
@extends('layouts.master')



@section('content')

    <!-- into-header -->
    <a name="search"></a>

    <div class="intro-header"> 
        <div class="container-fluid" >
            <div class="row" >
                 <div class="col-md-4 col-md-offset-4">


                    <h1 id="whenActive"> search Workers around you </h1>
                   
                   <form role="form" id="searchForm">
                        
                        <div class="form-group ">
                           
                           <!-- location selection -->
                           <label for="location"><h2 id="employerColor"> Where do you live  <span class="glyphicon glyphicon-map-marker"></span> </h2></label>                           
                            <select class="form-control">
                                <option value="Buea-molyko"> Buea-molyko </option>
                                <option value="Buea-boukwango"> Buea-boukwango</option>  
                                <option value="Buea-class-quarters"> Buea-class-quarters </option>
                                <option value="Buea-town"> Buea-town </option>
                                <option value="Buea-muea"> Buea-muea </option>                     
                                <option value="mile 16 "> mile 16 </option>
                                <option value="mutengene"> mutengene </option>
                                <option value="tiko"> tiko </option>
                            </select>
                        
                           <!-- job selection -->
                           <label for="workers"><h3 id="employerColor"> job category  <span class="glyphicon glyphicon-list"></span> </h3></label>

                            <select class="form-control">
                                <option value="cartpenter"> carpenter </option>
                                <option value="computer technician"> computer technician</option>  
                                <option value="plomber"> plomber </option>
                                <option value="typer"> typer </option>
                                <option value="electrician">electrician </option>                     
                                <option value="brick layer">brick layer </option>
                                <option value="farmer">farmer</option>
                                <option value="house care"> house care </option>
                            </select>

                        </div>

                            <button id="searchBtn" class="btn-success btn-lg"> search </button>
                   </form>        
                </div>
                
              
            </div><!-- row end -->

        </div>  <!-- /.container end-->
    </div> <!-- /.intro-header end -->
    

    <!-- for search results display  -->
    <div class="searchResults">








    </div><!-- results div end-->


  <!-- sign up Modal -->
  <div class="modal fade" id="loginInfo" role="dialog" >
    <div class="modal-dialog"> Create an employer account
      <div class="modal-content">
          
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
              <h4 class="modal-title employerColor" > Sign Up </h4>
          </div> 

          <div class="modal-body">
            <div class="form-horizontal">
              <p id="signupError"></p><p id="signupSuccess"></p>
              
              <p>By creating an account you agree to our <a href="#" id="employerColor">Terms & Privacy</a>.</p>   
            </div>
          </div>

          <div class="modal-footer">
              <button class="btn btn-danger pull-left" data-dismiss="modal"> Cancel </button>

              <a href="#personalInfo" data-toggle="modal"><button id="nextClick" class="btn btn-success pull-right">Next &raquo;</button></a>
          </div>

      </div><!-- /.modal-content -->
    </div>
  </div> <!--end login information modal -->

  <div class="modal fade" id="personalInfo" role="dialog">
    <div class="modal-dialog"> Create an employer account
      <div class="modal-content">
          
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
              <h4 class="modal-title employerColor" > Sign Up </h4>
          </div> 

          <div class="modal-body">
            <div class="form-horizontal">
                 
            </div>
          </div>

          <div class="modal-footer">
              <button class="btn btn-danger pull-left" data-dismiss="modal"> Cancel </button>

              
          </div>

      </div><!-- /.modal-content -->
    </div>
  </div>
  <!-- /signup modal  end -->

    <!-- log-in Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModallabel" aria-hidden="true">
        <div class="modal-dialog"> Log Into SmallBoulo
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                    <h4 class="modal-title employerColor" id="employerColor"> Log In </h4>
                </div> 

                <div class="modal-body">
                        
                        <div class="form-horizontal">
                          <fieldset>
                            <legend>Employer Login</legend>
                            <p id="loginError"></p><p id="loginSuccess"></p>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                              <div class="col-sm-8">
                                <input type="email" name="empEmail" class="form-control" id="loginEmail" placeholder="john.doe@domain.com" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                              <div class="col-sm-8">
                                <input type="password" name="empPassword" class="form-control" id="loginPassword" placeholder="Password" required>
                              </div>
                            </div>
                            <div class="col-sm-offset-3 col-sm-8">
                              <a id="empForgotPassword" href="#">Forgot your Password</a>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-8">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
                                  </label>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger pull-left" data-dismiss="modal"> Cancel </button>
                    <!-- MDL Spinner Component -->
                    <div id="loader" class="mdl-spinner mdl-js-spinner is-active pull-right"></div>
                    <button id="eLoginBtn" class="btn btn-success"> Log In </button>
                </div>
            </div><!-- /.modal-content -->
        </div>
   </div><!-- /.log in modal end -->  
    

@endsection