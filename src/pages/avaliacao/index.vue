<script setup lang="ts">
import { useViewWrapper } from '/@src/stores/viewWrapper'

const viewWrapper = useViewWrapper()
viewWrapper.setPageTitle('Pendentes')

useHead({
  title: 'Pendentes',
})
</script>

<template>
  <div class="page-content-inner">
    <AvaliacoesList />
  </div>
</template>
