<template>
  <section id="reports" class="section-background">
    <v-container>
      <section class="mt-10 mb-10">
        <h2 class="text-center text-h2 mt-8 mb-5 font-weight-bold warning-color">Отчеты и документы</h2>
        <p class="text-center text-h4">Мы ответственно следим за документацией, и готовы показать всю отчетность</p>
      </section>
      <v-row class="mt-10 mb-10">
        <v-col md="4">
          <v-icon size="120" class="warning-color d-block ml-auto mr-auto">mdi-finance</v-icon>
          <p class="text-center d-block mt-5 text-h5">Финансовые отчеты</p>
        </v-col>
        <v-col md="4">
          <v-icon size="120" class="warning-color ml-auto mr-auto d-block">mdi-chart-arc</v-icon>
          <p class="text-center mt-3 text-h5 d-block mt-5">Годовой отчёт</p>
        </v-col>
        <v-col md="4">
          <v-icon size="120" class="warning-color ml-auto mr-auto d-block">mdi-file-document-outline</v-icon>
          <p class="text-center mt-3 text-h5 d-block mt-5 text-center">Учредительные документы</p>
        </v-col>
      </v-row>
    </v-container>
  </section>
</template>

<script>
export default {
  name: 'SectionReports',
}
</script>

<style scoped lang="sass">

</style>