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

  <!-- BEGIN : Body-->
  <body data-col="1-column" class=" 1-column  layout-dark blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Registration Page Starts-->
            <section id="regestration">
              <div class="container-fluid">
                <div class="row full-height-vh m-0">
                  <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="card">
                      <div class="card-content">
                        <div class="card-body register-img">
                          <div class="row m-0">
                            <div class="col-lg-6 d-none d-lg-block py-2 text-center">
                              <img src="{{asset('app-assets/img/gallery/register.png')}}" alt="" class="img-fluid mt-3 pl-3" width="400"
                                height="230">
                            </div>
                            <div class="col-lg-6 col-md-12 px-4 pt-3 bg-white">
                              <h4 class="card-title mb-2">Estas siendo invitado!, te toca invitar a ti.</h4>
                              <p class="card-text mb-3">
                                (*) Requeridos
                              </p>
                                <form class="form" action="{{route('store_invitacion')}}" method="POST">
                                  <input type="hidden" name="invitar" value="2">
                                  <input type="hidden" name="correo" value="{{$correo}}">
                                  @csrf
                                  <div class="form-body">
                                   <!--  <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
                                   <hr>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="projectinput1">Nombre*</label>
                                          <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="projectinput3">E-mail*</label>
                                          <input type="text"  class="form-control" name="email">
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="projectinput3">Empresa*</label>
                                          <input type="text"  class="form-control" name="empresa" value="{{old('empresa')}}">
                                        </div>
                                      </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="projectinput3">RUT*</label>
                                          <input type="text"  class="form-control rut" name="rut" value="{{old('rut')}}">
                                        </div>
                                      </div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="projectinput3">Telefono*</label>
                                          <input type="text"  class="form-control" name="telefono" value="{{old('telefono')}}">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-actions">
                                    <button type="submit" class="btn btn-raised btn-raised btn-primary">
                                      <i class="fa fa-check-square-o"></i> Invitar
                                    </button>
                                  </div>
                                </form>

                                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.js"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <script type="text/javascript">
      $(document).ready(function() {
        $(".rut").inputmask({
            mask: "9[9.999.999]-[9|K|k]",
          });
      });
    </script>
  </body>
  <!-- END : Body-->
</html>
