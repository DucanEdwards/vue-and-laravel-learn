<template>
  <div id="app">
    <abc v-model='title' :site='obj' @parentChange='title=$event'/>
    <button @click='obj.site="google"'>
      change
    </button>
    {{title}}
  </div>
</template>

<script>
import Abc from "./components/Prop.vue"
export default {
  name: 'App',
  components: {
    Abc
  },
  data() {
    return {
      title:'google',
      obj:{
        name:'baidu.com'
      }
    }
  },
}
</script>

