import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);


// Components
import Work from '../components/Work.vue';
import Project from '../components/Project.vue';
import Contact from '../components/Contact.vue';


const router = new VueRouter({
	mode: 'history',
	base: __dirname,
	routes: [
		{ path: '/', component: Work },
		{ path: '/work/:id', component: Project },
		{ path: '/contact', component: Contact }
	]
});


router.beforeEach(function(to, from, next)
{
	window.scrollTo(0, 0)
	next()
})

export { router }