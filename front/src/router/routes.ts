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

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
