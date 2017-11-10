@extends('layouts.app')
@section('header')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Editar</li>
    </ol>
  </div><!--/.row-->

  {{-- <div class="row">
    <div class="col-lg-12">
      <h1 class="panel-header">Edición de Usuario</h1>
    </div>
  </div><!--/.row--> --}}
@endsection
@section('content')

    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">Edición de Usuario</div>
              <div class="panel-body">
                <form class="form-horizontal" action="{{route('clientes.update', $cliente)}}" method="POST">
                    {{ csrf_field() }}  {{ method_field('PUT') }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="name" value="{{ $cliente->name or old('name')}}" autofocus required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('domicilio') ? ' has-error' : '' }}">
                        <label for="domicilio" class="col-md-4 control-label">Domicilio</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="domicilio" value="{{ $cliente->domicilio or old('domicilio')}}"required>
                            @if ($errors->has('domicilio'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('domicilio') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('colonia') ? ' has-error' : '' }}">
                        <label for="colonia" class="col-md-4 control-label">Colonia</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="colonia" value="{{ $cliente->colonia or old('colonia')}}"required>
                            @if ($errors->has('colonia'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('colonia') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('telcasa') ? ' has-error' : '' }}">
                        <label for="telcasa" class="col-md-4 control-label">teléfono casa/oficina</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="telcasa" value="{{ $cliente->telcasa or old('telcasa')}}"required>
                            @if ($errors->has('telcasa'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telcasa') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('telcel') ? ' has-error' : '' }}">
                        <label for="telcel" class="col-md-4 control-label">Teléfono celular</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="telcel" value="{{ $cliente->telcel or old('telcel')}}"required>
                            @if ($errors->has('telcel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telcel') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="panel-footer">
                      <div class="form-group">
                        <div class="col-md-12">
                          <button  type="submit" class="btn btn-primary pull-right">Guardar</button>
                        </div>
                      </div>
                  </div>

          </form>

      </div>
    </div>
  </div>
</div>
@endsection


<!-- Modal -->
{{-- <div class="modal fade" id="editarcliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <form method="POST" action="">
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Editar un cliente</h4>
        </div>
        <div class="modal-body">

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Nombre</label>

              <div class="col-md-6">
                  <input type="text" class="form-control" name="name" value="{{ $cliente->name}}" autofocus required>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button  class="btn btn-primary">Editar cliente</button>
        </div>
      </div>
    </div>
  </form>
</div> --}}
