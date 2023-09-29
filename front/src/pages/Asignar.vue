<template>
    <q-page class="q-pa-xs">
      <div class="row">
        <div class="col-12">
          <q-table title="Lista Asignacion" :loading="loading" :rows-per-page-options="[0]" :columns="asignaColumns" :rows="docentematerias" flat bordered dense :filter="asignaFiltar">
            <template v-slot:header-cell="props">
              <q-th :props="props" class="bg-primary text-white text-center">
                {{ props.col.label }}
              </q-th>
            </template>
            <template v-slot:top-right>
              <q-btn label="Asignar" color="primary" no-caps icon="add_circle_outline" @click="asignaCreate" dense />
              <q-btn flat round icon="refresh" @click="asignaciones" dense />
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
                <div class="col-md-6 col-xs-12 q-pa-xs">
                  <q-select  outlined dense v-model="materia" label="Materias"   :options="materias" use-input input-debounce="0" @filter="filterMat"  >
                    <template v-slot:no-option>
                      <q-item>
                        <q-item-section class="text-grey">
                          No results
                        </q-item-section>
                      </q-item>
                    </template>
                  </q-select>
                </div>
                <div class="col-md-6 col-xs-12  q-pa-xs">
                  <q-select  outlined dense v-model="docente" label="Docentes"   :options="docentes" use-input input-debounce="0" @filter="filterDoc"  >
                    <template v-slot:no-option>
                      <q-item>
                        <q-item-section class="text-grey">
                          No results
                        </q-item-section>
                      </q-item>
                    </template>
                  </q-select>
                </div>
                <div class="col-md-6 col-xs-12  q-pa-xs">
                  <q-input dense outlined v-model="asigna.paralelo" label="Paralelo" required/>
                </div>
                <div class="col-md-6 col-xs-12  q-pa-xs">
                  <q-input dense outlined v-model="asigna.gestion" label="Gestion" required :rules="[val => val>1900 && val<9999 || 'ingrese gestion valida']"/>
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
  name: 'asignarPage',
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
      materia: { label: '' },
      docente: { label: '' },
      filterMateria: [],
      docentes: [],
      filterDocente: [],
      asignaFiltar: '',
      docentematerias: [],
      asignaColumns: [
        { name: 'opcion', label: 'Opcion', field: 'opcion', align: 'left', sortable: false },
        { name: 'docente', label: 'DOCENTE', field: row => row.docente.name, align: 'left', sortable: true },
        { name: 'materia', label: 'MATERIA', field: row => row.materia.name, align: 'left', sortable: true },
        { name: 'paralelo', label: 'PARALELO', field: 'paralelo', align: 'left', sortable: true },
        { name: 'gestion', label: 'GESTION', field: 'gestion', align: 'left', sortable: true }
      ]
    }
  },
  mounted () {
    // this.validar()
    this.materiasGet()
    this.docenteGet()
    this.asignaciones()
  },
  methods: {
    asignaEdit (asg) {
      this.asignaStatus = 'edit'
      this.asignaShow = true
      this.asigna = asg
      this.docente = asg.docente
      this.docente.label = this.docente.name
      this.materia = asg.materia
      this.materia.label = this.materia.name
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
      this.asignaShow = true
    },
    asignaSubmit () {
      if (this.docente.id === undefined) {
        return false
      }
      if (this.materia.id === undefined) {
        return false
      }
      this.$q.loading.show()
      this.asigna.docente_id = this.docente.id
      this.asigna.materia_id = this.materia.id
      if (this.asignaStatus === 'create') {
        this.$api.post('docentemateria', this.asigna).then(() => {
          this.asignaciones()
          this.asignaShow = false
        }).finally(() => {
          this.$q.loading.hide()
        })
      } else {
        this.$api.put('docentemateria/' + this.asigna.id, this.asigna).then((res) => {
          console.log(res.data)
          this.asignaciones()
          this.asignaShow = false
        }).finally(() => {
          this.$q.loading.hide()
        })
      }
    },
    filterMat (val, update) {
      if (val === '') {
        update(() => {
          this.materias = this.filterMateria

          // here you have access to "ref" which
          // is the Vue reference of the QSelect
        })
        return
      }

      update(() => {
        const needle = val.toLowerCase()
        this.materias = this.filterMateria.filter(v => v.label.toLowerCase().indexOf(needle) > -1)
      })
    },
    filterDoc (val, update) {
      if (val === '') {
        update(() => {
          this.docentes = this.filterDocente

          // here you have access to "ref" which
          // is the Vue reference of the QSelect
        })
        return
      }

      update(() => {
        const needle = val.toLowerCase()
        this.docentes = this.filterDocente.filter(v => v.label.toLowerCase().indexOf(needle) > -1)
      })
    },
    materiasGet () {
      this.materias = []
      this.loading = true
      this.$api.get('materia').then((response) => {
        response.data.forEach(r => {
          r.label = r.name + ' : ' + r.sigla
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
    },
    asignaciones () {
      this.loading = true
      this.$api.get('docentemateria').then((response) => {
        this.docentematerias = response.data
      }).finally(() => {
        this.loading = false
      })
    }
  }
}
</script>

<style scoped>
</style>
