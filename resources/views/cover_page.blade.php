@extends("includes.layout")
@section("content")
<div class="wrapper">
  <div class="section text-center" style="height: -webkit-fill-available;">
    <div class="container">
      <div class="row content-center brand">
        <div class="col-md-12 content-center ">
            <img src="{{ asset('img/chemicalstan.jpg') }}" alt="cover image"   width="60%" >
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-12 col-md-offset-2 mt-4">
          <!-- <a href="" class="btn btn-primary pull-left "><i class="now-ui-icons arrows-1_minimal-left"></i> Prev </a> -->
          <a href="/album/{{$album['id']}}/speech" class="btn btn-primary">Next <i class="now-ui-icons arrows-1_minimal-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</div>
@stop