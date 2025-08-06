<template>
  <AppBar />
  <h1 class="text-center text-h2 mt-12 mb-12 pt-12 pb-12 warning font-weight-bold">Документы</h1>
  <Footer />
</template>

<script>
import AppBar from "@/components/AppBar.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: "Docs",
  components: {Footer, AppBar},
}
</script>

<style scoped lang="sass">

</style>