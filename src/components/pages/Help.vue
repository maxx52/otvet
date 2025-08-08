<template>
  <AppBar />
  <section class="mt-12 mb-10" id="help_main">
    <v-container>
      <v-row>
        <v-col md="6">
          <v-img src="../../assets/child.webp" width="200" height="300" class="mt-6 justify-end ml-auto"></v-img>
        </v-col>
        <v-col md="6">
          <h1 class="accent text-h2 mt-6">Подопечным</h1>
          <p class="mt-5 mb-5 text-h5 font-weight-bold">Фонд помогает конкретным людям, у которых есть свои радости, истории и характер</p>
          <v-btn class="support_btn text-white">Обратиться</v-btn>
        </v-col>
      </v-row>
    </v-container>
  </section>
  <section class="mt-12 mb-5" id="help_description">
    <v-container>
      <v-row>
        <v-col md="8" offset="2">
          <h2 class="text-center text-h5">Наш фонд оказывает помощь в приобретении инвалидных колясок, электроприставок и комплектующих к инвалидным коляскам.</h2>
        </v-col>
        <v-col>
          <v-card>
            <v-icon>mdi-account-check</v-icon>
            <v-card-text>

            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </section>
  <Footer />
</template>

<script>
import AppBar from "@/components/AppBar.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: 'Help',
  components: {Footer, AppBar},
}
</script>

<style scoped lang="sass">

</style>