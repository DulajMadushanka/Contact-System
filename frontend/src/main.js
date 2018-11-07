
import Vue from 'vue'
import App from './App.vue'
import Router from './router.js'
import router from './router.js'
import VeeValidate, { Validator } from 'vee-validate';
import vueResource from 'vue-resource'

Vue.use(vueResource);
Vue.use(VeeValidate);

new Vue({
  el: '#app',
  render: h => h(App),
  router:Router,
 
})
