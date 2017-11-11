
require('./bootstrap');

window.Vue = require('vue');

Vue.component('ejemplo', require('./components/ejemplo.vue'));

const app = new Vue({
    el: '#app'
});
