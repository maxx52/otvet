<template>
  <AppBar />
  <SectionMain />
  <SectionDescription />
  <SectionJoy />
  <SectionSupport />
  <SectionReports />
  <SectionSocial />
  <Footer />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import AppBar from "@/components/AppBar.vue";
import SectionMain from "@/components/SectionMain.vue";
import SectionDescription from "@/components/SectionDescription.vue";
import SectionJoy from "@/components/SectionJoy.vue";
import SectionSupport from "@/components/SectionSupport.vue";
import SectionReports from "@/components/SectionReports.vue";
import SectionSocial from "@/components/SectionSocial.vue";
import Footer from "@/components/Footer.vue";

export default defineComponent({
  name: 'HomeView',

  components: {
    Footer,
    SectionSocial,
    SectionReports,
    SectionSupport,
    SectionJoy,
    SectionDescription,
    SectionMain,
    AppBar,
  },
});
</script>
