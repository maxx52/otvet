<template>
  <footer class="warning-bg">
    <v-container>
      <v-row>
        <v-col md="6">
          <v-list class="warning-bg text-white pa-0 mt-5 mb-5" v-for="req in requisites">
            <v-list-item class="pa-0" min-height="0">
              <span>{{ req.text }}</span>
            </v-list-item>
          </v-list>
        </v-col>
        <v-col md="6">
          <v-list class="warning-bg text-white pa-0 mt-5" v-for="m in menu">
            <v-list-item class="pa-0" min-height="0">
              <router-link :to="m.link" class="text-white text-decoration-none pa-0">{{ m.text }}</router-link>
            </v-list-item>
          </v-list>
          <v-btn class="text-white mt-5 support_btn">Поддержать</v-btn>
        </v-col>
      </v-row>
    </v-container>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  data: () => ({
    requisites: [
      {text: '\u00A9 2025. 0+'},
      {text: 'АНО Ответ'},
      {text: 'ИНН 4214041570'},
      {text: 'КПП 421401001'},
      {text: 'ОГРН 1214200006162'},
      {text: 'БИК 040173604'},
      {text: 'К/С 30101810200000000604'},
      {text: 'Р/С 40703810502740000094'},
      {text: 'Банк: \"АЛТАЙСКОЕ ОТДЕЛЕНИЕ N8644 ПАО СБЕРБАНК\", адрес: г. Барнаул, ул. Попова, д. 73а'},
    ],
    menu: [
      {text: 'Подопечным', link: '/'},
      {text: 'Политика конфиденциальности', link: '/policy'},
      {text: 'Оферта о благотворительном пожертвовании', link: '/offer'},
      {text: 'СМС-пожертвование', link: '/'},
    ]
  })
}
</script>

<style scoped lang="sass">

</style>