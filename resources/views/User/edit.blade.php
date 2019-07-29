@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-9 offset-2">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title" id="basic-layout-form">Editar Usuario</h4>
      </div>
      <div class="card-content">
        <div class="px-3">
          <form class="form" method="POST" action="{{route('user.update',['id'=>$user->id])}}">
            @csrf
            @method('PUT')
            <div class="form-body">
              <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="projectinput1">Nombre</label>
                    <input type="text" id="projectinput1" class="form-control" name="nombre" value="{{$user->nombre}}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="projectinput3">E-mail</label>
                    <input type="text" id="projectinput3" class="form-control" name="email" value="{{$user->email}}">
                  </div>
                </div>
            </div>

            <div class="form-actions">
              <a href="{{route('user.index')}}" class="btn btn-raised btn-raised btn-warning mr-1">
                 Volver
              </a>
              <button type="submit" class="btn btn-raised btn-raised btn-primary">
                <i class="fa fa-check-square-o"></i> Guardar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
