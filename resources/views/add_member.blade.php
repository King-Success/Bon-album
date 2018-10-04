@extends("includes.layout")
@section("content")
<div class="wrapper">
  <div class="section text-center" style="height: -webkit-fill-available;">
    <div class="container">     
      <form action="/create_album/add_members/" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h2 class="title">Add Member</h2>
        @if(isset($error))
          <span style="color: red"> {{ $error }} </span>
        @elseif(isset($success))
          <span style="color: green"> {{ $success }} </span>
        @endif
        <p class="description">(5)</p>
        <div class="row">
          <div class="col-lg-10 text-center col-md-10 ml-auto mr-auto">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Select Album</div>
                  @if(isset($album_data))
                  <select class="form-control" name="album_id" >
                    <option value="{{ $album_data['id'] }}">{{ $album_data['name'] }}</option>
                  </select>
                  <input type="hidden" name="album_name" value="{{ $album_data['name'] }}">
                  @elseif(isset($albums_data))
                    @foreach($albums_data as $album_data)
                    <select class="form-control" name="album_id" >
                      <option value="{{ $album_data['id'] }}">{{ $album_data['name'] }}</option>
                    </select>
                    <input type="hidden" name="album_name" value="{{ $album_data['name'] }}">
                    @endforeach
                  @endif
                  @if(isset($album_data))<a class="btn btn-success" href="/album/{{ $album_data['id'] }}/members">View Members</a>@endif
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">New Member Email</div>
                  <input type="text" class="form-control" name="email" placeholder="Enter Email Here...">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Confirm Email</div>
                  <input type="text" class="form-control" name="confirm_email" placeholder="Confirm Email Here...">
                </div>
              </div>
              <br>
            </div>
            <div class="col-lg-3 text-center col-md-3 ml-auto mr-auto">
              <div class="send-button">
                <input type="submit" class="btn btn-info btn-round btn-block btn-lg" value="Add Member">
              </div>
            </div>
        </div>
     </form>
    </div>
  </div>
</div>
@stop