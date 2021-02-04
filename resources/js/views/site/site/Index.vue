<template>
  <div>
    <el-button type="primary" size="mini" @click="$router.push('site/site/create')">添加站点</el-button>
  </div>
</template>

<script>
export default {
  route: { path: "/admin" },
};
</script>

<style>
</style>