
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('world-checker', require('./components/WorldChecker.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue'
import hljs from 'highlight.js'

import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios);

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)

Vue.directive('highlightjs', {
    deep: true,
    bind: function (el, binding) {
        // on first bind, highlight all targets
        let targets = el.querySelectorAll('code');
        targets.forEach((target) => {
            // if a value is directly assigned to the directive, use this
            // instead of the element content.
            if (binding.value) {
                target.textContent = binding.value
            }
            hljs.highlightBlock(target)
        })
    },
    componentUpdated: function (el, binding) {
        // after an update, re-fill the content and then highlight
        let targets = el.querySelectorAll('code');
        targets.forEach((target) => {
            if (binding.value) {
                target.textContent = binding.value;
                hljs.highlightBlock(target)
            }
        })
    }
});

const app = new Vue({
    el: '#app'
});
