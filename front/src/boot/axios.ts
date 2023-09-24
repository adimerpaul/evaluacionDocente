import { boot } from 'quasar/wrappers'
import axios, { AxiosInstance } from 'axios'
import { useCounterStore } from 'stores/example-store'
import { Alert } from 'src/addons/Alert'
import { globalStore } from 'stores/globalStore'
declare module '@vue/runtime-core' {
  interface ComponentCustomProperties {
    $axios: AxiosInstance;
  }
}

// Be careful when using SSR for cross-request state pollution
// due to creating a Singleton instance here;
// If any client changes this (global) instance, it might be a
// good idea to move this instance creation inside of the
// "export default () => {}" function below (which runs individually
// for each client)
const api = axios.create({ baseURL: import.meta.env.VITE_API_BACK })
const url = import.meta.env.VITE_API_BACK
const store = useCounterStore()
export default boot(({ app, router }) => {
  // for use inside Vue files (Options API) through this.$axios and this.$api

  app.config.globalProperties.$axios = axios.create({ baseURL: import.meta.env.VITE_API_BACK })
  app.config.globalProperties.$url = import.meta.env.VITE_API_BACK
  app.config.globalProperties.$store = globalStore()
  // ^ ^ ^ this will allow you to use this.$axios (for Vue Options API form)
  //       so you won't necessarily have to import axios in each vue file

  app.config.globalProperties.$api = api
  // ^ ^ ^ this will allow you to use this.$api (for Vue Options API form)
  //       so you can easily perform requests against your app's API
  const token = localStorage.getItem('tokenEnc')
  console.log(token)
  if (token) {
    api.defaults.headers.common.Authorization = `Bearer ${token}`
    api.post('me').then((response) => {
      console.log(response.data)
      globalStore().user = response.data
      globalStore().isLoggedIn = true
      response.data.permisos.forEach((r: { id: number }) => {
        if (r.id === 1) globalStore().booluser = true
        if (r.id === 2) globalStore().booldoc = true
        if (r.id === 3) globalStore().boolmat = true
        if (r.id === 4) globalStore().boolasig = true
        if (r.id === 5) globalStore().boolest = true
        if (r.id === 6) globalStore().boolimp = true
      })
    }).catch(() => {
      app.config.globalProperties.$api.defaults.headers.common.Authorization = ''
      globalStore().user = {}
      localStorage.removeItem('tokenEnc')
      globalStore().isLoggedIn = false
      globalStore().booluser = false
      globalStore().booldoc = false
      globalStore().boolmat = false
      globalStore().boolasig = false
      globalStore().boolest = false
      globalStore().boolimp = false
      router.push('/login')
    })
  } else {
    console.log('no tokrn')
    console.log(router)
    // router.push('/login')
    router.push('/login')
    router.replace({ path: '/login' })
    globalStore().user = {}
    globalStore().isLoggedIn = false
    globalStore().booluser = false
    globalStore().booldoc = false
    globalStore().boolmat = false
    globalStore().boolasig = false
    globalStore().boolest = false
    globalStore().boolimp = false
    localStorage.removeItem('tokenEnc')
    globalStore().isLoggedIn = false
  }
})

export { api, Alert, url, store }
