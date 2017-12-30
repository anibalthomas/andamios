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

            <div id='app'>
              <contrato></contrato>
            </div>


              {{-- <div class="panel-footer">
            </div> --}}
    </div>
  </div>
</div>



@endsection
@push('styles')
  {{-- <link href="/select/css/select2.min.css" rel="stylesheet" /> --}}
  <link rel="stylesheet" type="text/css" href="/semantic/semantic.min.css">
@endpush
@push('scripts')
  {{-- <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="/semantic/semantic.min.js"></script> --}}

  {{-- <script src="/select/js/select2.min.js"></script> --}}
  <script>

// $(document).ready(function() {
//   $('.clt').select2();
// });
// $('select.dropdown')
//   .dropdown()
// ;
//
 </script>


@endpush
