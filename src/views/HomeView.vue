<template>
  <AppBar />
  <SectionMain />
  <SectionDescription />
  <SectionJoy />
  <SectionSupport />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import AppBar from "@/components/AppBar.vue";
import SectionMain from "@/components/SectionMain.vue";
import SectionDescription from "@/components/SectionDescription.vue";
import SectionJoy from "@/components/SectionJoy.vue";
import SectionSupport from "@/components/SectionSupport.vue";

export default defineComponent({
  name: 'HomeView',

  components: {
    SectionSupport,
    SectionJoy,
    SectionDescription,
    SectionMain,
    AppBar,
  },
});
</script>
