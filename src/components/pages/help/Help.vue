<template>
  <AppBar />
  <section class="mt-12 mb-10" id="help_main">
    <v-container>
      <v-row>
        <v-col md="6">
          <v-img src="../../../assets/child.webp" width="200" height="300" class="mt-6 justify-end ml-auto"></v-img>
        </v-col>
        <v-col md="6">
          <h1 class="accent text-h2 mt-6">Подопечным</h1>
          <p class="mt-5 mb-5 text-h5 font-weight-bold">Фонд помогает конкретным людям, у которых есть свои радости, истории и характер</p>
          <v-btn class="support_btn text-white">Обратиться</v-btn>
        </v-col>
      </v-row>
    </v-container>
  </section>
  <section class="mt-12 mb-5" id="help_description">
    <v-container>
      <v-row no-gutters>
        <v-col md="12">
          <h2 class="text-center text-h4 font-weight-bold mb-5">Анкета для помощи:</h2>
        </v-col>
        <v-col md="12">
          <v-form ref="form" class="mt-5" v-model="form" @submit.prevent="onSubmit">
            <v-text-field
                label="Ф.И.О."
                :rules="[required]"
                :readonly="loading"
                clearable
                maxlenght="30"
                counter
            ></v-text-field>
            <p>Ваш статус для подопечного:</p>
            <v-radio-group :rules="[required]" :readonly="loading">
              <v-radio label="Я сам" color="primary"></v-radio>
              <v-radio label="Родитель" color="primary"></v-radio>
              <v-radio label="Опекун" color="primary"></v-radio>
              <v-radio label="Родственник" color="primary"></v-radio>
              <v-radio label="Другой вариант" color="primary"></v-radio>
            </v-radio-group>
            <v-text-field
                label="ФИО подопечного:"
                :rules="[required]"
                :readonly="loading"
                clearable
                maxlenght="30"
                counter
            ></v-text-field>
            <v-text-field label="Дата рождения подопечного:" :rules="[required]" :readonly="loading" clearable maxlenght="10" counter hint="дд.мм.гггг"></v-text-field>
            <v-text-field label="E-mail:" type="email" :rules="[required]" hint="example@email.com" maxlenght="30" counter></v-text-field>
            <v-text-field label="Ваш номер телефона:" :rules="[required]" :readonly="loading" clearable maxlenght="12" counter hint="В формате: +79991234567"></v-text-field>
            <v-text-field label="Ваш город:" :rules="[required]" :readonly="loading"></v-text-field>
            <v-textarea label="Какая помощь Вам необходима?" hint="Опишите свою проблему в свободной форме" minlenght="5" maxlenght="1000" counter :rules="[required]" :readonly="loading"></v-textarea>
            <v-btn @click="onSubmit" type="submit" class="support_btn text-white">Отправить</v-btn>
          </v-form>
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
  name: 'Help',
  components: {Footer, AppBar},
  data: () => ({
    form: false,
    loading: false,
  }),
  methods: {
    onSubmit () {
      if (!this.form) return
      this.loading = true
      setTimeout(() => (this.loading = false), 2000)
    },
    required (v) {
      return !!v || 'Это обязательно необходимо заполнить!'
    },
  }
}
</script>

<style scoped lang="sass">

</style>