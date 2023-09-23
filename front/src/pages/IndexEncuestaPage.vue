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
      <div class="pacifico">Sistema de Evaluación Docentes</div>
      <q-img src="avatar.png" width="300px" />
      <q-card style="width: 300px; margin: 0 auto; position: relative; z-index: 1;" flat bordered>
        <q-card-section class="bg-primary">
          <q-btn color="white" size="18px" text-color="primary" label="Realizar Evaluacion" no no-caps icon-right="login" />
        </q-card-section>
      </q-card>
      <div class="bg-primary flex flex-center text-white" style="position: absolute; bottom: 0; width: 100%; height: 50px;">
        <div style="line-height: 1.5; font-size: 12px;">
          @2023 Facultad de Ingenieria de Sistemas e Informatica <br>
          Todos los derechos reservados <br>
<!--          <a href="https://www.unmsm.edu.pe/" target="_blank">UNMSM</a>-->
        </div>
      </div>
    </div>
  </q-page>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'IndexEncuestaPage',
  setup () {
    // const meta = ref<Meta>({
    //   totalCount: 1200
    // })
    // return { todos, meta }
  }
})
</script>
