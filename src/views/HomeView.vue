<template>
  <AppBar />
  <SectionMain />
  <SectionDescription />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import AppBar from "@/components/AppBar.vue";
import SectionMain from "@/components/SectionMain.vue";
import SectionDescription from "@/components/SectionDescription.vue";

export default defineComponent({
  name: 'HomeView',

  components: {
    SectionDescription,
    SectionMain,
    AppBar,
  },
});
</script>
