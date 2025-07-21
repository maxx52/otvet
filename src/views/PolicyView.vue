<template>
  <Policy />
</template>

<script>
import { defineComponent } from 'vue';
import Policy from "@/components/policy/Policy.vue";

export default defineComponent({
  name: 'PolicyView',

  components: {
    Policy,
  }
})
</script>