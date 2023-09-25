<template>
    <q-page class="q-pa-xs">
      <div class="row">
        <div class="col-12">
          <q-table title="Lista de Materias" :loading="loading" :rows-per-page-options="[0]" :columns="materiaColumns" :rows="materias" flat bordered dense :filter="materiaFiltar">
            <template v-slot:header-cell="props">
              <q-th :props="props" class="bg-primary text-white text-center">
                {{ props.col.label }}
              </q-th>
            </template>
            <template v-slot:top-right>
              <q-btn label="Registrar Materia" color="primary" no-caps icon="add_circle_outline" @click="materiaCreate" dense />
              <q-btn flat round icon="refresh" @click="materiasGet" dense />
              <q-input outlined dense v-model="materiaFiltar" label="Buscar" class="q-ml-md" clearable>
                <template v-slot:append>
                  <q-icon name="search" />
                </template>
              </q-input>
            </template>
            <template v-slot:body-cell-opcion="props">
              <q-td :props="props" auto-width>
                <q-btn-dropdown round dense color="primary" dropdown-icon="more_vert" label="Acciones" no-caps>
                  <q-list>
                    <q-item clickable v-close-popup>
                      <q-item-section @click="materiaEdit(props.row)">Editar</q-item-section>
                    </q-item>
                    <q-item clickable v-close-popup>
                      <q-item-section @click="materiaDelete(props.row)">Eliminar</q-item-section>
                    </q-item>
                  </q-list>
                </q-btn-dropdown>
              </q-td>
            </template>
          </q-table>
        </div>
      </div>
      <q-dialog v-model="materiaShow">
        <q-card>
          <q-card-section class="row items-center q-pb-none">
            <div class="text-h6">{{ materiaStatus== 'create' ? 'Registrar Materia' : 'Editar Materia' }}</div>
            <q-space />
            <q-btn flat icon="close" v-close-popup />
          </q-card-section>
          <q-card-section>
            <q-form @submit.prevent="materiaSubmit" ref="myForm">
              <div class="row">
                <div class="col-12 col-md-12">
                  <q-input v-if="materiaStatus == 'edit' || materiaStatus == 'create'" outlined dense v-model="materia.name" label="Nombre" hint="" :rules="[val => val.length > 0 || 'El nombre es requerido']" />
                </div>
                <div class="col-12 col-md-12">
                    <q-input v-if="materiaStatus == 'edit' || materiaStatus == 'create'" outlined dense v-model="materia.sigla" label="Sigla" hint="" :rules="[val => val.length > 0 || 'El nombre es requerido']" />
                  </div>
                <div class="col-12 col-md-12 text-center q-pt-xs">
                  <q-btn :loading="loading" color="primary" label="Guardar" type="submit" no-caps icon="save" class="full-width"  />
                </div>
              </div>
            </q-form>
          </q-card-section>
        </q-card>
      </q-dialog>
    </q-page>
  </template>
<script>
import { globalStore } from '../stores/globalStore'

export default {
  name: 'materiaPage',
  data () {
    return {
      store: globalStore(),
      materiaStatus: 'create',
      loading: false,
      materiaShow: false,
      materias: [],
      materia: {
        name: '',
        sigla: ''
      },
      materiaFiltar: '',
      materiaColumns: [
        { name: 'opcion', label: 'Opcion', field: 'opcion', align: 'left', sortable: false },
        { name: 'name', label: 'Nombre', field: 'name', align: 'left', sortable: true },
        { name: 'sigla', label: 'Sigla', field: 'sigla', align: 'left', sortable: true }
      ]
    }
  },
  mounted () {
    // this.validar()
    this.materiasGet()
  },
  methods: {
    materiaEdit (materia) {
      this.materiaStatus = 'edit'
      this.materiaShow = true
      this.materia = materia
    },
    materiaDelete (materia) {
      this.$q.dialog({
        title: 'Eliminar Materia',
        message: '¿Estas seguro de eliminar esta Materia?',
        cancel: true,
        persistent: true
      }).onOk(() => {
        this.loading = true
        this.$api.delete(`materia/${materia.id}`)
          .then(() => {
            this.materiasGet()
            this.$q.notify({
              color: 'green-4',
              textColor: 'white',
              icon: 'cloud_done',
              position: 'top',
              message: 'Materia eliminada correctamente'
            })
          })
          .catch(err => {
            this.loading = false
            this.$q.notify({
              color: 'red-4',
              textColor: 'white',
              icon: 'cloud_done',
              position: 'top',
              message: err.response.data.message
            })
          })
      })
    },

    materiaCreate () {
      this.materiaStatus = 'create'
      this.materia = {
        name: '',
        sigla: ''
      }
      this.materiaShow = true
    },
    materiaSubmit () {
      this.$q.loading.show()
      if (this.materiaStatus === 'create') {
        this.$api.post('materia', this.materia).then(() => {
          this.materiasGet()
          this.materiaShow = false
        }).finally(() => {
          this.$q.loading.hide()
        })
      } else {
        this.$api.put('materia/' + this.materia.id, this.materia).then((res) => {
          console.log(res.data)
          this.materiasGet()
          this.materiaShow = false
        }).finally(() => {
          this.$q.loading.hide()
        })
      }
    },
    materiasGet () {
      this.materias = []
      this.loading = true
      this.$api.get('materia').then((response) => {
        this.materias = response.data
      }).finally(() => {
        this.loading = false
      })
    }
  }
}
</script>

<style scoped>
</style>
