<template>
    <section class="main-section">
      <v-container>
        <v-row>
          <v-col md="3">
            <p class="text-center slogan">Есть вопрос? Есть ответ!</p>
          </v-col>
        </v-row>
      </v-container>
      <v-container>
        <v-row>
          <v-col md="4">
            <p class="main-description text-center">Фонд помогает конкретным людям, у которых есть
              свои радости, истории и характер</p>
            <v-btn class="align-center text-white ml-auto mr-auto d-block mt-5 support_btn">Поддержать</v-btn>
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
@import "src/settings"
.main-section
  height: 100vh
  background-image: url("../assets/main.webp")
  background-repeat: no-repeat
  background-size: cover
  .slogan
    margin-top: 10%
    position: absolute
    font-size: 35px
    font-weight: bold
    color: $accent
  .main-description
    margin-top: 100%
    font-size: 20px
</style>