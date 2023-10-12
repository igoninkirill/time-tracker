import { defineStore } from 'pinia/dist/pinia'
import apiClient from '../api/client.js'

export const useAuthStore = defineStore({
    id: 'auth',
    state: () => ({
        user: null,
        token: null
    }),
    actions: {
        async loginUser(credentials) {
            const response = await apiClient.post('/auth/login', credentials)
            this.user = response.data.user
            this.token = response.data.token
            apiClient.defaults.headers.common['Authorization'] = `Bearer ${this.token}`
        },
        logoutUser() {
            this.user = null
            this.token = null
            delete apiClient.defaults.headers.common['Authorization']
        }
    }
});
