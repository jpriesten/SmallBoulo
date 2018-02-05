
@extends('layouts.worker')

@section('content')

    <!-- header -->
    <a name="search"></a>

    <div class="intro-header"> 
        <div class="container-fluid" >
            <div class="row" >
                 <div class="col-md-4 col-md-offset-4">


                    <h1> search SmallBoulos around you </h1>
                   
                   <form role="form" id="searchForm">
                        
                        <div class="form-group ">

                           <!-- location selection -->
                           <label for="location"><h2 id="workerColor"> Where do you live  <span class="glyphicon glyphicon-map-marker"></span> </h2></label>                           
                            <select class="form-control offset-md-4">
                                <option value="Buea-molyko"> Buea-molyko </option>
                                <option value="Buea-boukwango"> Buea-boukwango</option>  
                                <option value="Buea-class-quarters"> Buea-class-quarters </option>
                                <option value="Buea-town"> Buea-town </option>
                                <option value="Buea-muea"> Buea-muea </option>                     
                                <option value="mile 16 "> mile 16 </option>
                                <option value="mutengene"> mutengene </option>
                                <option value="tiko"> tiko </option>
                            </select>
                       

                            <label for="workers"><h3 id="workerColor"> job category  <span class="glyphicon glyphicon-list"></span> </h3></label>
                         
                         <!-- job selection -->
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

                            <button id="searchBtn" class="btn-warning btn-lg"> search </button>
                   </form>        
                
                </div>                
            </div><!-- row end -->              
        </div>  <!-- /.container end-->
    </div> <!-- /.intro-header end -->
    

  <!-- for search results display  -->
    <div class="searchResults">





 








    </div><!-- results div end-->   

@endsection