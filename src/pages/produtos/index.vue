<script setup lang="ts">
import { useViewWrapper } from '/@src/stores/viewWrapper'

const viewWrapper = useViewWrapper()
viewWrapper.setPageTitle('Meus Produtos')

useHead({
  title: 'Meu Dashboard',
})
</script>

<template>
  <div class="page-content-inner">
    <ProdutosList />
  </div>
</template>
