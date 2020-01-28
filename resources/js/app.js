/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import vSelect from 'vue-select';
import vmodal from 'vue-js-modal';


import VueApexCharts from 'vue-apexcharts'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



/*
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('articles', require('./components/Articles.vue').default);
*/

Vue.component('netdisplay', require('./components/netDisplay.vue').default);
Vue.component('box', require('./components/box.vue').default);


Vue.component('apexchart', require('./components/VueApexCharts.vue').default);


/*
Vue.component('apexchart', VueApexCharts)
*/


Vue.component('v-select', vSelect);



const app = new Vue({
  el: '#app',
  data: function() {
    return {
      options: {
        chart: {
          id: 'vuechart-example'
        },
        xaxis: {
          categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
        }
      },
      series: [
	{
        name: 'series-1',
        data: [30, 40, 45, 50, 49, 60, 70, 1, 49, 60, 4, 91]
     	 },
	{
        name: 'series-2',
        data: [130, 26, 35, 50, 36, 60, 34, 31, 49, 32, 4, 21]
      }
		
	],
    }
  },
});

