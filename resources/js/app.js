require('./bootstrap');
require('./сounters');
require('./charts/pie');

window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);