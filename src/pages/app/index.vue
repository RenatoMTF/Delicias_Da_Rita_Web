<script setup lang="ts">
import { useViewWrapper } from '/@src/stores/viewWrapper'

const viewWrapper = useViewWrapper()
viewWrapper.setPageTitle('Meu Dashboard')

useHead({
  title: 'Meu Dashboard',
})
</script>

<template>
  <div class="page-content-inner">
    <DashAdmin />
  </div>
</template>
