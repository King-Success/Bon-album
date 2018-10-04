@extends("includes.layout")
@section("content")
<div class="wrapper">
  <div class="section text-center" style="height: -webkit-fill-available;">
    <div class="container">
      <div class="col-lg-12 col-md-12 ml-auto mr-auto">
        <div>
          <div class="table-responsive">
            <table class="table table-hover">
              <h2 class="title">{{ $album->name }}</h2>
              <thead>
                <tr>
                  <th class="text-left">Name</th>
                  <th>Nick Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Gender</th>
                  <th>Profile</th>
                  <th>Delete</th>
                </tr>	
              </thead>
              <tbody>
                @foreach($profiles as $profile)
                 <tr>
                  <td class="text-left">{{ $profile['fullname'] }}</td>
                  <td>{{ $profile['nickname'] }}</td>
                  <td>{{ $profile['email'] }}</td>
                  <td><img class="table-photo" src="../assets/img/profile-pic.jpg"></td>
                  <td>{{ $profile['phone'] }}</td>
                  <td>{{ $profile['status'] }}</td>
                  <td>{{ $profile['gender'] }}</td>
                  <td> <a class="btn btn-success btn-sm" href="../profile.html">View</a></td>
                  <td> <a class="btn btn-danger btn-sm" href="#">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div> 
@stop