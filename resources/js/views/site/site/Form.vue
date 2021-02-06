<template>
  <div>
      <el-form :model="form" ref="form" label-width="80px" :inline="false" size="normal">
          <tab :tabs='tabs'/>
          <el-form-item label="站点名称">
              <el-input v-model="form.title"></el-input>
              <Error name="title"/>
          </el-form-item>
          <el-form-item label="站点域名">
              <el-input v-model="form.domain"></el-input>
              <Error name="domain"/>
          </el-form-item>
          <el-form-item>
              <el-button type="primary" @click="onSubmit">保存提交</el-button>
          </el-form-item>
      </el-form>
  </div>
</template>

<script>
const form = { title: "", domain: "" };
import tabs from './tabs'
export default {
  route: false,
  data() {
    return {
      form,tabs
    };
  },
  methods: {
      async onSubmit() {
          await this.axios.post(`site`,this.form)
          this.$router.push("/admin")
      }
  }
};
</script>

<style>
</style>