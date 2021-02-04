<template>
  <div>
    <div class="flex justify-between">
    <el-input v-model="content" placeholder="" size="normal" clearable class="mr-2">
    </el-input>
    <img :src="captcha.img" alt="" class="rounded-sm cursor-pointer border-gray-200" @click="get()"/>
  </div>
  <error name='captcha.content'/>
  </div>
</template>

<script>
export default {
  data() {
    return {
        //后台返回
      captcha: {},
      //用户输入   
      content: "",
    };
  },
  created() {
    this.get();
  },
  methods: {
    async get() {
      this.captcha = await this.axios.get("captcha");
    },
  },
  watch:{
      content(n) {
          this.$emit('input',{content:this.content,key:this.captcha.key})
      }
  }
};
</script>

<style>
</style>