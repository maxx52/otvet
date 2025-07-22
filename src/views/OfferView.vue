<template>
  <AppBar />
  <Offer />
  <Footer />
</template>

<script>
import { defineComponent } from 'vue';
import Offer from '@/components/offer/Offer.vue';
import AppBar from "@/components/AppBar.vue";
import Footer from "@/components/Footer.vue";

export default defineComponent({
  name: 'OfferView',
  components: {
    Footer,
    AppBar,
    Offer,
  }
})
</script>