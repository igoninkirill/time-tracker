import App from './App.vue'
import { createPinia } from 'pinia'
import { createApp } from 'vue'

import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

// Plugins
import { registerPlugins } from './plugins/index.js'


const vuetify = createVuetify({
    components,
    directives
})

const app = createApp(App)

const pinia = createPinia()

app.use(pinia)

app.use(vuetify)

registerPlugins(app)

app.mount('#app')
