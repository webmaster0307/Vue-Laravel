import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login';
import Logout from '../components/login/Logout';
import Signup from '../components/login/Signup';
import ShowForum from '../components/forum/showForum';
import SingleQuestion from '../components/forum/singlequestion';
import CreateQuestion from '../components/forum/createQuestion';
import CreateCategory from '../components/category/createcategory';

const routes = [
  {
    path: '/login',
    component : Login
  },
  {
    path: '/signUp',
    component : Signup
  },
  {
    path: '/forum',
    component : ShowForum,
    name: 'forum'
  },
  {
    path: '/logout',
    component : Logout,
  },
  {
    path: '/question/:slug',
    component : SingleQuestion,
  },
  {
    path: '/ask',
    component : CreateQuestion,
    name: 'ask'
  },
  {
    path: '/create-category',
    component : CreateCategory,
    
  }
  
]
const router = new VueRouter({
  routes, // short for `routes: routes`
  mode: 'history',
  hashbang: false,
})
router.mode = 'html5'

export default router;
