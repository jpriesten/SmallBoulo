
@extends('layouts.employer')



@section('content')

    <!-- into-header -->
    <a name="search"></a>

    <div class="intro-header"> 
        <div class="container-fluid" >
            <div class="row" >
                 <div class="col-md-4 col-md-offset-4">


                    <h1 id="whenActive"> search Workers around you </h1>
                   
                   <form role="form" id="searchForm" method="POST" action="/searchResults">
                   {{ csrf_field() }}
                        
                        <div class="form-group ">
                           
                           <!-- location selection -->
                           <label for="location"><h2 id="employerColor"> Where do you live  <span class="glyphicon glyphicon-map-marker"></span> </h2></label>                           
                            <select class="form-control" name="jobLocation">
                                <option > Buea-molyko </option>
                                <option > Buea-boukwango</option>  
                                <option > Buea-class-quarters </option>
                                <option > Buea-town </option>
                                <option > Buea-muea </option>                     
                                <option > mile 16 </option>
                                <option > mutengene </option>
                                <option > tiko </option>
                            </select>
                        
                           <!-- job selection -->
                           <label for="workers"><h3 id="employerColor"> job category  <span class="glyphicon glyphicon-list"></span> </h3></label>

                            <select class="form-control" name="userSkill">
                                <option> Carpenter </option>
                                <option> Gardener </option>
                                <option> Electrician </option>
                                <option> Plumber </option>
                                <option> House Teacher </option>
                                <option> Farm Worker </option>
                                <option> Painter </option>
                                <option> Brick Layer </option>
                                <option> Builder </option>
                            </select>

                        </div>

                            <button id="searchBtn" class="btn-success btn-lg" type="submit"> search </button>
                   </form>        
                </div>
                
              
            </div><!-- row end -->

        </div>  <!-- /.container end-->
    </div> <!-- /.intro-header end -->
    

    <!-- for search results display  -->
    <div class="searchResults">








    </div><!-- results div end-->
    

@endsection