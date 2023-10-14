<template>
    <q-page class="row flex flex-center">
        <div  class="text-black">
          <h1 class="text-h5 text-bold">Bienvenido a la aplicación</h1>
        </div>
      </q-page>
</template>
<script>
export default {
  name: 'HomePage',
  mounted () {
    if (!this.$store.isLoggedIn) {
      this.$router.push('/login')
    }
  }
}
</script>
