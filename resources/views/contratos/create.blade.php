@extends('layouts.app')
@section('header')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Contratos / Crear</li>
    </ol>
  </div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Elaborar Contrato</div>
        <div class="panel-body">

          <form class="form-horizontal" action="" method="POST">


            <div id='app'>
              <ejemplo></ejemplo>
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
