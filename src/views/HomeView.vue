<template>
  <AppBar />
  <SectionMain />
</template>

<script>
import { defineComponent } from 'vue';

// Components
import Home from '../components/Home.vue';
import AppBar from "@/components/AppBar.vue";
import SectionMain from "@/components/SectionMain.vue";

export default defineComponent({
  name: 'HomeView',

  components: {
    SectionMain,
    AppBar,
    HelloWorld: Home,
  },
});
</script>
