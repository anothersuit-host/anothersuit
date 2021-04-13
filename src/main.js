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
			console.log(path);
			localStorage.removeItem('path');
			console.log(path)
			this.router.push(path);
		}
	}
}).$mount('#app');