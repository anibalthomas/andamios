@extends('layouts.app')
@section('header')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Clientes</li>
    </ol>
  </div><!--/.row-->

  {{-- <div class="row">
    <div class="col-lg-12">

      <h1 class="page-header">Listado de Clientes
<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#agregarcliente"><i class="fa fa-plus"></i> Agregar un cliente</button>
      </h1>

    </div>
  </div><!--/.row--> --}}
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Listado de Clientes
          <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#agregarcliente"><i class="fa fa-plus"></i> Agregar un cliente</button>
        </div>
            <div class="panel-body">

    <table id="clientes-table" class="table table-bordered table-striped">
<thead>
<tr>
  <th>ID</th>
  <th>Nombre</th>
  <th>Domicilio</th>
  <th>Acciones</th>
</tr>
</thead>
<tbody>
  @foreach ($clientes as $cliente)
    <tr>
      <td>{{ $cliente->id }}</td>
      <td>{{ $cliente->name }}</td>
      <td>{{ $cliente->domicilio }}</td>
      <td>
        <a href="{{ route('clientes.edit', $cliente)}}"
        class="btn btn-xs btn-info"
        {{-- data-toggle="modal" data-target="#editarcliente" --}}
        >Editar</a>
        <form  method="POST"
              action="{{ route('clientes.destroy', $cliente)}}"
              style="display: inline">
          {{ csrf_field() }} {{ method_field('DELETE')}}
          <button class="btn btn-xs btn-danger"

            onclick="return confirm('¿Estás seguro de querer eliminar este cliente?')"

                    {{-- onclick="swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this imaginary file!' ,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel plx!',
        closeOnConfirm: false,
        closeOnCancel: false
        },
        function(isConfirm) {
        if (isConfirm) {
            swal('Deleted!', 'Your imaginary file has been deleted.', 'success');
        } else {
            swal('Cancelled', 'Your imaginary file is safe :)', 'error');
        }
        }
        );" --}}
>
          Eliminar</button>
        </form>

      </td>
    </tr>


  @endforeach
</tbody>


</table>
</div>
</div>
</div>
</div>
@endsection

@push('styles')
  <link rel="stylesheet" href="/admin/datatables/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
  <script src="/admin/datatables/js/jquery.dataTables.min.js"></script>
  <script src="/admin/datatables/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#clientes-table').DataTable();

    });
  </script>

@endpush
