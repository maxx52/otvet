<template>
  <v-toolbar :elevation="8" class="bg_opacity fixed">
    <v-spacer></v-spacer>
    <v-app-bar-nav-icon @click="drawer = !drawer" class="hidden-md-and-up text-white"></v-app-bar-nav-icon>
    <router-link to="/" class="text-decoration-none">
      <v-app-bar-title
          class="text-white text-decoration-none font-weight-light text-h4 text-sm-h4 text-md-h4">АНО Ответ</v-app-bar-title>
    </router-link>
    <div v-for="button of buttons" :key="button.id" class="hidden-sm-and-down">
      <a :href="button.link" v-smooth-scroll="{ duration: 1000 }">
        <v-btn class="ml-2" variant="text">
          <span class="font-weight-medium text-white">{{ button.title }}</span>
        </v-btn>
      </a>
    </div>
    <v-icon class="mr-2" small color="white">mdi-vk</v-icon>
    <v-btn-toggle ></v-btn-toggle>
    <v-spacer></v-spacer>
  </v-toolbar>
  <v-navigation-drawer v-model="drawer" temporary>

  </v-navigation-drawer>
</template>

<script>
export default {
  data: () => ({
    drawer: false,
    buttons: [
      { title: 'Как мы помогаем', link: '#help', id: 1 },
      { title: 'Документы', link: '#docs', id: 2 },
      { title: 'Отчёты', link: '#reports', id: 3 },
      { title: 'Подопечные', link: '#wards', id: 4 }
    ]
  })
}
</script>

<style lang="sass" scoped>
.bg_opacity
  background: rgba(42, 48, 111, .5)

.fixed
  position: fixed
  z-index: 1000
</style>