	
@extends('layouts.master')	


 @section('content')


    <!-- header -->
    <a name="search"></a>

    <div class="intro-header">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6"  id="employerCol">

                    <br>
                    <br>
                    <h2 style="color:green"> GET WORKERS FOR YOUR JOBS FASTER THAN NEVER BEFORE <h1>
                        <hr>
                        <h2> post a <strong>SmallBoulo</strong> for workers around your location </h2>
                        <br>
                        <br>


                       <a href="/employer"><button class="btn btn-success btn-lg" id="employerBtn" > EMPLOYER </button></a>


                       <h3> get workers    </h3>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6" id="workerCol">

                    <br>
                    <br>
                    <h2 style="color:#db7b1e"> GET EMPLOYED FOR A SMALLBOULO FASTER THAN NEVER BEFORE <h1>
                        <hr>
                        <h2> check for any <strong>SmallBoulo</strong> posted around your location </h2>
                        <br>
                        <br>
                       

                        <a href="worker/workerHomeSearch.html"><button class="btn btn-warning btn-lg" id="workerBtn"> WORKER </button></a>

                        <h3> search SmallBoulo </h3>
                </div>
            </div>  
        </div>
        <!-- /.container -->
    </div> 
    <!-- /.intro-header end -->
        

    <!-- about smallboulo  -->

    <a  name="about"></a>
    <!-- content-section a -->
    <div class="content-section-a">
       <div class="container">
            <div class="row">

                <div class="col-md-4"  id="rightAlign">
                    <hr class="section-heading-spacer-right" id="hr">
                    <div class="clearfix"></div>                
                    <h2 class="section-emp-heading">are you an Employer ? <br><div id="ans"> Hire workers close to you <div></h2>
                    <p class="lead"> you need workers,connect and post a smallBoulo offer,when you get applicants, views thier profiles and hire one of them </p>
                    
                </div>

                <div class="clearfix visible-xs"></div> <!-- for mobile display -->  

                <div class="col-md-4"  >
                    <br>
                    <img class="img-responsive rounded" src="/pics/sb.jpg" alt=" SmallBoulo" id="logo">
                </div>

                <div class="clearfix visible-xs"></div> <!-- for mobile display --> 

                <div class="col-md-4">
                    <hr class="section-heading-spacer-left" id="hr">
                    <div class="clearfix"></div>                
                    <h2 class="section-wo-heading">are you a Worker ?<br><div id="ans"> There are jobs for you <div></h2>
                    <p class="lead"> Have the opportunity to apply for posted SmallBoulos around your residence, no more stress to have a deal with an employer,we bring the closet jobs to you</p>
                </div>

            </div> <!-- row end -->
        </div> <!-- /.container -->
     </div> <!-- section-a end -->


    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModallabel" aria-hidden="true">
        <div class="modal-dialog"> Log Into SmallBoulo
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                    <h4 class="modal-title employerWorkerC"> Log In </h4>
                </div> 

                <div class="modal-body">
                        
                        <div class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-4">
                                        <label class="checkbox-inline workerColor">
                                           <input type="radio" name="selectedWF" value="worker" checked> Worker 
                                        </label>
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="checkbox-inline employerColor">
                                           <input type="radio" name="selectedWF" value="employer" checked> Employer 
                                        </label>   
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend id="employerWorkerC">SmallBoulo Login</legend>
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
                                  <a id="forgotPassword" href="#">Forgot your Password</a>
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
                    <button id="EWLoginBtn" class="btn btn-primary"> Log In </button>
                </div>
            </div><!-- /.modal-content -->
        </div>
   </div><!-- /.log in modal end -->


   

 @endsection