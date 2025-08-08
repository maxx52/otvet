<template>
  <section id="description" class="section-description section-background">
    <v-container>
      <v-row>
        <v-col md="6" sm="12" cols="12" class=" text-center text-md-start text-subtitle-1 text-md-h4">
          <p class="mt-5 mb-5 ">Наш фонд — это организация, объединяющая неравнодушных людей,
            готовых оказать поддержку тем, кто оказался в сложной жизненной ситуации.
            Мы верим, что каждому человеку важно чувствовать заботу и поддержку, особенно тогда,
            когда человек не справляется самостоятельно.</p>
          <p class="mt-5 mb-5">Цель нашей организации — оказывать всестороннюю поддержку тем,
            кто столкнулся с жизненными сложностями и нуждается в особенной поддержке.
            Наша главная цель заключается в создании комфортной среды, способствующей преодолению трудностей,
            улучшению условий жизни и возвращению уверенности в завтрашнем дне.</p>
          <p class="mt-5 mb-5">Мы приглашаем вас присоединиться и стать частью нашего сообщества,
            где можно получить поддержку на своём пути к восстановлению и повышению качества повседневной жизни.</p>
        </v-col>
        <v-col md="6" sm="12" cols="12">
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
  .stub
    margin: auto
  p
    font-size: 25px
</style>