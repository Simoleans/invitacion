@extends('layouts.app')

@section('content')

<section id="ordering">
  <div class="row">
    <div class="col-12">
      @include('partials.flash')
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Invitaciones <a href="{{route('invitacion.create')}}" class="btn btn-raised btn-success pull-right"><i class="ft-file-plus"></i> Nueva Invitacion</a></h4>

          <!-- <p class="card-text">todos los usuarios.</p> -->
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
</section>
<!--/ Default ordering table -->

@endsection
