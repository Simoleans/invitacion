@extends('layouts.app')

@section('content')

<div class="col-md-8 offset-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title" id="basic-layout-form">Nueva invitación</h4>
      <p class="mb-0">Datos de invitación</p>
    </div>
    <div class="card-content">
      <div class="px-3">
        <form class="form" action="{{route('invitacion.store')}}" method="POST">
          @csrf
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <div class="form-body">
           <!--  <h4 class="form-section"><i class="ft-user"></i>Información Personal</h4> -->
           <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput1">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                </div>
              </div>
             <!--  <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput2">Last Name</label>
                  <input type="text" id="projectinput2" class="form-control" name="lname">
                </div>
              </div> -->
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">E-mail</label>
                  <input type="text"  class="form-control" name="email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">Empresa</label>
                  <input type="text"  class="form-control" name="empresa" value="{{old('empresa')}}">
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <label for="projectinput3">RUT*</label>
                  <input type="text"  class="form-control rut" name="rut" value="{{old('rut')}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput3">Telefono</label>
                  <input type="text"  class="form-control" name="telefono" value="{{old('telefono')}}">
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label for="projectinput6">¿Puede invitar?</label>
                  <select id="projectinput6" name="invitar" class="form-control">
                    <option value="">Seleccione...</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-actions">
            <a href="{{route('invitacion.index')}}" class="btn btn-raised btn-raised btn-warning mr-1">
              <i class="ft-arrow-left"></i> Volver
            </a>
            <button type="submit" class="btn btn-raised btn-raised btn-primary">
              <i class="fa fa-check-square-o"></i> Invitar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
