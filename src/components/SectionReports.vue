<template>
  <section id="reports" class="section-background">
    <v-container>
      <section class="mt-10 mb-10">
        <h2 class="text-center text-h2 mt-8 mb-5 font-weight-bold warning">Отчеты и документы</h2>
        <p class="text-center text-h4">Мы ответственно следим за документацией, и готовы показать всю отчетность</p>
      </section>
      <v-row class="mt-10 mb-10">
        <v-col md="4" v-for="item of items" :key="item.id">
          <router-link :to="item.link" class="text-decoration-none warning">
            <v-icon size="120" class="accent d-block ml-auto mr-auto">{{item.icon}}</v-icon>
            <p class="text-center d-block mt-5 text-h5">{{item.text}}</p>
          </router-link>
        </v-col>
      </v-row>
    </v-container>
  </section>
</template>

<script>
export default {
  name: 'SectionReports',
  data: () => ({
    items: [
      { icon: 'mdi-finance', text: 'Финансовые отчеты', link: '/reports', id: 'reports' },
      { icon: 'mdi-chart-arc', text: 'Годовой отчёт', link: '/reports', id: 'year_reports' },
      { icon: 'mdi-file-document-outline', text: 'Учредительные документы', link: '/docs', id: 'docs' },
    ]
  })
}
</script>

<style scoped lang="sass">

</style>