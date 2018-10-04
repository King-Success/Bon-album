@extends("includes.layout")
@section("content")

<div class="wrapper">
	<div class="page-header clear-filter" filter-color="">
	<!-- Home Backgroung Image -->
	 <div class="page-header-image" data-parallax="true">
      <!-- <div class="page-header-image2" data-parallax="true" style="background-image:url('img/atbu.jpg')"></div> -->
   </div>
<!-- Background Writeup -->
      <div class="container">
        <div class="content-center brand">
          <!-- <img class="n-logo" src="{{ asset('img/atbu-logo.jpg') }}" alt="" width="200"> -->
          <div class="col-md-12 col-md-offset-3">
            <form action="index2.html" class="search-form">
              <div class="form-group has-feedback">
                <div class="input-group" >
                  <!-- <button class="input-group-addon btn btn-primary">Search</button> -->
                  <input type="text" class="form-control" id="search_input" name="search" autocomplete="off" placeholder="Search Album Here...">
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- <h6 class="category category-absolute">Designed by
          <a href="http://invisionapp.com/" target="_blank">
            <img src="{{ asset('img/invision-white-slim.png') }}" class="invision-logo" />
          </a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">
            <img src="{{ asset('img/chemicalstan.jpg') }}" class="creative-tim-logo" />
          </a>ChemicalStan.</h6> -->
      </div>
     </div>

@stop