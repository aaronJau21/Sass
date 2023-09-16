import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/Auth/LoginView.vue')
    },
    {
      path:'/register',
      name: 'register',
      component: () => import('../views/Auth/RegisterView.vue')
    },
    {
      path:'/perfil',
      name:'perfil',
      component:() => import('../views/home/PerfilView.vue')
    },
    {
      path:'/',
      name:'home',
      component:() => import('../views/home/HomeView.vue')
    },
    {
      path:'/video',
      name:'video',
      component:() => import('../views/home/VideosView.vue')
    },
    {
      path:'/planes',
      name:'planes',
      component:() => import('../views/home/PlanesView.vue')
    }
  ]
})

export default router
