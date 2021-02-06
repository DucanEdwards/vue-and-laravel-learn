<template>
  <div class="admin">
    <TopMenu />
    <QuickMenu />
    <div class="border p-4 rounded-sm bg-white mx-5 mt-10">
      <router-view />
  </div>
    {{Auth.user().name}}
  </div>
</template>

<script>
import QuickMenu from "./components/QuickMenu.vue";
import TopMenu from "./components/TopMenu";

export default {
  route: { meta: { auth: true } },
  components: { TopMenu, QuickMenu },
};
</script>

<style>
</style>