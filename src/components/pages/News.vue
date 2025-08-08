<template>
  <AppBar />
  <h1 class="text-center mt-12 mb-12 pt-12">Наши новости</h1>
  <Footer />
</template>

<script>
import AppBar from "@/components/AppBar.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: 'News',
  components: {Footer, AppBar},
}
</script>

<style scoped lang="sass">

</style>