<template>
<div class="panel-body">
  <form class="form-horizontal"
  @submit.prevent="crearcontrato()"
   action="/contrato"
   method="POST">
    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Nombre</label>
            <div class="col-md-8">
                <input list
                 name="name"
                 v-model="buscar"
                 type="text"
                 placeholder="Escribe el nombre del cliente"
                 class="form-control"
                 @keyup.enter="buscarCliente()"
                 autofocus>

                 <div class="panel-footer" v-if="clientes.length">
                    <ul class="list-group">
                       <li v-if="buscar.length"
                           class="list-group-item"
                           v-for="cliente in clientes">
                        {{ cliente.name }}
                        <button class="btn btn-primary btn-xs pull-right"
                        @click.prevent="seleccionarCliente(cliente)">Seleccionar</button>
                       </li>
                    </ul>
                 </div>
            </div>
      </div>

          <div class="form-group">
            <label  class="col-md-4 control-label">Domicilio</label>
            <div class="col-md-8">
              <input name="domicilio" type="text" class="form-control" disabled v-model="cliente.domicilio">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-md-4 control-label">Colonia</label>
            <div class="col-md-8">
              <input name="colonia" type="text" class="form-control" disabled v-model="cliente.colonia">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-md-4 control-label">Telefono</label>
            <div class="col-md-8">
              <input name="colonia" type="text" class="form-control" disabled v-model="cliente.telcasa">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-md-4 control-label">Celular</label>
            <div class="col-md-8">
              <input name="colonia" type="text" class="form-control" disabled v-model="cliente.telcel">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <button  type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
          </div>

          <pre>{{cliente}}</pre>
          <!-- <pre>{{clientes[0+1].name}}</pre> -->
      </div>
    </div>
  </form>
</div>

</template>
<script>
export default
{
    data()
    {
      return {
          clientes: [],
          buscar: "",
          cliente: {}
      }
    },
mounted() {},
      methods:
    {
        buscarCliente()
        {
          axios.get('/clientes?query=' + this.buscar).then(res =>
            {
            // console.table(res.data); muestra en tabla en consola
            this.clientes = res.data;
            })
        },
          seleccionarCliente(cliente)
          {
              this.cliente = cliente;
          },

          crearcontrato()
           {
            axios.post('/contrato', this.cliente)
              .then(res =>{
                  console.log(res.data);
              });
            }
    },

}

</script>
