import { RouteRecordRaw } from 'vue-router'

const routes: RouteRecordRaw[] = [
  {
    path: '/',
    component: () => import('layouts/EncuentaLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexEncuestaPage.vue') },
      { path: 'evaluacion', component: () => import('pages/EvaluacionPage.vue') }
    ]
  },
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: 'login', component: () => import('pages/Login.vue') },
      { path: 'home', component: () => import('pages/Home.vue'), meta: { requiresAuth: true } },
      { path: 'user', component: () => import('pages/User.vue'), meta: { requiresAuth: true } },
      { path: 'docente', component: () => import('pages/Docente.vue'), meta: { requiresAuth: true } },
      { path: 'materia', component: () => import('pages/Materia.vue'), meta: { requiresAuth: true } }
    ]
  },
  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
