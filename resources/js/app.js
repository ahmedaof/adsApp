require('./bootstrap');



import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

 // Router Imported
 import {routes} from './routes';



  
  window.Reload = new Vue();

const router = new VueRouter({
    routes,
    mode: 'history' 
  })
  
  
  
  Vue.component('AppHome',require('./components/AppHome.vue'))
  
  
  const app = new Vue({
      el: '#app',
      router
  });