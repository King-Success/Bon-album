@extends("includes.layout")
@section("content")
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="">
      <div class="page-header-image" data-parallax="true" ></div>
        <div class="container">
        <div class="row">
          <div class="avatar-upload mt-0">
            <div class="avatar-edit">
                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                <label for="imageUpload"></label>
            </div>
            <div class="avatar-preview">
                <div id="imagePreview" style="background-image: url(https://ui-avatars.com/api/?name=Kingsley+Arinze&size=240">
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- TOP CAMPAIGN-->
        <div class="col-lg-6 col-md-6 ml-auto mr-auto">
          <div class="top-campaign">
            <div class="table-responsive">
              <table class="table table-top-campaign">
                <tbody>
                  <tr>
                    <td class="text-left">Full Name</td>
                    <td> {{ $profile['fullname']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Nick Name</td>
                    <td>{{ $profile['nickname']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Email</td>
                    <td>{{ $profile['email']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Phone</td>
                    <td>{{ $profile['phone']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Status</td>
                    <td>{{ $profile['status']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Gender</td>
                    <td>{{ $profile['gender']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Quote</td>
                    <td>{{ $profile['quote']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Country</td>
                    <td>{{ $profile['country']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Date Of Birth</td>
                    <td>{{ $profile['DOB']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Hobbies</td>
                    <td>{{ $profile['hobbies']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td class="text-left">Address</td>
                    <td>{{ $profile['address']? : 'NILL' }}</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- INGO IMAGE BEGIN -->
        <div class="col-lg-6 col-md-6 ml-auto mr-auto profile-page">
          <div id="carouselExampleIndicators" class="carousel slide" style="width: 300px; margin: 0 auto" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/profile-pic.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/profile-pic.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/profile-pic.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
            <!-- <img class="profile-container" src="{{asset('img/profile-pic.jpg') }}" alt=""> -->

          <div class="mt-4">
              <a href="" class="btn btn-primary btn-round dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">Albums</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              @if($profile['albums'] != null)
              @foreach($profile['albums'] as $album)
              <a class="dropdown-item" href="/album/{{ $album['id'] }}/cover">
                <p class="now-ui-icons text-center"> {{ $album['name'] }} </p> 
              </a>
              @endforeach
              @else
              <p class="now-ui-icons text-center">No Other Albums</p> 
              @endif
            </div>
              <a href="" class="btn btn-primary btn-round">Videos</a>
              <a href="profile2.html" class="btn btn-primary btn-round">Pictures</a>
          </div>
        </div>
          <!-- INFO IMAGE END -->
      </div>
      <div class="col-md-12 col-md-offset-2 mt-4 mb-4" style="">
          
            @if($profile['hasPrev'])
              <a class="btn btn-primary " href="/album/profiles/prev?album_id={{ $profile['album_id'] }}&profile={{ $profile['id'] }}"><i class="now-ui-icons arrows-1_minimal-left"></i> Prev </a> 
            @else
              <a class="btn btn-primary " href="/album/{{ $profile['album_id'] }}/members_grid"><i class="now-ui-icons arrows-1_minimal-left"></i> Prev </a> 
            @endif
            @if($profile['hasNext'])
              <a href="/album/profiles/next?album_id={{ $profile['album_id'] }}&profile={{ $profile['id'] + 1}}" class="btn btn-primary ">Next <i class="now-ui-icons arrows-1_minimal-right"></i> </a>
            @endif
        </div>
    @stop