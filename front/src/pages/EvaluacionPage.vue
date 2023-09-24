<template>
  <q-page class="items-center bg-grey-3 q-pa-md">
    <q-card flat bordered class="bg-grey-4" >
      <q-card-section class="q-pa-xs">
        <q-item clickable v-ripple dense>
          <q-item-section avatar>
            <q-avatar size="50px">
              <img v-if="store.asignacion"
                :src="`${url}../../images/${store.asignacion.docente.photo}`" />
            </q-avatar>
          </q-item-section>
          <q-item-section>
            <q-item-label v-if="store.asignacion">{{store.asignacion.docente.name}}</q-item-label>
            <q-item-label caption v-if="store.asignacion">
              <span class="text-weight-bold">Asignatura: </span>{{store.asignacion.materia.name}}
              <br>
              <span class="text-weight-bold">Sigla: </span>
              {{store.asignacion.materia.sigla}}-
              {{store.asignacion.materia.paralelo}}
              <br>
              <span class="text-weight-bold">Gestion: </span>{{store.asignacion.gestion}}
            </q-item-label>
          </q-item-section>
        </q-item>
      </q-card-section>
    </q-card>
    <template v-for="conocimiento in store.conocimientos" :key="conocimiento.id">
      <q-card class="q-ma-md" flat bordered>
        <q-card-section class="q-pa-xs text-center bg-black text-white">
          {{conocimiento.name}}
        </q-card-section>
        <q-card-section>
          <q-btn class="full-width q-ma-xs" rounded no-caps outline
                 v-for="(respuesta, i) in conocimiento.respuestas" :key="respuesta.id"
                 :color="i==0?'green':i==1?'orange':i==2?'red':'blue'"
          >
            <div class="text-black">{{respuesta.name}}</div>
          </q-btn>
        </q-card-section>
      </q-card>
    </template>
    <pre>{{store.conocimientos}}</pre>
    <div class="text-center q-pa-md">
      <q-card flat bordered>
        <q-card-section class="bg-primary">
          <q-btn color="white" size="18px" text-color="primary" push
                 label="Realizar Evaluacion" no no-caps icon-right="login"
                 @click="realizarEvaluacion" :loading="loading"
          />
        </q-card-section>
      </q-card>
    </div>
  </q-page>
</template>

<script lang="ts">
import { defineComponent, onMounted, ref } from 'vue'
import { useQuasar } from 'quasar'
import { api, Alert, store, url } from 'boot/axios'
import { useRouter } from 'vue-router'
export default defineComponent({
  name: 'EvaluacionPage',
  setup: function () {
    const $q = useQuasar()
    const loading = ref(false)
    const router = useRouter()
    onMounted(() => {
      // console.log(store.asignacion === {})
      if (store.asignacion === null) {
        router.push('/')
      }
    })
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
    return { realizarEvaluacion, loading, store, url }
  }
})
</script>
