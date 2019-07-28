@extends('layouts.app')

@section('content')

<section id="ordering">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Usuarios Registrados</h4>
          <p class="card-text">todos los usuarios.</p>
          
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered default-ordering dataTable">
              <thead>
                <tr>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">E-mail</th>
                  <th class="text-center">Accion</th>
                </tr>
              </thead>
              <tbody>
              @foreach($users as $u)
               <tr>
	               	<td class="text-center">{{$u->nombre}}</td>
	               	<td class="text-center">{{$u->email}}</td>
	               	<td class="text-center">
	               		<!-- <a href="{{route('user.show',['id' => $u->id])}}" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-eye" title="Ver"></i></a> -->
	               		<a href="{{route('user.edit',['id' => $u->id])}}" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1"><i class="fa fa-edit" title="Ver"></i></a>
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
