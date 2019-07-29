@extends('layouts.app')

@section('content')

<style type="text/css">
  /*CSS*/ 
video {
  width: 100%;
  max-height: 100%;
}
</style>

<!--About section starts-->
<section id="about">
  <div class="row">
    <div class="col-12">
      <div class="content-header">Escaner</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-header">
          <h5>Personal Information</h5>
        </div>
        <div class="card-content">
          <div class="card-body">
           <div class="row">
             <div class="col-md-9" style="padding:0;">
                <div class="camera-container">
                  <div class="col-md-12">
                    <center>
                      <video id="preview-scanner"></video>
                    </center>
                  </div>

                  <div class="col-md-12 camera-buttons" style="display: none; text-align: center;margin-top: 10px">
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-3">
                  <div class="alert alert-danger camera-error" style="display: none">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong class="text-center scanner-error-message"></strong> 
                  </div>
                </div>
              </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-header">
          <h5>Datos</h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-tag font-small-3"></i> invitado por:</a></span>
                    <span class="d-block overflow-hidden" id="invitado">-</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-user-check font-small-3"></i> Nombre:</a></span>
                    <span class="d-block overflow-hidden" id="nombre">-</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-mail font-small-3"></i> Email:</a></span>
                    <span class="d-block overflow-hidden" id="email">-</span>
                  </li>
                   <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> Estatus:</a></span>
                    <a class="d-block overflow-hidden" id="estatus">-</a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-trending-up font-small-3"></i> Empresa:</a></span>
                    <span class="d-block overflow-hidden" id="empresa">-</span>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-phone-forwarded font-small-3"></i> Telefono:</a></span>
                    <a class="d-block overflow-hidden" id="telefono">-</a>
                  </li>
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> RUT:</a></span>
                    <a class="d-block overflow-hidden" id="rut">-</a>
                  </li>
                 
                </ul>
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

@section('script')
<script type="text/javascript">
      // let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      // scanner.addListener('scan', function (content) {
      //   $.ajax({
      //     url: '{{route("escanear.buscar")}}',
      //     type: 'POST',
      //     dataType: 'JSON',
      //     data: {codigo: content,_token:"{{ csrf_token() }}"},

      //   })
      //   .done(function(data) {
      //     if (data.status == 0) {
      //       var status = 'Sin Aceptar'
      //     }else{
      //       var status = 'Aceptada';
      //     }

      //     if (data.email_invitacion) {
      //       var invitado = data.email_invitacion;
      //     }else{
      //       var invitado = 'N/T';
      //     }
      //     $("#nombre").text(data.nombre);
      //     $("#email").text(data.email);
      //     $("#empresa").text(data.empresa);
      //     $("#rut").text(data.rut);
      //     $("#estatus").text(status);
      //     $("#telefono").text(data.telefono);
      //     $("#invitado").text(invitado);
      //   })
      //   .fail(function() {
      //     console.log("error");
      //   })
      //   .always(function() {
      //     console.log("complete");
      //   });
        
      // });
      // Instascan.Camera.getCameras().then(function (cameras) {
      //   console.log(cameras);
      //   var boton = '';
      //   $.each(cameras, function(index, val) {
      //     //console.log(val);
      //      boton += '<button class="btn btn-raised btn-success pull-right" id="'+val.id+'">Camara '+index+'</button>';
           
      //   });
      //   $("#buttons").html(boton);
      //   if (cameras.length > 0) {
      //     scanner.start(cameras[0]);
      //   } else {
      //     console.error('No cameras found.');
      //   }
      // }).catch(function (e) {
      //   console.error(e);
      // });

      $(document).ready(function(){
      $('.camera-buttons').on('click', '.btn-camera', function(){
        let cameraId = $(this).attr('id');
        startCamera(new Instascan.Camera(cameraId))
      })

      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          if(cameras.length > 0){
            $('.camera-buttons').show()
            startCamera(cameras[1])
            $.each(cameras, function(k, v) {
              console.log(button(k, v))
              $('.camera-buttons').append(button(k, v))
            })
          }else{
            startCamera(cameras[0])
          }
        } else {
          $('.camera-container').hide()
          cameraAlert.show().delay(7000).hide('slow')
          cameraAlert.find('.scanner-error-message').text('No se encontraron camaras.')
        }
      }).catch(function (e) {
          cameraAlert.show().delay(7000).hide('slow')
          cameraAlert.find('.scanner-error-message').text('Ha ocurrido un error inesperado.')
      });
    });

    let activeCameraId = null;
    let cameraAlert = $('.camera-error')

    let scanner = new Instascan.Scanner({
      video: document.getElementById('preview-scanner'),
      mirror: false,
      refractoryPeriod: 3000
    });
    scanner.addListener('scan', function (content) {
      $.ajax({
          url: '{{route("escanear.buscar")}}',
          type: 'POST',
          dataType: 'JSON',
          data: {codigo: content,_token:"{{ csrf_token() }}"},

        })
        .done(function(data) {
          alert("Escaneado");
          if (data.status == 0) {
            var status = 'Sin Aceptar'
          }else{
            var status = 'Aceptada';
          }

          if (data.email_invitacion) {
            var invitado = data.email_invitacion;
          }else{
            var invitado = 'N/T';
          }
          $("#nombre").text(data.nombre);
          $("#email").text(data.email);
          $("#empresa").text(data.empresa);
          $("#rut").text(data.rut);
          $("#estatus").text(status);
          $("#telefono").text(data.telefono);
          $("#invitado").text(invitado);
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
    });

    let button = function(index, camera){
      let name = camera.name || 'Camera ' + (index+1)

      return '<button id="'+camera.id+'" class="btn btn-primary btn-camera">'+name+'</button> '
    }

    function startCamera(camera) {
      if(activeCameraId != camera.id){
        activeCameraId && scanner.stop()

        scanner.start(camera).then(function(x){
          activeCameraId = camera.id;
        }).catch(function (e){
          activeCameraId = null
          cameraAlert.show().delay(7000).hide('slow')
          cameraAlert.find('.scanner-error-message').text('Ha ocurrido un error inesperado.')
        });
      }
    }
    </script>
@endsection