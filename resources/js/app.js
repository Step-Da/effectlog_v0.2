require('./bootstrap');

window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);