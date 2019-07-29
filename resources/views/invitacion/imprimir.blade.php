<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ config('app.name') }}</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('app-assets/img/ico/apple-icon-60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('app-assets/img/ico/apple-icon-76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('app-assets/img/ico/apple-icon-120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('app-assets/img/ico/apple-icon-152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/img/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('app-assets/img/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/prism.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->
   <style type="text/css">

@page {
    size:A4 landscape;
    margin-left: 0px;
    margin-right: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    margin: 0;
    -webkit-print-color-adjust: exact;
}


  </style>

  <!-- BEGIN : Body-->
  <body data-col="1-column" class=" 1-column  layout-dark blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <input id="url" type="hidden" name="url" value="{{route('invitacion.status',['id' => $invitacion->id])}}">
    <div class="wrapper">
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Registration Page Starts-->
            <section id="regestration">
              <div class="row full-height-vh m-0">
                  <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="card">
                      <div class="card-content">
                        <div class="card-body register-img">
                          <div class="row m-0">
                            <div class="col-lg-6 offset-1 py-2 text-center">
                               <img src="data:image/png;base64,{{ $invitacion->base64($invitacion->codigo) }}" class="img-responsive" align="center">
                            </div>   
                          </div>
                          <hr>
                          <div class="row m-0">
                            <div class="col-6 col-md-6 col-lg-6">
                              <ul class="no-list-style">
                                <li class="mb-2">
                                  <span class="text-bold-500 primary"><a><i class="ft-tag font-small-3"></i> invitado por:</a></span>
                                  <span class="d-block overflow-hidden">{{$invitacion->email_invitacion?$invitacion->email_invitacion:'N/T'}}</span>
                                </li>
                                <li class="mb-2">
                                  <span class="text-bold-500 primary"><a><i class="ft-user-check font-small-3"></i> Nombre:</a></span>
                                  <span class="d-block overflow-hidden">{{$invitacion->nombre}}</span>
                                </li>
                                <li class="mb-2">
                                  <span class="text-bold-500 primary"><a><i class="ft-mail font-small-3"></i> Email:</a></span>
                                  <span class="d-block overflow-hidden">{{$invitacion->email}}</span>
                                </li>
                                 <li class="mb-2">
                                  <span class="text-bold-500 primary"><a><i class="ft-tag font-small-3"></i> Etiqueta:</a></span>
                                  <span class="d-block overflow-hidden">{{$etiqueta}}</span>
                                </li>
                              </ul>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                              <ul class="no-list-style">
                                <li class="mb-2">
                                  <span class="text-bold-500 primary"><a><i class="ft-trending-up font-small-3"></i> Empresa:</a></span>
                                  <span class="d-block overflow-hidden">{{$invitacion->empresa}}</span>
                                </li>
                                <li class="mb-2">
                                  <span class="text-bold-500 primary"><a><i class="ft-phone-forwarded font-small-3"></i> Telefono:</a></span>
                                  <a class="d-block overflow-hidden">{{$invitacion->telefono}}</a>
                                </li>
                                <li class="mb-2">
                                  <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> RUT:</a></span>
                                  <a class="d-block overflow-hidden">{{$invitacion->rut}}</a>
                                </li>
                              </ul>
                            </div>
                             <div class="col-6 col-md-6 col-lg-6">
                              <a href="{{route('create_invitacion',['id' => $invitacion->id,'codigo' => $invitacion->codigo])}}" target="_blank" class="btn btn-success">Invitar</a>
                            </div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>

            </section>
            <!--Registration Page Ends-->

          </div>
        </div>
        <!-- END : End Main Content-->
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('app-assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{asset('app-assets/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/js/customizer.js')}}" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <script type="text/javascript">
      $(document).ready(function() {
        window.print();

        var action = $("#url").val();
        $.ajax({
          url: action,
          type: 'POST',
          dataType: 'JSON',
          data: {id: '{{$invitacion->id}}',_token:"{{ csrf_token() }}"},
        })
        .done(function() {
          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
        
      });
    </script>
  </body>
  <!-- END : Body-->
</html>
