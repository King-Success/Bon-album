@extends("includes.layout")
@section("content")
<div class="wrapper">
      <div class="section text-center" style="height: -webkit-fill-available;">
      <div class="container">     
        <form action="/create_album" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <h2 class="title">Create Album</h2>
          <p class="description">Add Album</p>
          <div class="row">
            <div class="col-lg-10 text-center col-md-10 ml-auto mr-auto">

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Album Name</div>
                  <input type="text" class="form-control" name="name" placeholder="Album Name...">
                </div>
              </div>

               <div>
                <div class="input-group">
                  <div class="input-group-addon">Album Cover</div>
                 <input style="margin-top: 6px; margin-left: 6px;" type="file" name="cover_image_url">
               </div>
              </div>  

              <div>
                <div class="input-group">
                  <div class="input-group-addon">Leader's Photo</div>
                 <input style="margin-top: 6px; margin-left: 6px;" type="file" name="president_image_url">
               </div>
              </div>

              <div class="textarea-container">
                <textarea class="form-control" name="presidential_speech" rows="4" cols="80" placeholder="Enter Leader's Speech..."></textarea>
              </div>
              <br>

            </div>
            <div class="col-lg-3 text-center col-md-3 ml-auto mr-auto">
              <div class="send-button">
                <input type="submit" class="btn btn-info btn-round btn-block btn-lg mt-4" value="Save">
              </div>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
@stop