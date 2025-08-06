<template>
  <AppBar />
  <Policy />
  <Footer />
</template>

<script>
import { defineComponent } from 'vue';
import Policy from "@/components/pages/Policy.vue";
import AppBar from "@/components/AppBar.vue";
import Footer from "@/components/Footer.vue";

export default defineComponent({
  name: 'PolicyView',

  components: {
    Footer,
    AppBar,
    Policy,
  }
})
</script>