<template>
  <component :is="layout">
    <router-view />
  </component>
</template>

<script>
import { useRoute } from 'vue-router'
import { computed, watch } from 'vue'
import AuthLayout from '../layouts/AuthLayout.vue'
import SystemLayout from '../layouts/SystemLayout.vue'

export default {
  name: 'App',
  computed: {
    layout() {
      const route = useRoute()
      const layout = route.meta.layout || 'AuthLayout'
      if (layout === 'auth') return AuthLayout
      if (layout === 'system') return SystemLayout
      return 'div'
    }
  }
}
</script>
