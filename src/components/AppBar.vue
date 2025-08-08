<template>
  <v-toolbar :elevation="8" class="bg_opacity position-fixed">
    <v-spacer></v-spacer>
    <v-app-bar-nav-icon @click="drawer = !drawer" class="hidden-md-and-up text-white"></v-app-bar-nav-icon>
    <v-img src="../assets/logo_only.png" width="50" height="50" class="flex-0-0 mr-3"></v-img>
    <router-link to="/" class="text-decoration-none">
      <v-app-bar-title
          class="text-white text-decoration-none font-weight-light text-h4 text-sm-h4 text-md-h4">АНО Ответ</v-app-bar-title>
    </router-link>
    <div v-for="button of buttons" :key="button.id" class="hidden-sm-and-down">
      <router-link :to="button.link" v-smooth-scroll="{ duration: 1000 }">
        <v-btn class="ml-2 btn_appbar" variant="text" v-ripple="{class: 'ripple-color'}">
          <span class="font-weight-medium text-white">{{ button.title }}</span>
        </v-btn>
      </router-link>
    </div>
    <a href="https://vk.com/anootvet.vopros" target="_blank">
      <v-btn>
        <v-icon size="30" class="mr-2 vk-icon">mdi-vk</v-icon>
      </v-btn>
    </a>
    <v-btn-toggle ></v-btn-toggle>
    <v-spacer></v-spacer>
  </v-toolbar>
  <v-navigation-drawer v-model="drawer" temporary>
    <div v-for="button of buttons" :key="button.id">
      <router-link :to="button.link" v-smooth-scroll="{ duration: 1000 }">
        <v-btn class="ml-2 btn_appbar" variant="text" v-ripple="{class: 'ripple-color'}">
          <span class="font-weight-medium warning">{{ button.title }}</span>
        </v-btn>
      </router-link>
    </div>
  </v-navigation-drawer>
</template>

<script>
export default {
  data: () => ({
    drawer: false,
    buttons: [
      { title: 'Главная', link: '/', id: 0 },
      { title: 'Как мы помогаем', link: 'help', id: 1 },
      { title: 'Документы', link: 'docs', id: 2 },
      { title: 'Отчёты', link: 'reports', id: 3 },
      { title: 'Подопечные', link: 'wards', id: 4 }
    ]
  })
}
</script>

<style lang="sass" scoped>
@import "src/settings"
.bg_opacity
  background-color: rgba(darken($warning, .5), .7)
  z-index: 1000

.vk-icon
  color: white
</style>