<template>
    <section class="main-section">
      <v-container>
        <v-row>
          <v-col md="4">
            <p class="main-description text-center">Фонд помогает конкретным людям, у которых есть свои радости, истории и характер</p>
          </v-col>
        </v-row>
      </v-container>
    </section>
</template>

<script>
export default {
  name: 'SectionMain',
}
</script>

<style scoped lang="sass">
.main-section
  height: 100vh
  background-image: url("../assets/main.webp")
  background-repeat: no-repeat
  background-size: 100% 100%
  .main-description
    margin-top: 100%
    font-size: 20px
</style>