<!-- Modal -->
<div class="modal fade" id="agregarcliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <form method="POST" action="{{route('clientes.store')}}">
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Agregar un cliente</h4>
        </div>
        <div class="modal-body">

          <div class="form-group {{ $errors->has('name') ? 'has-error': ''}}">
              <label>Nombre</label>
            <input id="cliente-name" name="name"
                   class="form-control"
                   value="{{ old('name') }}"
                   placeholder="Ingresa aqui el nombre del cliente" autofocus required>
            {!! $errors->first('name', '<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group {{ $errors->has('domicilio') ? 'has-error': ''}}">
              <label>Domicilio</label>
            <input id="cliente-domicilio" name="domicilio"
                   class="form-control"
                   value="{{ old('domicilio') }}"
                   placeholder="Ingresa aqui el domicilio del cliente" autofocus required>
            {!! $errors->first('domicilio', '<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group {{ $errors->has('colonia') ? 'has-error': ''}}">
              <label>Colonia</label>
            <input id="cliente-colonia" name="colonia"
                   class="form-control"
                   value="{{ old('colonia') }}"
                   placeholder="Ingresa aqui el la colonia de cliente" autofocus required>
            {!! $errors->first('colonia', '<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group {{ $errors->has('telcasa') ? 'has-error': ''}}">
              <label>Teléfono Casa/Oficina</label>
            <input id="cliente-telcasa" name="telcasa"
                   class="form-control"
                   value="{{ old('telcasa') }}"
                   placeholder="Ingresa aqui el telefono del cliente" autofocus required>
            {!! $errors->first('telcasa', '<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group {{ $errors->has('telcel') ? 'has-error': ''}}">
              <label>Teléfono Celular</label>
            <input id="cliente-telcel" name="telcel"
                   class="form-control"
                   value="{{ old('telcel') }}"
                   placeholder="Ingresa aqui el celular del cliente" autofocus required>
            {!! $errors->first('telcel', '<span class="help-block">:message</span>')!!}
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button  class="btn btn-primary">Crear cliente</button>
        </div>
      </div>
    </div>
  </form>
</div>
