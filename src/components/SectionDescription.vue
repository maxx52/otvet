<template>
  <section id="description" class="section-description">
    <v-container>
      <v-row>
        <v-col md="6">
          <p class="mt-5 mb-5">Ответ — благотворительная организация, поддерживающая людей с ограниченными возможностями,
            делая их путь к интеграции в общество более комфортным и открытым.</p>
          <p class="mt-5 mb-5">Наша цель — создать пространство, где каждый сможет найти опору и возможность двигаться вперед.</p>
          <p class="mt-5 mb-5">Мы приглашаем всех присоединиться к нам и стать частью нашего сообщества, где можно получить поддержку
            на своем пути к восстановлению и повышению качества повседневной жизни.</p>
        </v-col>
        <v-col md="6">
          <v-img src="../assets/logo.png" class="stub"></v-img>
        </v-col>
      </v-row>
    </v-container>
  </section>
</template>

<script>
export default {
  name: 'SectionDescription',
}
</script>

<style scoped lang="sass">
.section-description
  background-color: rgb(249, 249, 249)
  .stub
    margin: auto
  p
    font-size: 25px
</style>