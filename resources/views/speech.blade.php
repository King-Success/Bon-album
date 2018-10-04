@extends("includes.layout")
@section("content")
<div class="wrapper" >
  <div class="section text-center" style="height: -webkit-fill-available;">
    <div class="container">
      <div class="content-center brand">
        <img class="n-logo" style="max-width: 20% !important;" src="{{ $album['president_image_url'] }}" alt="President Image">
      </div>
      <div class="row content-center brand">
        <div class="col-md-12 content-center ">
          <h3>Presidential Speech</h3>
            {!! $album['presidential_speech'] !!}
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-12 col-md-offset-2 mt-4">
          <a href="/album/{{$album['id']}}/cover" class="btn btn-primary"><i class="now-ui-icons arrows-1_minimal-left"></i> Prev </a>
          <a href="/album/{{ $album['id'] }}/members_grid" class="btn btn-primary">Next <i class="now-ui-icons arrows-1_minimal-right"></i> </a>
        </div>


      </div>
    </div>
  </div>
</div>
@stop