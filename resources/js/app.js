require('./bootstrap');
require('./сounters');
require('./builder');

require('./charts/horizontal');
require('./charts/line');

window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);