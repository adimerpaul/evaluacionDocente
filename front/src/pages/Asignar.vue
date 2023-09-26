<template>
    <q-page class="q-pa-xs">
      <div class="row">
        <div class="col-12">
          <q-table title="Lista Asignacion" :loading="loading" :rows-per-page-options="[0]" :columns="asignarColumns" :rows="asignas" flat bordered dense :filter="asignaFiltar">
            <template v-slot:header-cell="props">
              <q-th :props="props" class="bg-primary text-white text-center">
                {{ props.col.label }}
              </q-th>
            </template>
            <template v-slot:top-right>
              <q-btn label="Asignar" color="primary" no-caps icon="add_circle_outline" @click="asignaCreate" dense />
              <q-btn flat round icon="refresh" @click="asignaGet" dense />
              <q-input outlined dense v-model="asignaFiltar" label="Buscar" class="q-ml-md" clearable>
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
                      <q-item-section @click="asignaEdit(props.row)">Editar</q-item-section>
                    </q-item>
                    <q-item clickable v-close-popup>
                      <q-item-section @click="asignaDelete(props.row)">Eliminar</q-item-section>
                    </q-item>
                  </q-list>
                </q-btn-dropdown>
              </q-td>
            </template>
          </q-table>
        </div>
      </div>
      <q-dialog v-model="asignaShow">
        <q-card>
          <q-card-section class="row items-center q-pb-none">
            <div class="text-h6">{{ asignaStatus== 'create' ? 'Registrar ' : 'Editar ' }}</div>
            <q-space />
            <q-btn flat icon="close" v-close-popup />
          </q-card-section>
          <q-card-section>
            <q-form @submit.prevent="asignaSubmit" ref="myForm">
              <div class="row">
                <div class="col-12 col-md-12">
                  <q-select  outlined dense v-model="materia" label="Materias"  required :options="materias"  />
                </div>
                <div class="col-12 col-md-12">
                  <q-input  outlined dense v-model="materia.name" label="Nombre" hint="" :rules="[val => val.length > 0 || 'El nombre es requerido']" />
                </div>
                <div class="col-12 col-md-12">
                    <q-input  outlined dense v-model="materia.sigla" label="Sigla" hint="" :rules="[val => val.length > 0 || 'El nombre es requerido']" />
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
import moment from 'moment'

export default {
  name: 'materiaPage',
  data () {
    return {
      store: globalStore(),
      asignaStatus: 'create',
      paralelos: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N'],
      gestion: moment().format('YYYY'),
      loading: false,
      asignaShow: false,
      asignas: [],
      asigna: {},
      materias: [],
      filterMateria: [],
      docentes: [],
      filterDocente: [],
      asignaFiltar: '',
      asignaColumns: [
        { name: 'opcion', label: 'Opcion', field: 'opcion', align: 'left', sortable: false },
        { name: 'name', label: 'Nombre', field: 'name', align: 'left', sortable: true },
        { name: 'sigla', label: 'Sigla', field: 'sigla', align: 'left', sortable: true }
      ]
    }
  },
  mounted () {
    // this.validar()
    this.materiasGet()
    this.docenteGet()
  },
  methods: {
    materiaEdit (materia) {
      this.materiaStatus = 'edit'
      this.materiaShow = true
      this.materia = materia
    },
    materiaDelete (asigna) {
      this.$q.dialog({
        title: 'Eliminar Asignacion',
        message: '¿Estas seguro de eliminar esta Asignacion?',
        cancel: true,
        persistent: true
      }).onOk(() => {
        this.loading = true
        this.$api.delete(`docentemateria/${asigna.id}`)
          .then(() => {
            this.asignaGet()
            this.$q.notify({
              color: 'green-4',
              textColor: 'white',
              icon: 'cloud_done',
              position: 'top',
              message: 'Asignacion eliminada correctamente'
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

    asignaCreate () {
      this.asignaStatus = 'create'
      this.asigna = {
        gestion: moment().format('YYYY'),
        paralelo: 'A',
        materia_id: null,
        docente_id: null
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
        response.data.forEach(r => {
          r.label = r.name
          this.materias.push(r)
        })
        this.filterMateria = this.materias
      }).finally(() => {
        this.loading = false
      })
    },
    docenteGet () {
      this.docentes = []
      this.loading = true
      this.$api.get('docente').then((response) => {
        response.data.forEach(r => {
          r.label = r.name
          this.docentes.push(r)
        })
        this.filterDocente = this.docentes
      }).finally(() => {
        this.loading = false
      })
    }
  }
}
</script>

<style scoped>
</style>
