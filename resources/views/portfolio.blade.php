@extends("includes.layout")
@section("content")
  <div class="wrapper">

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h4 class="title text-center">My Portfolio</h4>
            <div class="nav-align-center">
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content gallery">

            <!-- PORTFOLIO IMAGES BEGIN -->
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <!-- COLON 1 START-->
                  <div class="col-md-6">
                    <img class="portfolio img-raised" src="{{ asset('img/portfolio1.jpg') }}" alt="" class="img-raised">
                    <img class="portfolio img-raised" src="{{ asset('img/default-avatar.png') }}" alt="" class="img-raised">
                  </div>
                  <!-- COLON 1 END-->
                  <!-- COLON 2 START -->
                  <div class="col-md-6">
                    <img class="portfolio img-raised" src="{{ asset('img/julie.jpg') }}" alt="" class="img-raised">
                    <img class="portfolio img-raised" src="{{ asset('img/portfolio4.jpg') }}" alt="" class="img-raised">
                  </div>
                  <!-- COLON 2 END-->
                </div>
              </div>
            <!-- PORTFOLIO IMAGES END -->

          </div>
        </div>
      </div>
    @stop