@extends('layouts.app')
@section('header')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">-----</li>
    </ol>
  </div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">--</div>
        <div class="panel-body">

        </div>
    </div>
  </div>
</div>
@endsection


  {{-- <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">------</h1>
    </div>
  </div><!--/.row--> --}}


<!-- Modal -->
<div class="modal fade" id="editarcliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                  <input type="text" class="form-control" name="name" value="{{ $cliente->name or old('name')}}" autofocus required>

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
</div>
