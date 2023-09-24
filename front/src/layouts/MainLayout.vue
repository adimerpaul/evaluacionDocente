<template>
  <q-layout view="lHh Lpr lFf">
    <q-header class="bg-white">
      <q-toolbar>
        <q-toolbar-title>
          <q-avatar>
            <img src="uto.png" />
          </q-avatar>
        </q-toolbar-title>
        <div>
          <q-btn
            flat
            dense
            color="primary"
            round
            icon="menu"
            aria-label="Menu"
            @click="leftDrawerOpen = !leftDrawerOpen"
          />
        </div>
      </q-toolbar>
    </q-header>

    <q-drawer
    v-model="leftDrawerOpen"
    show-if-above
    bordered
    :width="250"
  >
    <q-list bordered class="rounded-borders">
      <q-item-label header class="text-center text-bold">
        Opciones
      </q-item-label>

      <q-expansion-item dense exact expand-separator icon="home" label="Principal" to="/home" expand-icon="null" />
      <q-expansion-item dense exact expand-separator icon="people" label="Usuarios" to="/user" expand-icon="null" v-if="store.booluser"/>
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script >
import { defineComponent, ref } from 'vue'
import { globalStore } from '../stores/globalStore'

export default defineComponent({
  name: 'MainLayout',
  data () {
    return {
      leftDrawerOpen: ref(false),
      store: globalStore()
    }
  },
  methods: {
    logout () {
      this.$q.dialog({
        title: 'Cerrar sesión',
        message: '¿Está seguro que desea cerrar sesión?',
        cancel: true,
        persistent: true
      }).onOk(() => {
        this.$q.loading.show()
        this.$api.post('logout').then(() => {
          globalStore().user = {}
          localStorage.removeItem('tokenMulti')
          globalStore().isLoggedIn = false
          this.$router.push('/login')
          this.$q.loading.hide()
          globalStore().isLoggedIn = false
          globalStore().booluser = false
          globalStore().booldoc = false
          globalStore().boolmat = false
          globalStore().boolasig = false
          globalStore().boolest = false
          globalStore().boolimp = false
        })
      // eslint-disable-next-line @typescript-eslint/no-empty-function
      }).onCancel(() => {})
    },

    toggleLeftDrawer () {
      this.leftDrawerOpen = !this.leftDrawerOpen
    }
  }
})
</script>
