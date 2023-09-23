<template>
  <q-page class="items-center bg-grey-4">
    <div class="text-center q-py-lg">
      <div class="row">
        <div class="col-6">
          <q-img src="LOGO_SIS.png" width="100px" />
        </div>
        <div class="col-6">
          <q-img src="LOGO_INF.png" width="100px" />
        </div>
      </div>
      <div class="text-h3 q-pa-md pacifico">Sistema de Evaluación Docentes</div>
      <q-img src="avatar.png" width="300px" />
      <q-card style="width: 300px; margin: 0 auto; position: relative; z-index: 1;" flat bordered>
        <q-card-section class="bg-primary">
          <q-btn color="white" size="18px" text-color="primary" push
                 label="Realizar Evaluacion" no no-caps icon-right="login"
                 @click="realizarEvaluacion" :loading="loading"
          />
        </q-card-section>
      </q-card>
<!--      <div class="bg-primary flex flex-center text-white" style="position: absolute; bottom: 0; width: 100%; height: 50px;">-->
<!--      </div>-->
    </div>
  </q-page>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue'
import { useQuasar } from 'quasar'
import { api, Alert, store } from 'boot/axios'
import { useRouter } from 'vue-router'
export default defineComponent({
  name: 'IndexEncuestaPage',
  setup () {
    const $q = useQuasar()
    const loading = ref(false)
    const router = useRouter()
    const realizarEvaluacion = () => {
      $q.dialog({
        title: 'Realizar Evaluacion',
        message: 'Ingrese su codigo de evaluacion',
        prompt: {
          model: '',
          type: 'text',
          maxlength: 5,
          outlined: true
        },
        cancel: true,
        persistent: true
      }).onOk((data) => {
        loading.value = true
        api.post('search', { search: data }).then((res) => {
          store.conocimientos = res.data.conocimientos
          store.asignacion = res.data.asignacion
          router.push('/evaluacion')
        }).catch((err) => {
          Alert.error(err.response.data.message)
        }).finally(() => {
          loading.value = false
        })
      })
    }
    return { realizarEvaluacion, loading }
  }
})
</script>
