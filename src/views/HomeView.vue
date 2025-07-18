<template>
  <AppBar />
  <SectionMain />
  <SectionDescription />
  <SectionJoy />
  <SectionSupport />
  <SectionReports />
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

export default defineComponent({
  name: 'HomeView',

  components: {
    SectionReports,
    SectionSupport,
    SectionJoy,
    SectionDescription,
    SectionMain,
    AppBar,
  },
});
</script>
