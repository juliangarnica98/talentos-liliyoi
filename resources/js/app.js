/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify);
Vue.use(VueRouter);

Vue.component('page-inicio', require('./components/page-init/WelcomeComponent.vue').default);
Vue.component('page-vacantes', require('./components/page-init/VacanteComponent.vue').default);

let app_home_page_inicio = { template:`<page-inicio></page-inicio>`}
let app_home_vacantes = { template:`<page-vacantes></page-vacantes>`}

const router = new VueRouter({
    routes: [
        { path: '/', name:'home', component: app_home_page_inicio },
        { path: '/vacantes', name:'vancantes', component: app_home_vacantes },
    ],
    mode: "history"
})

const app = new Vue({
    router,
    el: '#app',
    vuetify: new Vuetify({
        iconfont: 'mdi',
        theme: {
            themes: {
                light: {
                    link: "#FFFFFF",
                    primary: "#fc007e"
                }
            }
        }
    })
});
