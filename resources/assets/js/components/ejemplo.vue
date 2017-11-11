<template>
        <div class="row">
            <div class="col-md-8">

              <div class="form-group">
                  <label for="name" class="col-md-4 control-label">Nombre</label>
                  <div class="col-md-8">
                      <input list v-model="buscar"
                             type="text"
                             placeholder="Escribe el nombre del cliente"
                             class="form-control"

                             autofocus>

                       <div class="panel-footer" v-if="clientes.length">
                          <ul class="list-group">
                             <li v-if="buscar.length"
                                 class="list-group-item"
                                 v-for="cliente in filteredClientes">
                              {{ cliente.name }}
                             </li>
                          </ul>
                       </div>
                  </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Domicilio</label>
                  <div class="col-md-8">
                  <input type="text" class="form-control" disabled>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Colonia</label>
                  <div class="col-md-8">
                  <input type="text" class="form-control" disabled>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Telefono</label>
                  <div class="col-md-8">
                  <input type="text" class="form-control" disabled>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Celular</label>
                  <div class="col-md-8">
                  <input type="text" class="form-control" disabled>
                  </div>
              </div>

            </div>
        </div>
</template>
<script>
    export default {
        data(){
          return {
              clientes: [],
              buscar: ""
          }
        },
        mounted() {
            axios.get('/contratos/create').then(res => {
                this.clientes = res.data;
                // console.log(res.data);  para ver en consola
            })
        },
        computed: {
          filteredClientes: function(){
            return this.clientes.filter((cliente) => {
              return cliente.name.match(this.buscar);
            });
          }
        }

    }
</script>
