import Vue from 'vue'
import VueRouter from 'vue-router'
import http from '../utils/HttpClient'

import HomeComponent from '../components/home/HomeComponent.vue'
import StudentsComponent from '../components/student/StudentComponent.vue'
import GoodsComponent from '../components/goodspage/Goodspagea.vue'
import LoginComponent from '../components/login/LoginComponent.vue'
import RegisterComponent from '../components/register/RegisterComponent.vue'
import LhaGoodspagea from '../components/LhaGoodspagea/LhaGoodspagea.vue'
import index from '../components/index/index.vue'


Vue.use(VueRouter)

const router = new VueRouter({
	routes: [{
		path: '/',
		name: 'index',
		component: index
	},{
		path: '/page/:id',
		name: 'goodspagea',
		component: GoodsComponent
	},{
		path: '/login',
		name: 'login',
		component: LoginComponent
	},
	{
		path: '/register',
		name: 'register',
		component: RegisterComponent
	},{
		path: '/LhaGoodspagea',
		name: 'LhaGoodspagea',
		component: LhaGoodspagea
	}]
})


//对将要进入的路由进行权判断
// router.beforeEach((to, from, next) =>{
// 	if(to.path != '/login'){
// 		// http.get('./src/data/sesson.json')
// 		// .then(response => {
// 		// 	if(!response.login){
// 		// 		router.replace('login');
// 		// 	}
// 		// 	next();
// 		// })
// 		http.get('http://localhost:888/getsession')
// 		.then(response => {
// 			if(!response.name){
// 				router.replace('login');
// 			} 
// 			next()
// 		});
// 	} else {
// 		next();
// 	}
// })

export default router