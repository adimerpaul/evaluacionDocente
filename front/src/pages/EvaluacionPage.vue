<template>
  <q-page class="items-center bg-grey-3 q-pa-md">
    <q-card flat bordered class="bg-grey-4">
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
              {{store.asignacion.paralelo}}
              <br>
              <span class="text-weight-bold">Gestion: </span>{{store.asignacion.gestion}}
            </q-item-label>
          </q-item-section>
        </q-item>
      </q-card-section>
    </q-card>
    <div class="q-py-xs">
      <q-linear-progress rounded size="25px" :value="num/store.conocimientos.length" color="orange" track-color="grey-3">
        <div class="absolute-full flex flex-center">
          <q-badge color="white" text-color="accent" :label="num" />
        </div>
      </q-linear-progress>
    </div>
    <div class="text-bold text-center text-subtitle1">
      {{num}}/{{store.conocimientos.length}}
    </div>
    <template v-for="(conocimiento,index) in store.conocimientos" :key="conocimiento.id">
      <q-card class="q-mb-md" flat bordered v-if="index+1==num" style="height: 450px;">
        <q-card-section class="q-pa-xs text-center bg-black text-white text-h4">
          {{conocimiento.name}}
        </q-card-section>
        <q-card-section>
          <q-btn class="full-width q-ma-xs" rounded no-caps :outline="!(conocimiento.textRespuesta==respuesta.name)"
                 v-for="(respuesta, i) in conocimiento.respuestas" :key="respuesta.id"
                 :color="i==0?'green':i==1?'orange':i==2?'red':'blue'"
                 @click="responder(respuesta, conocimiento)"
          >
            <div class="text-black text-h5 text-bold">{{respuesta.name}}</div>
          </q-btn>
        </q-card-section>
      </q-card>
    </template>
    <div class="row justify-center q-mt-md">
      <q-btn label="Anterior" color="primary" @click="num--" v-if="num>1" no-caps icon="arrow_back" />
      <q-space />
      <q-btn label="Siguiente" color="primary" @click="num++" v-if="num<store.conocimientos.length" no-caps icon-right="arrow_forward" />
    </div>
    <div class="q-pa-md">
<!--      v-if="num==store.conocimientos.length"-->
      <q-btn label="Enviar" v-if="num==store.conocimientos.length" color="green" @click="enviar" icon-right="send" class="full-width" />
    </div>
    <q-dialog v-model="dialog">
      <q-card>
        <q-card-section>
          <div class="text-h6">¿Está seguro de enviar la evaluación?</div>
        </q-card-section>
        <q-card-section>
          <q-select label="Carrera" v-model="carrera" :options="['INGENIERÍA DE SISTEMAS','INGENIERÍA INFORMÁTICA']" outlined dense />
          <q-select label="Mención" v-model="mension" :options="['DESARROLLO DE SOFTWARE','TELEMATICA','DIRECCIÓN Y GESTIÓN DE SISTEMAS EMPRESARIALES','GESTIÓN DE LA INFORMACIÓN','MODELAMIENTO Y OPTIMIZACIÓN DE RECURSOS-PROCESOS']" outlined dense />
        </q-card-section>
        <q-card-actions align="right">
          <q-btn :loading="loading" label="Cancelar" color="red" v-close-popup />
          <q-btn :loading="loading" label="Aceptar" color="green" @click="enviarFomulario" />
        </q-card-actions>
      </q-card>
    </q-dialog>
<!--    <pre>{{store.conocimientos}}</pre>-->
  </q-page>
</template>

<script lang="ts">
import { defineComponent, onMounted, ref } from 'vue'
import { store, url, api, Alert } from 'boot/axios'
import { useRouter } from 'vue-router'
export default defineComponent({
  name: 'EvaluacionPage',
  setup: function () {
    const loading = ref(false)
    const dialog = ref(false)
    const carrera = ref('')
    const mension = ref('')
    const num = ref(1)
    const router = useRouter()
    onMounted(() => {
      // console.log(store.asignacion === {})
      if (store.asignacion === null) {
        router.push('/')
      }
    })
    const responder = (respuesta: any, conocimiento: any) => {
      // console.log(respuesta.name)
      conocimiento.textRespuesta = respuesta.name
      if (num.value < store.conocimientos.length) {
        num.value++
      }
    }
    const enviar = () => {
      // console.log(store.conocimientos)
      dialog.value = true
    }
    const enviarFomulario = () => {
      if (carrera.value === '') {
        Alert.error('Debe seleccionar una carrera')
        return
      }
      if (mension.value === '') {
        Alert.error('Debe seleccionar una mención')
        return
      }
      loading.value = true
      api.post('formularios', {
        carrera: carrera.value,
        mension: mension.value,
        respuestas: store.conocimientos,
        asignacion: store.asignacion
      }).then((response: any) => {
        console.log(response.data)
        Alert.success('Muchas gracias por su evaluación')
        router.push('/')
      }).catch((error: any) => {
        console.log(error)
      }).finally(() => {
        loading.value = false
        dialog.value = false
      })
    }
    return { responder, enviar, enviarFomulario, loading, store, url, num, dialog, carrera, mension }
  }
})
</script>
