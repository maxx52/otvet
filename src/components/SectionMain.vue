<template>
    <section class="main-section d-flex">
      <v-container class="align-center d-flex flex-0-0">
        <v-row>
          <v-col md="5">
            <p class="text-center mb-5 font-weight-bold text-h4">Есть вопрос? Есть ответ!</p>
            <p class="text-center mt-5 text-h5">Фонд помогает конкретным людям, у которых есть
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
  //.slogan
  //  margin-top: 10%
  //  position: absolute
  //  font-size: 35px
  //  font-weight: bold
  //  color: $accent
  //.main-description
  //  margin-top: 100%
  //  font-size: 20px
</style>