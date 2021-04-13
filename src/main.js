import Vue from 'vue';
import VueMeta from 'vue-meta'

import App from './App';
import { router } from './router';

Vue.use(VueMeta);

new Vue({
	el: '#app',
	template: '<app></app>',
	components: { App },
	router,

	mounted: function()
	{
		var path = localStorage.getItem('path');
		if(path)
		{
			localStorage.removeItem('path');
			router.push(path);
		}
	},

	scrollBehavior: function(to, from, savedPosition)
	{
		console.log('test');
		// return { x: 0, y: 0 }
		document.getElementById('app').scrollIntoView();
	}
}).$mount('#app');