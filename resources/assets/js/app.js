
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./prism.js');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

// npm package
// require('hchs-vue-charts');

// local package
require('./vue-define.js');
window.store = new Vuex.Store({
  state: {
    count: 0
  },
  getters: {
    getCount: state => {
      return state.count;
    },
  },
  mutations: {
  	increment: state => state.count++,
    decrement: state => state.count--
  },

});

const app = new Vue({
    mixins: [mixin],
    store,
    el: '#app'
});
