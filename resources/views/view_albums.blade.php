@extends("includes.layout")
@section("content")
<div class="wrapper">
  <div class="section text-center" style="height: -webkit-fill-available;">
    <div class="container">
      <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
          <table class="table table-bordered table-hover table-earning">
            <h2 class="title">All Albums</h2>
            <thead>
              <tr>
                <th class="text-left">Album Name</th>
                <th>Album Year</th>
                <th>Total Members</th>
                <th>Album Cover</th>
                <th>Date Created</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>	
            </thead>
            <tbody>
              @foreach($albums as $album)
                <tr>
                  <td class="text-left">{{$album->name}}</td>
                  <td>{{$album->created_at}}</td>
                  <td>{{$album->count}}</td>
                  <td><img class="table-photo" src="{{ $album->cover_image_url }}" alt="cover image"></td>
                  <td>{{$album->created_at}}</td>
                  <td><a class="btn btn-success btn-sm" href="../album-content.html">View</a></td>
                  <td> <a class="btn btn-warning btn-sm" href="edit-album.html">Edit</a></td>
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
    @stop