@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-xl-6 col-lg-6 col-md-6 col-12">
    <div class="card bg-success">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">{{$aceptadas}}</h3>
              <span>Invitaciones Aceptadas</span>
            </div>
            <div class="media-right white text-right">
              <i class="ft-check-circle"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-6 col-12">
    <div class="card bg-danger">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">{{$sinAceptar}}</h3>
              <span>Invitaciones sin aceptar</span>
            </div>
            <div class="media-right white text-right">
              <i class="ft-alert-octagon"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6 col-12">
    <div class="card bg-success">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">{{$gratis}}</h3>
              <span>Invitaciones Gratis</span>
            </div>
            <div class="media-right white text-right">
              <i class="ft-alert-octagon"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
        </div>
      </div>
    </div>
  </div>
   <div class="col-xl-4 col-lg-6 col-md-6 col-12">
    <div class="card bg-warning">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">{{$pagar}}</h3>
              <span>Invitaciones Por Pagar</span>
            </div>
            <div class="media-right white text-right">
              <i class="ft-check-circle"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6 col-12">
    <div class="card bg-primary">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">{{$pagadas}}</h3>
              <span>Invitaciones Pagadas</span>
            </div>
            <div class="media-right white text-right">
              <i class="ft-check-circle"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
        </div>
      </div>
    </div>
  </div>
  
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Invitaciones <a href="{{route('invitacion.create')}}" class="btn btn-raised btn-success pull-right"><i class="ft-file-plus"></i> Nueva Invitacion</a></h4>
      </div>
      <div class="card-content">
        <div class="card-body card-dashboard">
          <table class="table table-striped table-bordered default-ordering dataTable">
            <thead>
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">E-mail</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Empresa</th>
                <th class="text-center">RUT</th>
                <th class="text-center">QR</th>
                <th class="text-center">Estatus</th>
                <th class="text-center">Accion</th>
              </tr>
            </thead>
            <tbody>
            @foreach($invitaciones as $i)
             <tr>
                <td class="text-center">{{$i->nombre}}</td>
                <td class="text-center">{{$i->email}}</td>
                <td class="text-center">{{$i->telefono}}</td>
                <td class="text-center">{{$i->empresa}}</td>
                <td class="text-center">{{$i->rut}}</td>
                <td class="text-center"><img src="{{asset('qr/'.$i->codigo.'.png')}}" class="img-responsive"></td>
                <td class="text-center"><span class="{{$i->status==0?'text-danger':'text-success'}}">{{$i->status==0?'Sin Aceptar':'Aceptada'}}</span></td>
                <td class="text-center">
                  <a href="{{route('invitacion.show',['id' => $i->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a>
                  <!-- <a href="{{route('invitacion.edit',['id' => $i->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Ver"></i></a> -->
                </td>
             </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
                      
@endsection
