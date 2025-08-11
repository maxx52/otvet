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
                ref="name"
                label="Ф.И.О."
                :rules="[required]"
                :readonly="loading"
                clearable
                maxlength="30"
                counter
            ></v-text-field>
            <p>Ваш статус для подопечного:</p>
            <v-radio-group :rules="[required]" :readonly="loading" ref="status">
              <v-radio label="Я сам" color="primary" value="self"></v-radio>
              <v-radio label="Родитель" color="primary" value="parent"></v-radio>
              <v-radio label="Опекун" color="primary" value="guardian"></v-radio>
              <v-radio label="Родственник" color="primary" value="relative"></v-radio>
              <v-radio label="Другой вариант" color="primary" value="another"></v-radio>
            </v-radio-group>
            <v-text-field
                ref="ward_name"
                label="ФИО подопечного:"
                :rules="[required]"
                :readonly="loading"
                clearable
                maxlength="30"
                counter
            ></v-text-field>
            <v-text-field
                ref="ward_birthdate"
                label="Дата рождения подопечного:"
                :rules="[required]"
                :readonly="loading"
                clearable
                maxlength="10"
                counter
                hint="дд.мм.гггг"
            ></v-text-field>
            <v-text-field
                ref="email"
                label="E-mail:"
                type="email"
                :rules="[required]"
                hint="example@email.com"
                maxlength="30"
                counter
            ></v-text-field>
            <v-text-field
                ref="phone"
                label="Ваш номер телефона:"
                :rules="[required]"
                :readonly="loading"
                clearable
                maxlength="12"
                counter
                hint="В формате: +79991234567"
            ></v-text-field>
            <v-text-field
                ref="city"
                label="Ваш город:"
                :rules="[required]"
                :readonly="loading"
            ></v-text-field>
            <v-textarea
                ref="help_needed"
                label="Какая помощь Вам необходима?"
                hint="Опишите свою проблему в свободной форме"
                minlength="5"
                maxlength="1000"
                counter
                :rules="[required]"
                :readonly="loading"
            ></v-textarea>
            <v-btn @click="onSubmit" type="submit" class="support_btn text-white">Отправить</v-btn>
          </v-form>
        </v-col>
      </v-row>
    </v-container>
  </section>
  <Footer />
</template>

<script>
import axios from 'axios';
import Footer from "@/components/Footer.vue";
import AppBar from "@/components/AppBar.vue";

export default {
  name: 'Help',
  components: {Footer, AppBar},
  data: () => ({
    form: false,
    loading: false,
    csrfToken: '', // CSRF-токен
  }),
  methods: {
    onSubmit () {
      if (!this.form) return
      this.loading = true

      // Собираем данные из формы
      const formData = new FormData();
      formData.append('name', this.$refs.form.$refs.name.value);
      formData.append('status', this.$refs.form.$refs.status.value);
      formData.append('ward_name', this.$refs.form.$refs.ward_name.value);
      formData.append('ward_birthdate', this.$refs.form.$refs.ward_birthdate.value);
      formData.append('email', this.$refs.form.$refs.email.value);
      formData.append('phone', this.$refs.form.$refs.phone.value);
      formData.append('city', this.$refs.form.$refs.city.value);
      formData.append('help_needed', this.$refs.form.$refs.help_needed.value);
      formData.append('csrf_token', this.csrfToken); // Добавляем CSRF-токен

      // Отправляем данные на сервер с помощью axios
      axios.post('/mail.php', formData)
          .then(response => {
            alert(response.data);
            this.loading = false;
            this.$refs.form.reset();
          })
          .catch(error => {
            console.error('Ошибка при отправке формы:', error);
            this.loading = false;
          });
    },
    required (v) {
      return !!v || 'Это обязательно необходимо заполнить!'
    },
  },
  created() {
    // Получаем CSRF-токен с сервера
    axios.get('/csrf.php')
        .then(response => {
          this.csrfToken = response.data.csrf_token;
        })
        .catch(error => {
          console.error('Ошибка при получении CSRF-токена:', error);
        });
  }
}
</script>