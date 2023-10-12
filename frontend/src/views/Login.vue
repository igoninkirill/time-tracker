<template>
  <v-container>
    <v-row justify="center">
      <v-col cols="12" md="4">
        <v-card>
          <v-card-title>Вход</v-card-title>
          <v-card-text>
            <v-text-field v-model="email" label="Email"></v-text-field>
            <v-text-field v-model="password" label="Пароль" type="password"></v-text-field>
          </v-card-text>
          <v-card-actions>
            <v-btn @click="login">Войти</v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import { ref } from 'vue';
import { useAuthStore } from '../store/auth.js'

export default {
  setup() {
    const email = ref('')
    const password = ref('')

    const { loginUser } = useAuthStore()

    const login = async () => {
      await loginUser({ email: email.value, password: password.value })
    }

    return {
      email,
      password,
      login
    }
  }
};
</script>
