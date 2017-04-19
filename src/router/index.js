import Vue from 'vue'
import VueRouter from 'vue-router'
import http from '../utils/HttpClient'

import HomeComponent from '../components/home/HomeComponent.vue'
import StudentsComponent from '../components/student/StudentComponent.vue'
import GoodsComponent from '../components/goodspage/Goodspagea.vue'
import LoginComponent from '../components/login/LoginComponent.vue'
import RegisterComponent from '../components/register/RegisterComponent.vue'
import LhaGoodspagea from '../components/LhaGoodspagea/LhaGoodspagea.vue'
import LhaGoodspageaa from '../components/LhaGoodspageaa/LhaGoodspageaa.vue'
import index from '../components/index/index.vue'
import cart from '../components/cart/cart.vue'
import details from '../components/details/details.vue'


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
	},{
		path: '/LhaGoodspageaa/:id',
		name: 'LhaGoodspageaa',
		component: LhaGoodspageaa
	},{
		path: '/cart',
		name: 'cart',
		component: cart
	},{
		path: '/details/:id',
		name: 'details',
		component: details
	}],
	// mode: 'history',
 //  	scrollBehavior (to, from, savedPosition) {
 //      // 如果你的連結是帶 # 這種
 //      // to.hash 就會有值(值就是連結)
 //      // 例如 #3
 //      if (to.hash) {
 //        return {
 //          // 這個是透過 to.hash 的值來找到對應的元素
 //          // 照你的 html 來看是不用多加處理這樣就可以了
 //          // 例如你按下 #3 的連結，就會變成 querySelector('#3')，自然會找到 id = 3 的元素
 //          selector: to.hash
 //        }
 //      }
 //    }
})

export default router