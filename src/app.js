import Vue from 'vue';
import router from './router/';

import App from './App.vue'

new Vue({
	el: '#lgy_Page',
	router,
	render: h => h(App)
})