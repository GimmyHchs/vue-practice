// basic
Vue.component('default', require('./components/basic/default.vue'));
Vue.component('data-binding', require('./components/basic/data-binding.vue'));
Vue.component('event-handle', require('./components/basic/event-handle.vue'));
Vue.component('for-list', require('./components/basic/for-list.vue'));
Vue.component('pass-variable', require('./components/basic/pass-variable.vue'));



// advance
Vue.component('articles-list', require('./components/advance/articles-list.vue'));
Vue.component('methods-computed', require('./components/advance/methods-computed.vue'));
Vue.component('vue-resource-list', require('./components/advance/vue-resource-list.vue'));
Vue.component('transition-component', require('./components/advance/transition-component.vue'));


// mix
Vue.component('crud', require('./components/mix/crud.vue'));
window.first_chart = require('./mixin/first-chart.js');
Vue.component('first-chart', require('./components/mix/first-chart.vue'));
Vue.component('line-chart', require('./components/mix/line-chart.vue'));
Vue.component('bar-chart', require('./components/mix/bar-chart.vue'));
