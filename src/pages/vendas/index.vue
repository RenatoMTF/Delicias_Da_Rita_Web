<script setup lang="ts">
import { useViewWrapper } from '/@src/stores/viewWrapper'

const viewWrapper = useViewWrapper()
viewWrapper.setPageTitle('Vendas')

useHead({
  title: 'Vendas',
})
</script>

<template>
  <div class="page-content-inner">
    <VendasList />
  </div>
</template>
