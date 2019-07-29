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
           <video id="preview"></video>
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
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        $.ajax({
          url: '{{route("escanear.buscar")}}',
          type: 'POST',
          dataType: 'JSON',
          data: {codigo: content,_token:"{{ csrf_token() }}"},

        })
        .done(function(data) {
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
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
@endsection