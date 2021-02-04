<template>
  <div class="text-xs text-red-400 mt-2 font-bold">
    <i class="fas fa-info-circle" v-show="$store.getters.errors(name)"></i>
    {{ $store.getters.errors(name) }}
  </div>
</template>

<script>
export default {
    props:["name"]
};
</script>

<style>
</style>