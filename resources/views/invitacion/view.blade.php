@extends('layouts.app')

@section('content')

<!--About section starts-->
<section id="about">
  <div class="row">
    <div class="col-12">
      <div class="content-header">About</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Personal Information</h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="mb-3">
              <span class="text-bold-500 primary">About Me:</span>
              <span class="d-block overflow-hidden">Hi, I’m Jose, I’m 29 and I work as a Ninja Developer for the
                “PIXINVENT” Creative Studio. In my research, I follow the flow of early medieval slavery from viking
                raids in the west, through the booming ports of the Scandinavian north, and out into the Islamic world.
                Reading texts against the grain and seeing artifacts as traces of the past can make their lives once
                again visible to us today. This website documents my efforts to do just that, and I hope it will prove
                a resource and an inspiration for others in similar pursuits.
                 
              </span>
            </div>
            <hr>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="icon-present font-small-3"></i> Birthday:</a></span>
                    <span class="d-block overflow-hidden">June 10th, 1988</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-map-pin font-small-3"></i> Birthplace:</a></span>
                    <span class="d-block overflow-hidden">New Jersey, USA</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-globe font-small-3"></i> Lives in:</a></span>
                    <span class="d-block overflow-hidden">Denver, USA</span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> Gender:</a></span>
                    <span class="d-block overflow-hidden">Male</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-mail font-small-3"></i> Email:</a></span>
                    <a class="d-block overflow-hidden">jose@yourmail.com</a>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-monitor font-small-3"></i> Website:</a></span>
                    <a class="d-block overflow-hidden">pixinvent.com</a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                 <img src="data:image/png;base64,{{ $invitacion->base64($invitacion->codigo) }}" class="img-responsive">
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About section ends-->


@endsection