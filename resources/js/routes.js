let login = require('./components/login/login.vue').default;
let category = require('./components/category/index.vue').default;

export const routes = [
  { path: '/', component: login, name:'/'},
  { path: '/category', component: category, name:'category'},
]