// IMPORTS.
import Vue from 'vue';
window.Vue = require('vue');

// Main/Gobal stylesheet.
require('../css/main.css');

 // Bootstrap package.
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);
require('./bootstrap');

// Fading image loader.
import VueImageLoader from '@kevindesousa/vue-image-loader'
Vue.use(VueImageLoader)

// Waterfall tiles.
import {Waterfall, WaterfallItem} from 'vue2-waterfall';

// Vue components.
Vue.component('card-container', require('./components/CardContainer.vue'));
Vue.component('nav-bar', require('./components/NavBar.vue'));

const app = new Vue({
    el: '#app'
});
