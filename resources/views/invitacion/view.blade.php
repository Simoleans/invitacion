@extends('layouts.app')

@section('content')

<!--About section starts-->
<section id="about">
  <div class="row">
    <div class="col-12">
      <div class="content-header">Información de la invitación</div>

    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <a href="{{route('invitacion.index')}}" class="btn btn-raised btn-primary">
                <i class="ft-arrow-left"></i> Volver
            </a>
            @if($invitacion->etiqueta == 2)
            <button type="button" class="btn btn-raised btn-warning" data-toggle="modal"
              data-target="#warning">
              <i class="ft-credit-card"></i> Pagar
            </button>
            @endif
            <hr>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
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
              <div class="col-12 col-md-6 col-lg-4">
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

@section('script')

<!-- Modal -->
<div class="modal fade text-left" id="warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning white">
        <h4 class="modal-title" id="myModalLabel12"><i class="ft-alert-triangle"></i> Cambiar Etiqueta</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center"><i class="fa fa-arrow-right"></i> ¿Desea cambiar etiqueta?</h5>
       <form method="POST" action="{{route('invitacion.update',['id' => $invitacion->id])}}">
          @csrf
          @method('PUT')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-success">Cambiar</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection