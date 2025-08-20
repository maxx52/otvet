<template>
  <section class="section mt-10" id="social">
    <v-container>
      <section>
        <h2 class="text-center text-h4 text-sm-h2 warning font-weight-bold">Мы в социальных сетях</h2>
      </section>
      <v-row>
        <v-list class="align-center mt-5 mb-5 ml-auto mr-auto">
          <v-col v-for="(item, i) in items" :key="i">
            <v-list-item class="d-inline-block">
              <a :href="item.link" target="_blank">
                <v-icon size="50" class="warning text-center justify-center">{{item.text}}</v-icon>
              </a>
            </v-list-item>
          </v-col>
          <v-col>
            <v-list-item>
              <a href="https://t.me/ANOOTVET" target="_blank">
                <v-img src="../assets/telegram.png"></v-img>
              </a>
            </v-list-item>
          </v-col>
        </v-list>
      </v-row>
    </v-container>
  </section>
</template>

<script>
export default {
  name: 'SectionSocial',
  data: () => ({
    items: [
      {text: 'mdi-vk', link: 'https://vk.com/anootvet'},
      {text: 'mdi-whatsapp', link: 'https://wa.me/+79230033874?text=Здравствуйте. Мне необходима помощь...'}
    ]
  })
}
</script>

<style scoped lang="sass">

</style>