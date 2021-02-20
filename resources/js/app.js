require('./bootstrap');    //Стиили Bootstrap
require('./сounters');    //Живой счетчик
require('./liveSearch'); //Живой поиск

//Подключение графиков для статистики поставщика
require('./charts/horizontal'); //Горизонтальный вывод графика
// require('./charts/line'); //Линейный (кривая) вывод графика

window.Vue = require('vue');
window.$ = window.jQuery = require('jquery'); //Подключение JQuery

Vue.component('example-component', require('./components/ExampleComponent.vue').default);