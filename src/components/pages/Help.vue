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
      <v-row no-gutters>
        <v-col md="12">
          <h2 class="text-center text-h5">Наш фонд оказывает помощь в приобретении инвалидных колясок, электроприставок и комплектующих к инвалидным коляскам.</h2>
        </v-col>
        <v-col cols="3" v-for="(card, i) of cards" :key="i" class="d-flex mt-5">
          <v-col md="7">
            <v-card width="150" height="220" elevation="8">
              <v-icon class=" ml-auto mr-auto d-block accent" size="100">{{card.icon}}</v-icon>
              <v-card-text class="text-center text-subtitle-1">{{card.text}}</v-card-text>
            </v-card>
          </v-col>
          <v-col md="3">
            <v-icon class="mt-auto mb-auto warning justify-end" size="80">{{card.icon_arr}}</v-icon>
          </v-col>
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
  data: () => ({
    cards: [
      {icon: 'mdi-account-check', text: 'Заполните анкету', icon_arr: 'mdi-ray-start-arrow'},
      {icon: 'mdi-text-box-plus', text: 'Подпишите документы', icon_arr: 'mdi-ray-start-arrow'},
      {icon: 'mdi-cash-multiple', text: 'Мы открываем сбор и собираем нужную сумму', icon_arr: 'mdi-ray-start-arrow'},
      {icon: 'mdi-truck-delivery-outline', text: 'Оплачиваем счет и привозим к вам домой', icon_arr: ''},
    ]
  })
}
</script>

<style scoped lang="sass">

</style>