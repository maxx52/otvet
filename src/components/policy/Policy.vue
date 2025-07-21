<template>
  <AppBar />
  <v-container>
    <v-row>
      <v-col cols="10" offset-md="1">
        <h1 class="text-h3 mt-12 text-center">Политика в отношении обработки персональных данных</h1>
        <ol>
          <li>Общие положения</li>
          <span>Настоящая политика обработки персональных данных составлена в соответствии с
            требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных»
            (далее - Закон о персональных данных) и определяет порядок обработки персональных данных
            и меры по обеспечению безопасности персональных данных, предпринимаемые АНО
            «БЛАГОТВОРИТЕЛЬНАЯ ОРГАНИЗАЦИЯ «ОТВЕТ»
            (далее – Оператор).</span>
        </ol>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import AppBar from "@/components/AppBar.vue"

export default {
  name: "Policy",
  components: {AppBar},
}
</script>

<style scoped lang="sass">

</style>