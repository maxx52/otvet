<template>
  <AppBar />
  <h1 class="text-center text-h3 mb-12 mt-12 pt-12">Наши подопечные</h1>
  <Footer />
</template>

<script>
import AppBar from "@/components/AppBar.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: 'Wards',
  components: {Footer, AppBar},
}
</script>

<style scoped lang="sass">

</style>