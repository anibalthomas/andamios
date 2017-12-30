
require('./bootstrap');

window.Vue = require('vue');

Vue.component('contrato', require('./components/contrato.vue'));

const app = new Vue({
    el: '#app'
});
