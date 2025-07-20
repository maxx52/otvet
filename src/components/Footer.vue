<template>
  <footer class="warning-bg">
    <v-container>
      <v-row>
        <v-col md="6">
          <v-list class="warning-bg text-white pa-0 mt-5" v-for="req in requisites">
            <v-list-item min-height="0">
              <span>{{ req.text }}</span>
            </v-list-item>
          </v-list>
        </v-col>
        <v-col md="6">
          <v-list class="warning-bg text-white pa-0 mt-5" v-for="m in menu">
            <v-list-item class="pa-0" min-height="0">
              <a :href="m.link" class="text-white text-decoration-none pa-0">{{ m.text }}</a>
            </v-list-item>
          </v-list>
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
      {text: '&copy; 2025. 0+'},
      {text: 'АНО Ответ'},
      {text: 'ИНН'},
      {text: 'КПП'},
      {text: 'ОГРН'},
      {text: 'БИК'},
      {text: 'КС'},
      {text: 'Р/С'},
      {text: 'Банк'},
    ],
    menu: [
      {text: 'Подопечным', link: '/'},
      {text: 'Политика конфиденциальности', link: '/'},
      {text: 'Оферта о благотворительном пожертвовании', link: '/'},
      {text: 'СМС-пожертвование', link: '/'},
    ]
  })
}
</script>

<style scoped lang="sass">

</style>