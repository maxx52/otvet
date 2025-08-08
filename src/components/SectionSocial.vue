<template>
  <section class="section mt-10" id="social">
    <v-container>
      <section>
        <h2 class="text-center text-h4 text-sm-h2 warning font-weight-bold">Мы в социальных сетях</h2>
      </section>
      <v-row>
        <v-list lines="one"
                class="align-center d-flex flex-wrap justify-space-between justify-center mt-5 mb-5 ml-auto mr-auto">
          <v-col>
            <v-list-item>
              <a href="https://vk.com/anootvet.vopros" target="_blank">
                <v-icon size="50" class="accent text-center justify-center">mdi-vk</v-icon>
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
}
</script>

<style scoped lang="sass">

</style>