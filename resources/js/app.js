/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('admin-lte');

window.Vue = require('vue');

// Vue Router
import router from './router';

/**
 * This section of the code is used to import and configure javascript
 * libraries and dependencies. Including importing components creating
 * Vue global configs.
 */

// Sweet Alert 2
import Swal from 'sweetalert2';
window.Swal = Swal

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
