<template>
  <div>
      <ul>
          <li v-for="user in users" :key="user.id" >
              {{user.name}}的年龄是{{user.age}}
          </li>
      </ul>
  </div>
</template>

<script>
const users=[
    {id:1,name:'wsz',age:'19'},
    {id:2,name:'wsz',age:'19'},
    {id:3,name:'wsz',age:'19'}
]
export default {
    data() {
        return {
            users
        }
    }
}
</script>

<style>

</style>