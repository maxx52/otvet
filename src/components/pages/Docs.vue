<template>
  <AppBar />
  <h1 class="text-center text-h2 mt-12 mb-12 pt-12 pb-12 warning font-weight-bold">Документы</h1>
  <section class="mt-5 mb-5">
    <v-container>
      <v-row>
        <v-col>
          <v-carousel hide-delimiters hide-delimiter-background>
            <v-carousel-item v-for="(item, i) of items" :key="i">
              <v-img :src="item.image" aspect-ratio="1" />
            </v-carousel-item>
          </v-carousel>
        </v-col>
      </v-row>
    </v-container>
  </section>
  <Footer />
</template>

<script>
import AppBar from "@/components/AppBar.vue";
import Footer from "@/components/Footer.vue";

export default {
  name: "Docs",
  components: {Footer, AppBar},
  data: () => ({
    items: [
      {image: require('@/assets/pdf/svid.png')},
      {image: require('@/assets/pdf/fns.png')},
      {image: require('@/assets/pdf/min_yust.png')},
      {image: require('@/assets/pdf/post.png')},
      {image: require('@/assets/pdf/uc.png')},
      {image: require('@/assets/pdf/egrul.png')},
      {image: require('@/assets/pdf/egrul_1.png')},
      {image: require('@/assets/pdf/egrul_2.png')},
      {image: require('@/assets/pdf/ustav_title.png')},
      {image: require('@/assets/pdf/ustav_1.png')},
      {image: require('@/assets/pdf/ustav_2.png')},
      {image: require('@/assets/pdf/ustav_3.png')},
      {image: require('@/assets/pdf/ustav_4.png')},
      {image: require('@/assets/pdf/ustav_5.png')},
      {image: require('@/assets/pdf/ustav_6.png')},
      {image: require('@/assets/pdf/ustav_7.png')},
      {image: require('@/assets/pdf/ustav_end.png')},
      {image: require('@/assets/pdf/ustav_last.png')},
    ]
  })
}
</script>

<style scoped lang="sass">

</style>