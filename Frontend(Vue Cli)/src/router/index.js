import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    component: () => import('../views/AboutView.vue')
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('../views/AuthorizationView.vue')
  },
  {
    path: '/reg',
    name: 'reg',
    component: () => import('../views/RegView.vue')
  },
  {
    path: '/profile',
    name: 'profile',
    component: () => import('../views/ProfileView.vue')
  },
  {
    path: '/update-user',
    name: 'updateUser',
    component: () => import('../views/UpdateUserView.vue')
  },
  {
    path: '/addAdvt',
    name: 'addAdvt',
    component: () => import('../views/AddAdvtView.vue')
  },
  {
    path: '/advt',
    name: 'advt',
    component: () => import('../views/AdvtView.vue')
  },
  {
    path: '/advts',
    name: 'advts',
    component: () => import('../views/AllAdvtView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
