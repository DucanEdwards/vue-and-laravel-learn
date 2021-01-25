<template>
  <div class='hello'>
    <input :value='value' @input="$emit('input',$event.target.value)">
    {{value}}
    <button @click='change'>
      change
    </button>
    <hr>
  </div>
</template>

<script>
export default {
  props:[
    'value',
    'site'
  ],
  methods:{
    change() {
      this.$emit('parentChange','tom')
    }
  }
}
</script>

