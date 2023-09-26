<template>
    <q-page class="q-pa-xs">
      <div class="row">
        <div class="col-12">
          <q-table title="Lista de Docentes" :loading="loading" :rows-per-page-options="[0]" :columns="docenteColumns" :rows="docentes" flat bordered dense :filter="docenteFiltar">
            <template v-slot:header-cell="props">
              <q-th :props="props" class="bg-primary text-white text-center">
                {{ props.col.label }}
              </q-th>
            </template>
            <template v-slot:top-right>
              <q-btn label="Registrar Docente" color="primary" no-caps icon="add_circle_outline" @click="docenteCreate" dense />
              <q-btn flat round icon="refresh" @click="docentesGet" dense />
              <q-input outlined dense v-model="docenteFiltar" label="Buscar" class="q-ml-md" clearable>
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
                      <q-item-section @click="docenteEdit(props.row)">Editar</q-item-section>
                    </q-item>
                    <q-item clickable v-close-popup>
                      <q-item-section @click="docenteEditPhoto(props.row)">Editar Foto</q-item-section>
                    </q-item>
                    <q-item clickable v-close-popup>
                      <q-item-section @click="docenteDelete(props.row)">Eliminar</q-item-section>
                    </q-item>
                  </q-list>
                </q-btn-dropdown>
              </q-td>
            </template>
            <template v-slot:body-cell-photo="props">
              <q-td :props="props" auto-width @click="showImage(`${$url}../images/${props.row.photo}`)">
                <div :style="`width: 50px; height: 50px;`">
                  <q-img :src="`${$url}../images/${props.row.photo}`" style="border-radius: 50%" :style="`width: 50px; height: 50px;`" />
                </div>
              </q-td>
            </template>
          </q-table>
        </div>
      </div>
      <q-dialog v-model="docenteShow">
        <q-card>
          <q-card-section class="row items-center q-pb-none">
            <div class="text-h6">{{ docenteStatus== 'create' ? 'Registrar Docente' : 'Editar Docente' }}</div>
            <q-space />
            <q-btn flat icon="close" v-close-popup />
          </q-card-section>
          <q-card-section>
            <q-form @submit.prevent="docenteSubmit" ref="myForm">
              <div class="row">
                <div class="col-12 col-md-12">
                  <q-input v-if="docenteStatus == 'edit' || docenteStatus == 'create'" outlined dense v-model="docente.name" label="Nombre" hint="" :rules="[val => val.length > 0 || 'El nombre es requerido']" />
                </div>
                <div class="col-12 col-md-12">
                    <q-input v-if="docenteStatus == 'edit' || docenteStatus == 'create'" outlined dense v-model="docente.email" label="Email" hint=""  />
                  </div>
                <div class="col-12 col-md-12 flex flex-center">
                  <q-uploader
                    v-if="docenteStatus == 'create' || docenteStatus == 'editPhoto'"
                    accept=".jpg, .png"
                    multiple
                    auto-upload
                    label="Arrastra una imagen o haz click para seleccionar"
                    @uploading="uploadingFn"
                    ref="uploader"
                    @failed="errorFn"
                    max-files="1"
                    auto-expand
                    :url="docenteStatus=='create'?`${$url}upload/create/1`:`${$url}upload/editDocente/${docente.id}`"
                    stack-label="upload image"
                  />
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
  name: 'docentesPage',
  data () {
    return {
      store: globalStore(),
      docenteStatus: 'create',
      loading: false,
      docenteShow: false,
      docentes: [],
      docente: {
        name: '',
        email: '',
        photo: ''
      },
      users: [],
      docenteFiltar: '',
      docenteColumns: [
        { name: 'opcion', label: 'Opcion', field: 'opcion', align: 'left', sortable: false },
        { name: 'name', label: 'Nombre', field: 'name', align: 'left', sortable: true },
        { name: 'email', label: 'Email', field: 'email', align: 'left', sortable: true },
        { name: 'photo', label: 'Foto', field: 'photo', align: 'left', sortable: true }
      ]
    }
  },
  mounted () {
    // this.validar()
    this.docentesGet()
  },
  methods: {
    docenteEditPhoto (docente) {
      this.docenteStatus = 'editPhoto'
      this.docenteShow = true
      this.docente = docente
    },
    docenteEdit (docente) {
      this.docenteStatus = 'edit'
      this.docenteShow = true
      this.docente = docente
    },
    docenteDelete (docente) {
      this.$q.dialog({
        title: 'Eliminar Docente',
        message: '¿Estas seguro de eliminar esta Docente?',
        cancel: true,
        persistent: true
      }).onOk(() => {
        this.loading = true
        this.$api.delete(`docente/${docente.id}`)
          .then(() => {
            this.docentesGet()
            this.$q.notify({
              color: 'green-4',
              textColor: 'white',
              icon: 'cloud_done',
              position: 'top',
              message: 'Categoria eliminada correctamente'
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
    showImage (image) {
      this.$q.dialog({
        title: 'Imagen',
        html: true,
        message: `<img src="${image}" style="width: 100%; height: 100%; object-fit: contain" />`,
        cancel: true,
        persistent: false
      })
    },
    errorFn () {
    // console.log(err)
      this.$q.notify({
        color: 'red-4',
        textColor: 'white',
        icon: 'cloud_done',
        position: 'top',
        message: 'Error al subir la imagen, intente nuevamente el nombre no debe contener espacios o ñ'
      })
    },
    uploadingFn (e) {
      e.xhr.onload = () => {
        if (e.xhr.readyState === e.xhr.DONE) {
          if (e.xhr.status === 200) {
            this.docente.photo = e.xhr.response
          }
        }
      }
    },

    docenteCreate () {
      this.docenteStatus = 'create'
      this.docente = {
        name: '',
        email: '',
        imagen: ''
      }
      this.docenteShow = true
    },
    docenteSubmit () {
      this.$q.loading.show()
      if (this.docenteStatus === 'create') {
        this.$api.post('docente', this.docente).then(() => {
          this.docentesGet()
          this.docenteShow = false
        }).finally(() => {
          this.$q.loading.hide()
        })
      } else {
        this.$api.put('docente/' + this.docente.id, this.docente).then(() => {
          this.docentesGet()
          this.docenteShow = false
        }).finally(() => {
          this.$q.loading.hide()
        })
      }
    },
    docentesGet () {
      this.docentes = []
      this.loading = true
      this.$api.get('docente').then((response) => {
        this.docentes = response.data
      }).finally(() => {
        this.loading = false
      })
    }
  }
}
</script>

<style scoped>
</style>
